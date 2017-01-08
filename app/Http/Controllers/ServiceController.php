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
    
    public function details_service_info($details_service_info)
    {
        $service_details = DB::table('tbl_service')
                ->join('tbl_service_person', 'tbl_service.service_person_id', '=', 'tbl_service_person.service_person_id')
                ->where('tbl_service_person.service_person_id', $details_service_info)
                ->select('tbl_service.*', 'tbl_service_person.*')
                //->orderBy('tbl_service.service_id', 'desc')
                ->get();
        
        
        $emp = view('ap.pages.people.info_service_details')
                ->with('service_details', $service_details);
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $emp);
        return view('master_ap')
                ->with('maincontent', $master);
        
//        echo '<pre>';
//        print_r($emp_show);
//        exit();
    }




    //echo '<pre>';
    //print_r($person);
    //exit();
}
