<?php

use Illuminate\Support\Facades\Route;

Route::get('navbar', function () {
    return view('layouts.navbar');
});

Route::get('footer', function () {
    return view('layouts.footer');
});