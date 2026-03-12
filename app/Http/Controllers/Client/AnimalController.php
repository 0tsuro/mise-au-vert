<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Espece;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $proprietaire = auth()->user()->proprietaire()->with('animaux.espece')->first();

        return view('client.animaux.index', compact('proprietaire'));
    }

    public function create()
    {
        $especes = Espece::all();

        return view('client.animaux.create', compact('especes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'espece_id' => ['required', 'exists:especes,id'],
        ]);

        $validated['proprietaire_id'] = auth()->user()->proprietaire->id;

        Animal::create($validated);

        return redirect()->route('client.animaux.index')
            ->with('success', 'Animal ajouté avec succès.');
    }

    public function edit(Animal $animal)
    {
        abort_if($animal->proprietaire_id !== auth()->user()->proprietaire->id, 403);

        $especes = Espece::all();

        return view('client.animaux.edit', compact('animal', 'especes'));
    }

    public function update(Request $request, Animal $animal)
    {
        abort_if($animal->proprietaire_id !== auth()->user()->proprietaire->id, 403);

        $validated = $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'espece_id' => ['required', 'exists:especes,id'],
        ]);

        $animal->update($validated);

        return redirect()->route('client.animaux.index')
            ->with('success', 'Animal modifié avec succès.');
    }

    public function destroy(Animal $animal)
    {
        abort_if($animal->proprietaire_id !== auth()->user()->proprietaire->id, 403);

        $animal->delete();

        return redirect()->route('client.animaux.index')
            ->with('success', 'Animal supprimé avec succès.');
    }
}