<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function login(){
        return view('auth.login');
    }

    function dashboard(){
        return view('dashboard.index');
    }
}
