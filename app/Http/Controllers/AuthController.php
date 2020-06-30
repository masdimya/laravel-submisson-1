<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function register(Request $register)
    {
        //request here
        return redirect()->route('welcome');
    }

    public function welcome(){
        return view('welcome');
    }

}
