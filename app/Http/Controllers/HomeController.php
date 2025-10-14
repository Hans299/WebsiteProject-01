<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // Cek apakah pengguna sudah login DAN memiliki id_role = 3
        if (Auth::check() && Auth::user()->role_id==3){
            // Jika kondisi terpenuhi, langsung arahkan ke route bernama 'landing'
            return redirect()->route('landing');
        }
        return view('home');
    }
}
