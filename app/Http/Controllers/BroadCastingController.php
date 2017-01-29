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
//        echo $a;
//        exit();
        
        $data = json_decode(file_get_contents("php://input"));
        $title = mysql_real_escape_string($data->title);
        $description = mysql_real_escape_string($data->description);
        $status = mysql_real_escape_string($data->status);
        
        $save= array();
        $save['notice_title'] = $title;
        $save['notice_description'] = $description;
        $save['notice_status'] = $status;
        
        $notice = DB::table('tbl_notice')->insert($save);
        return $notice;
        //Session::put('notice_inserted', 'Notice Inserted Successfully!!!');
        //return Redirect::to('broadcasting-notice');
    }

//    public function notice_save($a, $b, $c){
//        
//        echo $a;
//        exit();
//        
//        $save= array();
//        $save['notice_title'] = $a;
//        $save['notice_description'] = $b;
//        $save['notice_status'] = $c;
//        
//        DB::table('tbl_notice')->insert($save);
//        Session::put('notice_inserted', 'Notice Inserted Successfully!!!');
//        //return Redirect::to('broadcasting-notice');
//    }
    
    
    
}
