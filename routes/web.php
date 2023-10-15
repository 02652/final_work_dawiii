<?php

use App\Http\Controllers\ProfileController;
use App\Models\LugarTuristico;
use App\Models\OfertaTuristica;
use Illuminate\Support\Facades\Route;
use App\Models\Region;

Route::controller(App\Http\Controllers\PageController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('/tourist_sites','tourist_sites')->name('tourist_sites');
    Route::get('/tourist_sites/{site:nombre}','site')->name('site');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    $regiones = Region::all();
    return view('home', ['regiones' => $regiones]);
});

Route::get('/lugares_turisticos', function () {
    $lugares_turisticos = LugarTuristico::all();
    return view('tourist_sites', ['lugares_turisticos' => $lugares_turisticos]);
});

Route::get('/ofertas_turisticas', function () {
    $ofertas_turisticas = OfertaTuristica::all();
    return view('tourist_offers', ['ofertas_turisticas' => $ofertas_turisticas]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/lugares_turisticos', App\Http\Controllers\TouristPlaceController::class);

require __DIR__.'/auth.php';
