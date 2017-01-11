<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class ServiceController extends Controller
{
    //
    public function service_info()
    {
        $emp_show = DB::table('tbl_service')
                ->join('tbl_service_person', 'tbl_service.service_person_id', '=', 'tbl_service_person.service_person_id')
                ->select('tbl_service.*', 'tbl_service_person.*')
                ->orderBy('tbl_service.service_id', 'desc')
                //->where('service_status', 1)
                ->get();
        
//        echo '<pre>';
//        print_r($emp_show);
//        exit();
        
        $emp = view('ap.pages.people.info_service')
                ->with('emp_show', $emp_show);
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $emp);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    //--------------regi serevice
    public function add_service(Request $request)
    {
        //------tbl_service_people
        $person = array();
        $person['service_person_name'] = $request->b;
        $person['service_person_phone1'] = $request->c;
        $person['service_person_phone2'] = $request->d;
        $person['service_person_address'] = $request->e;
        $person['service_person_gender'] = $request->g_radio;
        $person_get_id = DB::table('tbl_service_person')->insertGetId($person);
        
        //------tbl_service
        $service = array();
        $service['service_type'] = $request->a;
        $service['service_person_id'] = $person_get_id;
        DB::table('tbl_service')->insert($service);
        
        Session::flash('add_service', 'Service Craeted Successfully!');
        return Redirect::to('info-service');
    }
    
    //--------------regi serevice_name
    public function name_add_service(Request $request)
    {
        $previous_url = url()->previous();
        //echo $url_current = url()->current()."<br>";
        
        //------tbl_service
        $service = array();
        $service['service_type'] = $request->a;
        $service['service_person_id'] = $request->id;
        DB::table('tbl_service')->insert($service);
        
        Session::flash('add_service_name', 'Service Craeted Successfully!');
        return Redirect::to($previous_url);
    }
    
    public function details_service_info($details_service_info)
    {
        $service_details = DB::table('tbl_service')
                ->join('tbl_service_person', 'tbl_service.service_person_id', '=', 'tbl_service_person.service_person_id')
                ->where('tbl_service_person.service_person_id', $details_service_info)
                ->select('tbl_service.*', 'tbl_service_person.*')
                ->get();
        
//        $service_p_details = $service_details[0];
//        echo '<pre>';
//        print_r($service_details);
//        print_r($service_p_details);
//        echo $service_p_details->service_type;
//        exit();
        
        $length = count($service_details);
        //echo 'length='.$length."<br>";
        $service_type = array();
        for($i=0; $i<$length; $i++){
            $service_type[$i] = $service_details[$i]->service_type;
        }
        
        $emp = view('ap.pages.people.info_service_details')
                ->with('service_details', $service_details)
                ->with('service_type', $service_type);
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $emp);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    //--------------edit serevice
    public function edit_service_info($service_person_id)
    {
        $service_edit = DB::table('tbl_service')
                ->join('tbl_service_person', 'tbl_service.service_person_id', '=', 'tbl_service_person.service_person_id')
                ->where('tbl_service_person.service_person_id', $service_person_id)
                ->select('tbl_service.*', 'tbl_service_person.*')
                ->get();
//        echo '<pre>';
//        print_r($service_details);
//        exit();
        
        $emp = view('ap.pages.people.info_service_edit')
                ->with('service_edit', $service_edit);
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $emp);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    //--------------update serevice
    public function update_service_info(Request $request)
    {
        //------service_id & service_person_id
        $service_id = $request->s_id;
        $service_person_id = $request->s_p_id;
        //------tbl_service_people
        $person = array();
        $person['service_person_name'] = $request->b;
        $person['service_person_phone1'] = $request->c;
        $person['service_person_phone2'] = $request->d;
        $person['service_person_address'] = $request->e;
        $person['service_person_gender'] = $request->g_radio;
        DB::table('tbl_service_person')
                ->where('tbl_service_person.service_person_id', $service_person_id)
                ->update($person);
        
        //------tbl_service
        $service = array();
        $service['service_person_id'] = $service_id;
        DB::table('tbl_service')
                ->where('tbl_service.service_id', $service_id)
                ->update($service);
        
        Session::flash('update_service', 'Service Updated Successfully!');
        return Redirect::to('info-service');
    }
    
    //--------------publication status
    public function status_service_info($service_id, $status)
    {
        
        if($status == 1){
            DB::table('tbl_service')
                ->where('service_id', $service_id)
                ->update(['service_status' => 1]);
            return Redirect::to('info-service');
            
        }else{
            DB::table('tbl_service')
                ->where('service_id', $service_id)
                ->update(['service_status' => 0]);
            return Redirect::to('info-service');
        }
    }




    //echo '<pre>';
    //print_r($person);
    //exit();
}