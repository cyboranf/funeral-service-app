<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChurchController;
use App\Http\Controllers\CoffinController;
use App\Http\Controllers\FuneralController;
use App\Http\Controllers\PriestController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
})->name('home');



Route::resource('churches', ChurchController::class);
Route::resource('coffins', CoffinController::class);
Route::resource('funerals', FuneralController::class);
Route::resource('priests', PriestController::class);
Route::resource('users', UserController::class);


// Routing dla logowania
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Routing dla rejestracji
Route::get('register', [UserController::class, 'create'])->name('register');
Route::post('register', [UserController::class, 'store']);

// Routing dla zarządzania użytkownikami

    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/about', function () {
        return view('about');
    })->name('about');
