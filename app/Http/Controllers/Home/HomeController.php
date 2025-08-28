<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home');
    }

    public function game_view()
    {
        return view('home.game');
    }

    public function promo_view()
    {
        return view('home.promo');
    }

    public function pembayaran_view()
    {
        return view('home.pembayaran');
    }

    public function pembayaran2_view()
    {
        return view('home.pembayaran2');
    }

    public function pembayaran3_view()
    {
        return view('home.pembayaran3');
    }

    public function pembayaran4_view()
    {
        return view('home.pembayaran4');
    }
}
