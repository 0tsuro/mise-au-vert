<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PensionController extends Controller
{
    public function edit()
    {
        $pension = auth()->user()->pension;

        return view('admin.pension.edit', compact('pension'));
    }

    public function update(Request $request)
    {
        $pension = auth()->user()->pension;

        $validated = $request->validate([
            'ville' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            'responsable' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'photo_principale' => ['nullable', 'image', 'max:2048'],
        ]);

        if ($request->hasFile('photo_principale')) {
            if ($pension->photo_principale) {
                Storage::disk('public')->delete($pension->photo_principale);
            }

            $validated['photo_principale'] = $request->file('photo_principale')->store('pensions', 'public');
        }

        $pension->update($validated);

        return redirect()
            ->route('admin.pension.edit')
            ->with('success', 'Pension mise à jour avec succès.');
    }
}