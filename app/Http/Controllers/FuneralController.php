<?php

namespace App\Http\Controllers;

use App\Models\Church;
use App\Models\Coffin;
use App\Models\Funeral;
use App\Models\Priest;
use App\Models\User;
use Carbon\Carbon;
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


    public function getPastFunerals()
    {
        $today = Carbon::today();
        $pastFunerals = Funeral::whereRaw("DAY(death_date) = ? AND MONTH(death_date) = ?", [$today->day, $today->month])
            ->whereYear('death_date', '<', $today->year)
            ->get();

        $coffins = Coffin::all();
        $churches = Church::all();
        $priests = Priest::all();

        return view('home', compact('pastFunerals', 'coffins', 'churches', 'priests'));
    }
    public function storeFuneral(Request $request)
    {
        // Walidacja danych
        $data = $request->validate([
            'deceased_name' => 'required',
            'deceased_age' => 'required|integer',
            'user_name' => 'required',
            'user_email' => 'required|email',
            'coffin_id' => 'required',
            'church_id' => 'nullable',
            'priest_id' => 'nullable',
        ]);

        // Sprawdzenie, czy użytkownik już istnieje na podstawie adresu e-mail
        $user = User::firstOrCreate(
            ['email' => $data['user_email']],
            ['name' => $data['user_name'], 'surname' => '', 'city' => '', 'role_id' => 3, 'birthday' => now(), 'password' => null] // Ustawienie hasła na null
        );


        // Teraz, gdy mamy użytkownika, możemy stworzyć wpis dla pogrzebu
        $funeralData = [
            'deceased_name' => $data['deceased_name'],
            'deceased_age' => $data['deceased_age'],
            'user_id' => $user->id,
            'coffin_id' => $data['coffin_id'],
            'church_id' => $data['church_id'],
            'priest_id' => $data['priest_id'],
            'price' => 0,
            'accepted' => false, // Możesz dostosować to pole w zależności od potrzeb
        ];

        Funeral::create($funeralData);

        // Przekierowanie użytkownika z powrotem z komunikatem o powodzeniu
        return redirect('/')->with('success', 'Zgłoszenie pogrzebu zostało dodane.');
    }

    public function acceptFuneral(Request $request, Funeral $funeral)
    {
        // Zmieniamy pole accepted na true
        $funeral->update(['accepted' => true]);

        // Przekierowujemy z powrotem z komunikatem
        return redirect()->route('funerals.waiting')->with('success', 'Funeral accepted.');
    }


    public function waitingForAcceptance()
    {
        $funerals = Funeral::where('accepted', false)->get();

        return view('funerals.waiting-for-acceptance', ['funerals' => $funerals]);
    }
}
