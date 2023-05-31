<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index(){
        return view('trips.index', [
            'trips' => Trip::all(),
            'cheap_trips' => Trip::orderBy('price')->take(4)->get(),
            'random_trips' => Trip::inRandomOrder()->limit(4)->get()
        ]);
    }

    public function show($id)
    {
        return view('trips.show', [
            't' => Trip::findOrFail($id)
        ]);
    }
}
