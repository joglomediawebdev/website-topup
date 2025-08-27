<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/game', [HomeController::class, 'game_view'])->name('game');

Route::get('promo', function () {
    return view('promo');
});

Route::get('pembayaran', function () {
    return view('pembayaran');
});

Route::get('navbar', function () {
    return view('layouts.navbar');
});

Route::get('footer', function () {
    return view('layouts.footer');
});
