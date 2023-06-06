<?php

namespace App\Http\Controllers;

use App\Models\Priest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PriestController extends Controller
{
    public function index()
    {
        $priests = Priest::all();
        return view('priests.index', compact('priests'));
    }

    public function create()
    {
        return view('priests.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'religion' => 'required',
        ]);

        Priest::create($data);

        return redirect()->route('priests.index')->with('success', 'Ksiądz został dodany.');
    }

    public function show(Priest $priest)
    {
        return view('priests.show', compact('priest'));
    }

    public function edit(Priest $priest)
    {
        return view('priests.edit', compact('priest'));
    }

    public function update(Request $request, Priest $priest)
    {
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'religion' => 'required',
        ]);

        $priest->update($data);

        return redirect()->route('priests.index')->with('success', 'Ksiądz został zaktualizowany.');
    }

    public function destroy(Priest $priest)
    {
        $priest->delete();

        return redirect()->route('priests.index')->with('success', 'Ksiądz został usunięty.');
    }
}
