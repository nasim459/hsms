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
    public function sms_bc()
    {
        //---show-sms-broadcasting
        $show_sms = DB::table('tbl_sms')
                ->select('tbl_sms.*')
                ->orderBy('sms_id', 'desc')
                ->get();
        
        $broadcasting = view('ap.pages.broadcasting.bc_sms')
                ->with('show_sms', $show_sms);
        $master = view('ap.pages.broadcasting.bc_master')
                ->with('broadcasting_content', $broadcasting);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    //-----send-sms-broadcasting
    public function send_sms_bc(Request $request) {

        $sms= array();
        $sms['sms_area']= $request->sms_area;
        $sms['sms_description']= $request->sms_desc;
        DB::table('tbl_sms')->insertGetId($sms);
        
        Session::put('sms_send', 'SMS Send Successfully!!!');
        return Redirect::to('broadcasting-sms');
    }
    
    public function notice()
    {
        //---notice_show
        $show_notice = DB::table('tbl_notice')
                ->join('tbl_notice_area', 'tbl_notice.notice_area_id', '=', 'tbl_notice_area.notice_area_id')
                //->join('tbl_flat_info', 'tbl_notice_area.flat_info_id', '=', 'tbl_notice_area.flat_info_id')
                //->where('tbl_notice.notice_area_id', 'tbl_notice_area.notice_area_id')
                ->select('tbl_notice.*', 'tbl_notice_area.*')
                ->orderBy('notice_id', 'desc')
                ->get();
//        echo '<pre>';
//        print_r($show_notice);
//        exit();
        
        $broadcasting = view('ap.pages.broadcasting.bc_notice')
                ->with('show_notice', $show_notice);
        $master = view('ap.pages.broadcasting.bc_master')
                ->with('broadcasting_content', $broadcasting);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    //--------------publication staus change
    public function status_broadcasting($notice_id, $status)
    {
        //------change notice_status of tbl_notice
        if($status == 0) {
            DB::table('tbl_notice')
                ->where('notice_id', $notice_id)
                ->update(['notice_status' => '0']);
            return Redirect::to('broadcasting-notice');
        } else {
            DB::table('tbl_notice')
                ->where('notice_id', $notice_id)
                ->update(['notice_status' => '1']);
            return Redirect::to('broadcasting-notice');
        }
    }
    
    public function notice_add()
    {
        $broadcasting = view('ap.pages.broadcasting.bc_notice_add');
        $master = view('ap.pages.broadcasting.bc_master')
                ->with('broadcasting_content', $broadcasting);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function notice_save(Request $request) {

        $notice_area= array();
        $notice_area['notice_area_description']= $request->b;
        $notice_area_id = DB::table('tbl_notice_area')->insertGetId($notice_area);
        
        $notice= array();
        $notice['notice_title']= $request->a;
        $notice['notice_description']= $request->c;
        $notice['notice_area_id']= $notice_area_id;
        DB::table('tbl_notice')->insertGetId($notice);
        
        Session::put('notice_inserted', 'Notice Inserted Successfully!!!');
        return Redirect::to('broadcasting-notice');
    }
    
    //----Edit_Notice_Broadcasting
    public function edit_notice_broadcasting($notice_id) {
        
        //---notice_show
        $edit_notice_show = DB::table('tbl_notice')
                ->join('tbl_notice_area', 'tbl_notice.notice_area_id', '=', 'tbl_notice_area.notice_area_id')
                ->where('notice_id', $notice_id)
                ->select('tbl_notice.*', 'tbl_notice_area.*')
                ->orderBy('notice_id', 'desc')
                ->get();
        return $edit_notice_show;
    }
    
    public function update_notice_broadcasting(Request $request) {

        $notice_id = $request->id;
        $notice_area_id = $request->area_id;
        
        $notice_area= array();
        $notice_area['notice_area_description']= $request->area;
        DB::table('tbl_notice_area')
                ->where('notice_area_id', $notice_area_id)
                ->update($notice_area);
        
        $notice= array();
        $notice['notice_title']= $request->title;
        $notice['notice_description']= $request->description;
        $notice['notice_status']= $request->status;
        DB::table('tbl_notice')
                ->where('notice_id', $notice_id)
                ->update($notice);
        
        Session::put('notice_inserted', 'Notice Inserted Successfully!!!');
        return Redirect::to('broadcasting-notice');
    }


    public function n_notice_save(Request $request){
        
        $title = $request->title;
        $description = $request->description;
        $status = $request->status;
        
        $save= array();
        $save['notice_title'] = $title;
        $save['notice_description'] = $description;
        $save['notice_status'] = $status;
        
        $notice = DB::table('tbl_notice')->insert($save);
        //Session::put('notice_inserted', 'Notice Inserted Successfully!!!');
        //return Redirect::to('broadcasting-notice');
//        if($notice){
//            $data['result']='Success';
//        }else{
//            $data['result']='Fail';
//        }
        return $notice;
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
