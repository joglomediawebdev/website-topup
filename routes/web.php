<?php

use Illuminate\Support\Facades\Route;

Route::get('game', function () {
    return view('game');
});

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

