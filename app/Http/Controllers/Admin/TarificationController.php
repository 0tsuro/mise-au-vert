<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TarificationController extends Controller
{
    public function edit()
    {
        $pension = auth()->user()->pension()->with('tarifications.typeGardiennage')->first();

        return view('admin.tarifs.edit', compact('pension'));
    }

    public function update(Request $request)
    {
        $pension = auth()->user()->pension()->with('tarifications')->first();

        $validated = $request->validate([
            'tarifs' => ['required', 'array'],
            'tarifs.*' => ['nullable', 'numeric', 'min:0'],
        ]);

        foreach ($pension->tarifications as $tarification) {
            if (isset($validated['tarifs'][$tarification->id])) {
                $tarification->update([
                    'tarif' => $validated['tarifs'][$tarification->id],
                ]);
            }
        }

        return redirect()
            ->route('admin.tarifs.edit')
            ->with('success', 'Tarifs mis à jour avec succès.');
    }
}