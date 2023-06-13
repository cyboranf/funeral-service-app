<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChurchController;
use App\Http\Controllers\CoffinController;
use App\Http\Controllers\FuneralController;
use App\Http\Controllers\PriestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;


Route::get('/', [FuneralController::class, 'getPastFunerals'])->name('home');



Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/about2', function () {
    return view('about2');
})->name('about2');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::resource('churches', ChurchController::class);
Route::resource('coffins', CoffinController::class);
Route::resource('funerals', FuneralController::class);
Route::resource('priests', PriestController::class);
Route::resource('users', UserController::class);


// Routing dla logowania
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('loginPost');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Routing dla rejestracji
Route::view('register', 'auth.register')->name('register');
Route::post('register', [UserController::class, 'register']);



// Routing dla zarządzania użytkownikami

 Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');


//routingi dla service
Route::get('/churches2', [ChurchController::class, 'serviceIndex'])->name('churches2.index');
Route::get('/churches2/{church}', [ChurchController::class, 'serviceShow'])->name('churches2.show');


Route::get('/coffins2', [CoffinController::class, 'serviceIndex'])->name('coffins2.index');
Route::get('/coffins2/{coffin}', [CoffinController::class, 'serviceShow'])->name('coffins2.show');

Route::get('/funerals2', [FuneralController::class, 'serviceIndex'])->name('funerals2.index');
Route::get('/funerals2/{funeral}', [FuneralController::class, 'serviceShow'])->name('funerals2.show');

Route::get('/priests2', [PriestController::class, 'serviceIndex'])->name('priests2.index');
Route::get('/priests2/{priest}', [PriestController::class, 'serviceShow'])->name('priests2.show');

Route::get('/users2', [UserController::class, 'serviceIndex'])->name('users2.index');
Route::get('/users2/{user}', [UserController::class, 'serviceShow'])->name('users2.show');
