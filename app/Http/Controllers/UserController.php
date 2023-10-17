<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        if(Auth::check()){

            return view('dashboard');
        }
        return view('dashboard');
    }
}
