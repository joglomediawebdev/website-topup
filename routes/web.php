<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/game', [HomeController::class, 'game_view'])->name('game');
Route::get('/promo', [HomeController::class, 'promo_view'])->name('promo');
Route::get('/pembayaran', [HomeController::class, 'pembayaran_view'])->name('pembayaran');
Route::get('/pembayaran2', [HomeController::class, 'pembayaran2_view'])->name('pembayaran2');
Route::get('/pembayaran3', [HomeController::class, 'pembayaran3_view'])->name('pembayaran3');
Route::get('/pembayaran4', [HomeController::class, 'pembayaran4_view'])->name('pembayaran4');