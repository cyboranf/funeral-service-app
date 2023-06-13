<?php

namespace App\Http\Controllers;

use App\Models\Coffin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CoffinController extends Controller
{
    public function index()
    {
        $coffins = Coffin::all();
        return view('coffins.index', compact('coffins'));
    }

    public function create()
    {
        return view('coffins.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'material' => 'required',
            'color' => 'required',
            'size' => 'required',
            'priceOfCoffins' => 'required',
        ]);

        Coffin::create($data);

        return redirect()->route('coffins.index')->with('success', 'Trumna została dodana.');
    }

    public function show(Coffin $coffin)
    {
        return view('coffins.show', compact('coffin'));
    }

    public function edit(Coffin $coffin)
    {
        return view('coffins.edit', compact('coffin'));
    }

    public function update(Request $request, Coffin $coffin)
    {
        $data = $request->validate([
            'material' => 'required',
            'color' => 'required',
            'size' => 'required',
            'priceOfCoffins' => 'required',
        ]);

        $coffin->update($data);

        return redirect()->route('coffins.index')->with('success', 'Trumna została zaktualizowana.');
    }

    public function destroy(Coffin $coffin)
    {
        $coffin->funerals()->delete(); // Delete associated funerals
        $coffin->delete(); // Delete the coffin

        return redirect()->route('coffins.index')->with('success', 'Trumna została usunięta.');
    }

    public function serviceIndex()
    {
         $coffins = Coffin::all();
         return view('service.coffins.index', compact('coffins'));
    }

public function serviceShow(Coffin $coffin)
    {
        return view('service.coffins.show', compact('coffin'));
    }
}
