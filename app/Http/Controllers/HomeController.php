<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    //
    public function dashboard()
    {
        $master = view('ap.pages.dboard_home');
        return view('master_ap')
                ->with('maincontent', $master);
    }
}
