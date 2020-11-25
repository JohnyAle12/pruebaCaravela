<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function userVerify(){
        if(Auth::user()->state){
            return redirect()->route('home');
        }
        return view('auth.user_verify');
    }
}
