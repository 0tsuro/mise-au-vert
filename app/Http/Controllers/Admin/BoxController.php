<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Box;
use App\Models\TypeGardiennage;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    public function index()
    {
        $pension = auth()->user()->pension()->with('boxes.typeGardiennage')->first();

        return view('admin.boxes.index', compact('pension'));
    }

    public function create()
    {
        $types = TypeGardiennage::all();

        return view('admin.boxes.create', compact('types'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'superficie' => ['required','numeric'],
            'type_gardiennage_id' => ['required','exists:type_gardiennages,id']
        ]);

        $validated['pension_id'] = auth()->user()->pension->id;

        Box::create($validated);

        return redirect()->route('admin.boxes.index');
    }

public function edit(Box $box)
{
    abort_if($box->pension_id !== auth()->user()->pension->id, 403);

    $types = TypeGardiennage::all();

    return view('admin.boxes.edit', compact('box', 'types'));
}

public function update(Request $request, Box $box)
{
    abort_if($box->pension_id !== auth()->user()->pension->id, 403);

    $validated = $request->validate([
        'superficie' => ['required', 'numeric'],
        'type_gardiennage_id' => ['required', 'exists:type_gardiennages,id']
    ]);

    $box->update($validated);

    return redirect()->route('admin.boxes.index');
}

public function destroy(Box $box)
{
    abort_if($box->pension_id !== auth()->user()->pension->id, 403);

    $box->delete();

    return redirect()->route('admin.boxes.index');
}
}