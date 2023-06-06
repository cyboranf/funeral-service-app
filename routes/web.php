<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChurchController;
use App\Http\Controllers\CoffinController;
use App\Http\Controllers\FuneralController;
use App\Http\Controllers\PriestController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('churches', ChurchController::class);
Route::resource('coffins', CoffinController::class);
Route::resource('funerals', FuneralController::class);
Route::resource('priests', PriestController::class);
Route::resource('users', UserController::class);
