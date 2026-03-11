<?php

namespace App\Http\Controllers;

use App\Models\Pension;

class PensionController extends Controller
{
    public function index()
    {
        $pensions = Pension::all();

        return view('pensions.index', compact('pensions'));
    }

    public function show($id)
    {
        $pension = Pension::findOrFail($id);

        return view('pensions.show', compact('pension'));
    }
}