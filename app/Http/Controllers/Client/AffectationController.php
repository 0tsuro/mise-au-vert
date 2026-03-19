<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Affectation;
use App\Models\Box;
use App\Models\DateModel;
use Illuminate\Http\Request;

class AffectationController extends Controller
{
    public function create()
    {
        $proprietaire = auth()->user()->proprietaire;

        if (! $proprietaire) {
            return redirect()
                ->route('client.profil')
                ->with('error', 'Veuillez compléter votre profil avant de faire une réservation.');
        }

        $animaux = $proprietaire->animaux()->with('espece')->get();
        $boxes = Box::with(['pension', 'typeGardiennage'])->get();

        return view('client.affectations.create', compact('animaux', 'boxes'));
    }

   public function store(Request $request)
{
    $proprietaire = auth()->user()->proprietaire;

    if (! $proprietaire) {
        return redirect()
            ->route('client.profil')
            ->with('error', 'Veuillez compléter votre profil avant de faire une réservation.');
    }

$validated = $request->validate([
    'animal_id' => ['required', 'exists:animaux,id'],
    'box_id' => ['required', 'exists:boxes,id'],
    'date_debut' => ['required', 'date', 'after_or_equal:today'],
    'date_fin' => ['required', 'date', 'after:date_debut'],
]);

    $animal = $proprietaire->animaux()
        ->where('id', $validated['animal_id'])
        ->firstOrFail();

    $boxId = $validated['box_id'];
    $dateDebut = $validated['date_debut'];
    $dateFin = $validated['date_fin'];

    $conflit = \App\Models\Affectation::with('date')
        ->where('box_id', $boxId)
        ->whereHas('date', function ($query) use ($dateFin) {
            $query->where('date', '<=', $dateFin);
        })
        ->where('date_fin', '>=', $dateDebut)
        ->exists();

    if ($conflit) {
        return back()
            ->withInput()
            ->withErrors([
                'box_id' => 'Ce box est déjà réservé sur la période demandée.',
            ]);
    }

    $date = \App\Models\DateModel::firstOrCreate([
        'date' => $dateDebut,
    ]);

    \App\Models\Affectation::create([
        'date_id' => $date->id,
        'animal_id' => $animal->id,
        'box_id' => $boxId,
        'date_fin' => $dateFin,
        'regle' => false,
        'carnet_vaccination' => false,
        'poids' => null,
        'age' => null,
        'vaccin_a_jour' => false,
        'vermifuge_a_jour' => false,
    ]);

    return redirect()
        ->route('client.dashboard')
        ->with('success', 'Réservation effectuée avec succès.');
}

public function index()
{
    $proprietaire = auth()->user()->proprietaire;

    if (! $proprietaire) {
        return redirect()
            ->route('client.profil')
            ->with('error', 'Veuillez compléter votre profil.');
    }

    $affectations = \App\Models\Affectation::with([
        'animal.espece',
        'box.pension',
        'date'
    ])
    ->whereHas('animal', function ($query) use ($proprietaire) {
        $query->where('proprietaire_id', $proprietaire->id);
    })
    ->orderByDesc('created_at')
    ->get();

    return view('client.reservations.index', compact('affectations'));
}
public function destroy(\App\Models\Affectation $affectation)
{
    $proprietaire = auth()->user()->proprietaire;

    if (! $proprietaire) {
        return redirect()
            ->route('client.profil')
            ->with('error', 'Veuillez compléter votre profil.');
    }

    $animalAutorise = $proprietaire->animaux()
        ->where('id', $affectation->animal_id)
        ->exists();

    abort_unless($animalAutorise, 403);

    $affectation->delete();

    return redirect()
        ->route('client.reservations.index')
        ->with('success', 'Réservation annulée avec succès.');
}
}