<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Middleware\Auth2;
use App\Http\Controllers\CRUDFilmController;
use App\Http\Controllers\UzenetController;

Route::get('/', function () {return Inertia::render('welcome');})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {return Inertia::render('dashboard');})->name('dashboard');
    Route::get('user', function () { return view('user'); })->name("user");
    Route::get('admin', 'App\Http\Controllers\AdminController@adminPage');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';



Route::get('/filmek', 'App\Http\Controllers\FilmController@index');
Route::resource('CRUD', CRUDFilmController::class);
//Route::resource('kapcsolat', UzenetController::class);
Route::get('/kapcsolat', 'App\Http\Controllers\UzenetController@create' );
Route::post('/kapcsolat', 'App\Http\Controllers\UzenetController@store');
Route::get('/uzenet', 'App\Http\Controllers\UzenetController@index' );

