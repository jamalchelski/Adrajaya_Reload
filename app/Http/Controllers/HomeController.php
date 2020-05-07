<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\User;
use App\prabayar;
use App\topupsaldo;
use App\vouchergame;
use App\transferbank;
use App\transfersya;
use App\ecommerce;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
        $login = Auth::user();
        // dd($login);
        // toast("selamat datang",'success')->autoclose(2400);
        
        return view('home',compact('login'));
    }
    public function downline()
    {
        
        return view('downline');
    }
    public function pascabayar()
    {
        $prabayars = prabayar::all();
        // dd($prabayars);
        return view('pascabayar', compact('prabayars'));
    }
    public function topup()
    {
        $topups = topupsaldo::all();
        // dd($prabayars);
        return view('topup', compact('topups'));
    }
    public function game()
    {
        $games = vouchergame::all();
        // dd($prabayars);
        return view('game', compact('games'));
    }
    public function transfer()
    {
        $transfers = transferbank::all();
        // dd($transfers);
        return view('transfer', compact('transfers'));
    }
    public function syariah()
    {
        $transfers = transfersya::all();
        // dd($transfers);
        return view('transfersya', compact('transfers'));
    }
    public function ecommerce()
    {
        $ecommerces = ecommerce::all();
        // dd($ecommerces);
        return view('ecommerce', compact('ecommerces'));
    }
    public function prabayar()
    {
        $bg = "bg-primary";
        return view('prabayar',['bg' => $bg]);
    }
}
