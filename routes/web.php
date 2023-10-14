<?php

use App\Http\Controllers\ProfileController;
use App\Models\LugarTuristico;
use Illuminate\Support\Facades\Route;
use App\Models\Region;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $regiones = Region::all();
    return view('home', ['regiones' => $regiones]);
});

Route::get('/lugares_turisticos', function () {
    $lugares_turisticos = LugarTuristico::all();
    return view('tourist_sites', ['lugares_turisticos' => $lugares_turisticos]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
