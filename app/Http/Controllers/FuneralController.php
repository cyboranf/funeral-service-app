<?php

namespace App\Http\Controllers;

use App\Models\Funeral;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FuneralController extends Controller
{
    public function index()
    {
        $funerals = Funeral::all();
        return view('funerals.index', compact('funerals'));
    }

    public function create()
    {
        return view('funerals.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'deceased_name' => 'required',
            'deceased_age' => 'required',
            'user_id' => 'required',
            'coffin_id' => 'required',
            'church_id' => 'nullable',
            'priest_id' => 'nullable',
            'priceOfFunerals' => 'required',
        ]);

        Funeral::create($data);

        return redirect()->route('funerals.index')->with('success', 'Pogrzeb został dodany.');
    }

    public function show(Funeral $funeral)
    {
        return view('funerals.show', compact('funeral'));
    }

    public function edit(Funeral $funeral)
    {
        return view('funerals.edit', compact('funeral'));
    }

    public function update(Request $request, Funeral $funeral)
    {
        $data = $request->validate([
            'deceased_name' => 'required',
            'deceased_age' => 'required',
            'user_id' => 'required',
            'coffin_id' => 'required',
            'church_id' => 'nullable',
            'priest_id' => 'nullable',
            'priceOfFunerals' => 'required',
        ]);

        $funeral->update($data);

        return redirect()->route('funerals.index')->with('success', 'Pogrzeb został zaktualizowany.');
    }

    public function destroy(Funeral $funeral)
    {
        $funeral->delete();

        return redirect()->route('funerals.index')->with('success', 'Pogrzeb został usunięty.');
    }
    public function serviceIndex()
    {
        $funerals = Funeral::all();
        return view('service.funerals.index', compact('funerals'));
    }

    public function serviceShow(Funeral $funeral)
    {
        return view('service.funerals.show', compact('funeral'));
    }
}
