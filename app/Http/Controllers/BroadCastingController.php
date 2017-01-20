<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;


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
    
//    public function notice_save(Request $request) {
//        
//        $a= array();
//        $a['title']= $request('title');
//        $a['description']= $request('description');
//        $a['publication_status']= $request('publication_status');
//        
//        DB::table('tbl_notice')->insert($a);
//        
//        Session::put('notice_inserted', 'Notice Inserted Successfully!!!');
//        return Redirect::to('broadcasting-notice');
//        
//        
//    }
    public function notice_save(Request $request){
        
        $save= array();
        $save['title']=$request->title;
        $save['description']=$request->description;
        $save['publication_status']=$request->publication_status;
        
        DB::table('tbl_notice')->insert($save);
        Session::put('notice_inserted', 'Notice Inserted Successfully!!!');
        return Redirect::to('broadcasting-notice');
    }
    
    
    
}
