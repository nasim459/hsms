<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.login_ap');
    }
    
    public function signup()
    {
        return view('login.signup_ap');
    }
    
    
    
}
