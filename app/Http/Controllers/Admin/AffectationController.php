<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Affectation;

class AffectationController extends Controller
{
 public function index(\Illuminate\Http\Request $request)
{
    $pension = auth()->user()->pension;
    $filtre = $request->query('statut', 'tous');
    $today = now()->toDateString();

    $query = Affectation::with([
        'animal.espece',
        'animal.proprietaire',
        'box',
        'date',
    ])
    ->whereHas('box', function ($query) use ($pension) {
        $query->where('pension_id', $pension->id);
    });

    if ($filtre === 'avenir') {
        $query->whereHas('date', function ($query) use ($today) {
            $query->where('date', '>', $today);
        });
    }

    if ($filtre === 'en_cours') {
        $query->whereHas('date', function ($query) use ($today) {
            $query->where('date', '<=', $today);
        })->where('date_fin', '>=', $today);
    }

    if ($filtre === 'termines') {
        $query->where('date_fin', '<', $today);
    }

    if ($filtre === 'vaccins_non_a_jour') {
        $query->where('vaccin_a_jour', false);
    }

    if ($filtre === 'vermifuge_non_a_jour') {
        $query->where('vermifuge_a_jour', false);
    }

    if ($filtre === 'non_regles') {
        $query->where('regle', false);
    }

    $affectations = $query->orderByDesc('created_at')->get();

    return view('admin.reservations.index', compact('affectations', 'pension', 'filtre'));
}

    public function edit(Affectation $affectation)
{
    $pension = auth()->user()->pension;

    abort_unless($affectation->box->pension_id === $pension->id, 403);

    $affectation->load([
        'animal.espece',
        'animal.proprietaire',
        'box',
        'date',
    ]);

    return view('admin.reservations.edit', compact('affectation'));
}

public function update(\Illuminate\Http\Request $request, Affectation $affectation)
{
    $pension = auth()->user()->pension;

    abort_unless($affectation->box->pension_id === $pension->id, 403);

    $validated = $request->validate([
        'regle' => ['nullable', 'boolean'],
        'carnet_vaccination' => ['nullable', 'boolean'],
        'vaccin_a_jour' => ['nullable', 'boolean'],
        'vermifuge_a_jour' => ['nullable', 'boolean'],
        'poids' => ['nullable', 'numeric', 'min:0'],
        'age' => ['nullable', 'integer', 'min:0'],
    ]);

    $affectation->update([
        'regle' => $request->boolean('regle'),
        'carnet_vaccination' => $request->boolean('carnet_vaccination'),
        'vaccin_a_jour' => $request->boolean('vaccin_a_jour'),
        'vermifuge_a_jour' => $request->boolean('vermifuge_a_jour'),
        'poids' => $validated['poids'] ?? null,
        'age' => $validated['age'] ?? null,
    ]);

    return redirect()
        ->route('admin.reservations.index')
        ->with('success', 'Séjour mis à jour avec succès.');
}
public function facturation()
{
    $pension = auth()->user()->pension;

    $affectations = Affectation::with([
        'animal.espece',
        'animal.proprietaire',
        'box.typeGardiennage',
        'box.pension',
        'date',
    ])
    ->whereHas('box', function ($query) use ($pension) {
        $query->where('pension_id', $pension->id);
    })
    ->where('regle', false)
    ->where('date_fin', '<', now()->toDateString())
    ->get()
    ->map(function ($affectation) use ($pension) {
        $dateDebut = \Carbon\Carbon::parse($affectation->date->date);
        $dateFin = \Carbon\Carbon::parse($affectation->date_fin);

        $nbJours = $dateDebut->diffInDays($dateFin) + 1;

        $tarification = $pension->tarifications()
            ->where('type_gardiennage_id', $affectation->box->type_gardiennage_id)
            ->first();

        $tarifJournalier = $tarification?->tarif ?? 0;
        $montant = $nbJours * $tarifJournalier;

        $affectation->nb_jours = $nbJours;
        $affectation->tarif_journalier = $tarifJournalier;
        $affectation->montant_estime = $montant;

        return $affectation;
    });

    return view('admin.facturation.index', compact('affectations', 'pension'));
}
}