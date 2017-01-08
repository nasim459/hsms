<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileController extends Controller
{
    //
    public function admin_profile()
    {
        $profile = view('ap.pages.profile.profile_admin');
        $master = view('ap.pages.profile.profile_master')
                ->with('people_content', $profile);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    
    
}
