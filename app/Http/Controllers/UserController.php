<?php

namespace App\Http\Controllers;

use App\Models\Funeral;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'birthday' => 'required',
            'city' => 'required',
            'role_id' => 'required',
        ]);

        $data['birthday'] = Carbon::parse($data['birthday']);

        User::create($data);

        return redirect('/users')->with('success', 'Użytkownik został dodany.');
    }

    public function register(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'surname' => 'required',
        'birthday' => 'required',
        'city' => 'required',
        'role_id' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
    ]);

    $data['birthday'] = Carbon::parse($data['birthday']);
    $data['password'] = bcrypt($data['password']); // Hashowanie hasła

    User::create($data);

    return redirect('/')->with('success', 'Użytkownik został dodany.');
}



    public function show(User $user)
    {
        $user->birthday = Carbon::parse($user->birthday);

        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'birthday' => 'required|date',
            'city' => 'required',
            'role_id' => 'required',
        ]);

        $data['birthday'] = Carbon::parse($data['birthday']);

        $user->fill($data);
        $user->save();

        return redirect()->route('users.index')->with('success', 'Użytkownik został zaktualizowany.');
    }

    public function destroy(User $user)
    {
        $user->funerals()->delete(); // Delete associated funerals
        $user->delete(); // Delete the user

        return redirect()->route('users.index')->with('success', 'Użytkownik został usunięty.');
    }

    public function serviceIndex()
    {
        $users = User::all();
        return view('service.users.index', compact('users'));
    }

    public function serviceShow(User $user)
    {
        return view('service.users.show', compact('user'));
    }


}
