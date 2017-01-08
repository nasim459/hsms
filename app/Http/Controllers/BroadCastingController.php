<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BroadCastingController extends Controller
{
    //
    public function sms()
    {
        $broadcasting = view('ap.pages.broadcasting.bc_sms');
        $master = view('ap.pages.broadcasting.bc_master')
                ->with('broadcasting_content', $broadcasting);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function sms_add()
    {
        $broadcasting = view('ap.pages.broadcasting.bc_sms_add');
        $master = view('ap.pages.broadcasting.bc_master')
                ->with('broadcasting_content', $broadcasting);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function notice()
    {
        $broadcasting = view('ap.pages.broadcasting.bc_notice');
        $master = view('ap.pages.broadcasting.bc_master')
                ->with('broadcasting_content', $broadcasting);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function notice_add()
    {
        $broadcasting = view('ap.pages.broadcasting.bc_notice_add');
        $master = view('ap.pages.broadcasting.bc_master')
                ->with('broadcasting_content', $broadcasting);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    
    
}
