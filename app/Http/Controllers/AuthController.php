<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage(){
        return view('logging.login');
    }

    public function home(){
        if(!empty(Auth::user())){
            return view('yeemon.home');
        }
        return view('logging.login');
    }
}
