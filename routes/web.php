<?php

use App\Http\Controllers\ProfileController;
use App\Models\LugarTuristico;
use App\Models\OfertaTuristica;
use Illuminate\Support\Facades\Route;
use App\Models\Region;

Route::controller(App\Http\Controllers\PageController::class)->group(function(){
   // Route::get('/','index')->name('home');
    Route::get('/regions/{region:id}','region_detail')->name('region');
    Route::get('/tourist_offers','tourist_offers')->name('tourist_offers');
    Route::get('/tourist_offers/{offer:id}','offer_detail')->name('offer');
    Route::get('/cart/show/{offer}/{cart}','offer_cart_detail')->name('offer_cart');
    Route::get('/tourist_sites/{site:id}','site_detail')->name('site');
    Route::get('/tourist_sites','tourist_sites')->name('tourist_sites');
    Route::get('/cart','cart')->name('cart');
    Route::post('/cart', 'cartStore')->name('cart_create');
    // Route::post('/cart/delete', 'cartDestroy')->name('cart_delete');
    Route::get('/cart/{id}/delete', 'cartDestroy')->name('cart_delete');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
