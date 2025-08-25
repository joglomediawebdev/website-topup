<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('game', function () {
    return view('game');
});

Route::get('navbar', function () {
    return view('layouts.navbar');
});

Route::get('footer', function () {
    return view('layouts.footer');
});
