<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class ServiceController extends Controller {

    //
    public function service_info() {
//        $emp_show = DB::table('tbl_service')
//                ->join('tbl_service_person', 'tbl_service.service_person_id', '=', 'tbl_service_person.service_person_id')
//                ->select('tbl_service.*', 'tbl_service_person.*')
//                ->orderBy('tbl_service.service_id', 'desc')
//                //->where('service_status', 1)
//                ->get();

//        echo '<pre>';
//        print_r($emp_show);
//        exit();

        $emp = view('ap.pages.people.info_service');
                //->with('emp_show', $emp_show);
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $emp);
        return view('master_ap')
                        ->with('maincontent', $master);
    }
    
    //--------------show_service_info 0f tbl_service
    public function show_service_info()
    {
        $show_service = DB::table('tbl_service')
                ->join('tbl_service_person', 'tbl_service.service_person_id', '=', 'tbl_service_person.service_person_id')
                ->select('tbl_service.*', 'tbl_service_person.*')
                ->orderBy('tbl_service.service_id', 'desc')
                //->where('service_status', 1)
                ->get();
        
        return $show_service;
    }

    //--------------regi serevice
    public function add_service(Request $request) {
        
        //----start_service_people_image
        $image = $request->file('image');
        
        if (isset($image)) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $destination_path = 'ap/assets/img/s_people_img/';
            $image_full_name = $image_name . '.' . $ext;
            $image_url = $destination_path . $image_full_name;

            $success = $image->move($destination_path, $image_full_name);
            if ($success) {
                $image_url = $destination_path . $image_full_name;
            } else {
                $image_url = NULL;
            }
        } else {
            $image_url = NULL;
        }
        //----end_service_people_image
        //------tbl_service_people
        $person = array();
        $person['service_person_name'] = $request->b;
        $person['service_person_phone1'] = $request->c;
        $person['service_person_phone2'] = $request->d;
        $person['service_person_address'] = $request->e;
        $person['service_person_gender'] = $request->g_radio;
        $person['service_person_image'] = $image_url;
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
    public function name_add_service(Request $request) {
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

    public function details_service_info($service_person_id) {
        $service_details = DB::table('tbl_service_person')
                //->join('tbl_service_person', 'tbl_service.service_person_id', '=', 'tbl_service_person.service_person_id')
                ->where('service_person_id', $service_person_id)
                ->select('tbl_service_person.*')
                ->get();

        $service_type = DB::table('tbl_service')
                ->join('tbl_service_person', 'tbl_service.service_person_id', '=', 'tbl_service_person.service_person_id')
                ->where('tbl_service_person.service_person_id', $service_person_id)
                ->select('tbl_service.service_id', 'tbl_service.service_type', 'tbl_service.service_status')
                ->get();

//        $service_p_details = $service_details[0];
        //echo '<pre>';
        //print_r($service_details);
        //print_r($service_p_details);
        //echo $service_p_details->service_type;
        //exit();
//        $length = count($service_details);
//        //echo 'length='.$length."<br>";
//        $service_type = array();
//        for($i=0; $i<$length; $i++){
//            $service_type[$i][$service_details[$i]->service_id] = $service_details[$i]->service_type;
//        }
//        echo '<pre>';
//        print_r($service_type);
//        exit();

        $url_current = url()->current();
        Session::put('url_current', $url_current);

        $emp = view('ap.pages.people.info_service_details')
                ->with('service_details', $service_details)
                ->with('service_type', $service_type);
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $emp);
        return view('master_ap')
                        ->with('maincontent', $master);
    }

    //--------------edit serevice
    public function edit_service_info($service_person_id) {

        $service_edit = DB::table('tbl_service_person')
                //->join('tbl_service_person', 'tbl_service.service_person_id', '=', 'tbl_service_person.service_person_id')
                ->where('tbl_service_person.service_person_id', $service_person_id)
                ->select('tbl_service_person.*')
                ->get();
//        echo '<pre>';
//        print_r($service_edit);
//        exit();

        $emp = view('ap.pages.people.info_service_edit')
                ->with('service_edit', $service_edit);
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $emp);
        return view('master_ap')
                        ->with('maincontent', $master);
    }

    //--------------update serevice
    public function update_service_info(Request $request) {
        //------service_id & service_person_id
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

        Session::flash('service_person', 'Your Profile Updated Successfully!');
        $url_current = Session::get('url_current');
        return Redirect::to($url_current);
    }

    //--------------show serevice_type
    public function show_type_service($service_id) {
        
        $service_type_show = DB::table('tbl_service')
                        ->where('service_id', $service_id)
                        ->get();
        return $service_type_show;
    }

    //--------------update serevice_type
    public function update_type_service(Request $request) {
        //------update service_type
        $service_id = $request->id;
        
        $service_type = array();
        $service_type['service_type'] = $request->a;
        DB::table('tbl_service')
                ->where('service_id', $service_id)
                ->update($service_type);

        //Session::flash('service_person', 'Your Profile Updated Successfully!');
        $url_current = Session::get('url_current');
        return Redirect::to($url_current);
    }
    
    //--------------show service_person_picture
    public function show_pic_person_service($service_person_id) {
        
        $service_person_pic = DB::table('tbl_service_person')
                        ->where('service_person_id', $service_person_id)
                        ->get();
        return $service_person_pic;
    }

    //--------------update serevice_type
    public function update_pic_people_service(Request $request) {
        //------start_picture
        $image = $request->file('image');
        $service_person_id = $request->a;

        if (isset($image)) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $destination_path = 'ap/images/s_people_img/';
            $image_full_name = $image_name . '.' . $ext;
            $image_url = $destination_path . $image_full_name;
            $success = $image->move($destination_path, $image_full_name);

            if ($success) {

                $service_person = array();
                $service_person['service_person_image'] = $image_url;
                DB::table('tbl_service_person')
                        ->where('service_person_id', $service_person_id)
                        ->update(['service_person_image' => $image_url]);

                Session::flash('service_person', 'Profile Picture Successfully Update!');
                $url_current = Session::get('url_current');
                return Redirect::to($url_current);
            }
        } else {
            $url_current = Session::get('url_current');
            return Redirect::to($url_current);
        }
        //------start_picture
    }

    //--------------status change of serevice_type
    public function status_type_service($service_id, $status) {

        if ($status == 1) {
            DB::table('tbl_service')
                    ->where('service_id', $service_id)
                    ->update(['service_status' => 1]);
            $url_current = Session::get('url_current');
            return Redirect::to($url_current);
        } else {
            DB::table('tbl_service')
                    ->where('service_id', $service_id)
                    ->update(['service_status' => 0]);
            $url_current = Session::get('url_current');
            return Redirect::to($url_current);
        }
    }

    //--------------publication status
    public function status_service_info($service_person_id, $status) {
//        echo $service_person_id.'-'.$status;
//        exit();
        if ($status == 1) {
            DB::table('tbl_service_person')
                    ->where('service_person_id', $service_person_id)
                    ->update(['service_person_status' => 1]);
            $previous_url = url()->previous();
            return Redirect::to($previous_url);
        } else {
            DB::table('tbl_service_person')
                    ->where('service_person_id', $service_person_id)
                    ->update(['service_person_status' => 0]);
            $previous_url = url()->previous();
            return Redirect::to($previous_url);
        }
    }

    //echo '<pre>';
    //print_r($person);
    //exit();
}
