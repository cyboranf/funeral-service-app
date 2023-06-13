<?php

namespace App\Http\Controllers;

use App\Models\Church;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ChurchController extends Controller
{
    public function index()
    {
        $churches = Church::all();
        return view('churches.index', compact('churches'));
    }

    public function create()
    {
        return view('churches.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        Church::create($data);

        return redirect()->route('churches.index')->with('success', 'Kościół został dodany.');
    }

    public function show(Church $church)
    {
        return view('churches.show', compact('church'));
    }

    public function edit(Church $church)
    {
        return view('churches.edit', compact('church'));
    }

    public function update(Request $request, Church $church)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        $church->update($data);

        return redirect()->route('churches.index')->with('success', 'Kościół został zaktualizowany.');
    }

    public function destroy(Church $church)
    {
        $church->delete();

        return redirect()->route('churches.index')->with('success', 'Kościół został usunięty.');
    }

    public function serviceIndex()
    {
        $churches = Church::all();
        return view('service.churches.index', compact('churches'));
    }

    public function serviceShow(Church $church)
    {
        return view('service.churches.show', compact('church'));
    }
}
