<?php

use Illuminate\Support\Facades\Route;

Route::get('game', function () {
    return view('game');
});

Route::get('navbar', function () {
    return view('layouts.navbar');
});

Route::get('footer', function () {
    return view('layouts.footer');
});

