<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EmailController extends Controller
{
    //
    public function inbox_email()
    {
        $broadcasting = view('ap.pages.broadcasting.bc_email_inbox');
        $master = view('ap.pages.broadcasting.bc_master')
                ->with('broadcasting_content', $broadcasting);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function compose_email()
    {
        $broadcasting = view('ap.pages.broadcasting.bc_email_compose');
        $master = view('ap.pages.broadcasting.bc_master')
                ->with('broadcasting_content', $broadcasting);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function hand_cash_payment()
    {
        $broadcasting = view('ap.pages.broadcasting.p_hand_cash.blade');
        $master = view('ap.pages.broadcasting.bc_master')
                ->with('broadcasting_content', $broadcasting);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    
    
}
