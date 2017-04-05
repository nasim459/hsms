<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class RegiController extends Controller {

    //

    public function regi_info() {
        $emp_show = DB::table('tbl_emp')
                ->get();
        
        $flat_info_show = DB::table('tbl_flat_info')
                ->where('bld_status', 1)
                ->orderBy('bld_name', 'asc')
                ->orderBy('bld_floor', 'asc')
                ->orderBy('bld_unit', 'asc')
                ->get();

        $regi = view('ap.pages.people.regi_info')
                ->with('emp_show', $emp_show)
                ->with('flat_info_show', $flat_info_show);
        return view('master_ap')
                        ->with('maincontent', $regi);
    }

    //=====Start Regi Rough Code================================
    public function rental_regi() {
        
        $previous_url = url()->previous();
        Session::put('regi_rental_p_u', $previous_url); //---regi_rental_previous_url means regisrtation_driver_previous_url
        
        $regi = view('ap.pages.people.regi_rental');
        return view('master_ap')
                        ->with('maincontent', $regi);
    }

    public function driver_regi() {
        
        $previous_url = url()->previous();
        Session::put('regi_d_p_u', $previous_url); //---regi_d_p_u means regisrtation_driver_previous_url
        
        $regi = view('ap.pages.people.regi_driver');
        return view('master_ap')
                        ->with('maincontent', $regi);
    }

    public function s_people_regi() {
        $regi = view('ap.pages.people.regi_s_people');
        return view('master_ap')
                        ->with('maincontent', $regi);
    }

    public function emp_regi() {
        
        $previous_url = url()->previous();
        Session::put('regi_emp_p_u', $previous_url); //---regi_emp_previous_u means regisrtation_driver_previous_url
        
        $regi = view('ap.pages.people.regi_emp');
        return view('master_ap')
                        ->with('maincontent', $regi);
    }

    public function visitor_regi() {
        $regi = view('ap.pages.people.regi_visitor');
        return view('master_ap')
                        ->with('maincontent', $regi);
    }

    //=====End Regi Rough Code===================================
    //=====Begin Registration====================================
    //--------------regi rental
    public function save_rental_regi(Request $request) {

        $image = $request->file('image');

        $image_name = str_random(20);
        $ext = strtolower($image->getClientOriginalExtension());
        $destination_path = 'ap/assets/img/rental_img/';
        $image_full_name = $image_name . '.' . $ext;
        $image_url = $destination_path . $image_full_name;

        $success = $image->move($destination_path, $image_full_name);
        if ($success) {
            $image_url = $destination_path . $image_full_name;
        } else {
            $image_url = NULL;
        }

        //------tbl_rental_details---------------------
        $details = array();
        $details['son_wife_off'] = $request->son_wife_off;
        $details['national_no'] = $request->national_no;
        $details['passport_no'] = $request->passport_no;
        $details['birth_date'] = $request->birth_day;
        $details['occupation'] = $request->qualification;
        $details['office_address'] = $request->office_address;
        $details['parking'] = $request->c_radio;
        $details['gender'] = $request->g_radio;
        //------rental permannent information----------------------------
        $details['pi_country'] = $request->pi_country;
        $details['pi_district'] = $request->pi_district;
        $details['pi_thana'] = $request->pi_thana;
        $details['pi_village'] = $request->pi_village;
        //------rental emergency information-----------------------------
        $details['ei_name'] = $request->ei_name;
        $details['ei_phone'] = $request->ei_phone;
        $details['ei_relation'] = $request->ei_relation;
        $details['ei_address'] = $request->ei_address;
        //------rental previous staying information----------------------
        $details['psi_owner_name'] = $request->psi_name;
        $details['psi_phone'] = $request->psi_phone;
        $details['psi_cause'] = $request->psi_cause;
        $details['psi_address'] = $request->psi_address;

        $details['phone_2'] = $request->rntl_phone2;
        $details_get_id = DB::table('tbl_rental_details')->insertGetId($details);

        //------tbl_rental_family-----------------------a
        $f = array();
        $f['f_name'] = $request->f_name;
        $f['f_occupation'] = $request->f_occupation;
        $f['f_phone'] = $request->f_phone;
        $f['f_staying'] = $request->f_staying;
        $f['f_age'] = $request->f_age;
        $f_get_id = DB::table('tbl_rental_family')->insertGetId($f);

        //------tbl_rental_reference--------------------a
        $ref = array();
        $ref['r_name'] = $request->r_name;
        $ref['r_phone'] = $request->r_phone;
        $ref['r_address'] = $request->r_address;
        $ref_get_id = DB::table('tbl_rental_reference')->insertGetId($ref);

        //------tbl_flat_info--------------------------
        $bld = array();
        $bld['bld_name'] = $request->building;
        $bld['bld_floor'] = $request->floor;
        $bld['bld_unit'] = $request->unit;
        $flat_info_get_id = DB::table('tbl_flat_info')->insertGetId($bld);

        //------tbl_rental------------------------------
        $rental = array();
        $rental['rental_name'] = $request->rntl_name;
        $rental['rental_id_no'] = $request->rntl_id;
        $rental['rental_phone_1'] = $request->rntl_phone1;
        $rental['rental_image'] = $image_url;
        $rental['rental_email'] = $request->rntl_email;
        $rental['rental_details_id'] = $details_get_id;
        $rental['rental_family_id'] = $f_get_id;
        $rental['rental_reference_id'] = $ref_get_id;
        $rental['flat_info_id'] = $flat_info_get_id;
        DB::table('tbl_rental')->insert($rental);

        Session::put('rental_inserted', 'Data Inserted Successfully!!!');
        return Redirect::to('info-rental');
    }

    //--------------regi employee
    public function save_emp_regi(Request $request) {

        $image = $request->file('image');

        $image_name = str_random(20);
        $ext = strtolower($image->getClientOriginalExtension());
        $destination_path = 'ap/assets/img/emp_img/';
        $image_full_name = $image_name . '.' . $ext;
        $image_url = $destination_path . $image_full_name;

        $success = $image->move($destination_path, $image_full_name);
        if ($success) {
            $image_url = $destination_path . $image_full_name;
        } else {
            $image_url = NULL;
        }

        //------tbl_emp_details---------------------
        $details = array();
        $details['son_wife_off'] = $request->son_wife_off;
        $details['emp_phone2'] = $request->phone2;
        $details['national_no'] = $request->national_no;
        $details['passport_no'] = $request->passport_no;
        $details['birth_date'] = $request->date;
        $details['emp_religion'] = $request->religion;
        $details['emp_gender'] = $request->gender;
        $details['present_address'] = $request->address;
        $details['epa_country'] = $request->country;
        $details['epa_district'] = $request->district;
        $details['epa_thana'] = $request->thana;
        $details['epa_village'] = $request->village;
        $details_get_id = DB::table('tbl_emp_details')->insertGetId($details);

        //------tbl_rental--------------------------
        $emp = array();
        $emp['emp_name'] = $request->emp_name;
        $emp['emp_position'] = $request->position;
        $emp['emp_phone1'] = $request->phone1;
        $emp['emp_email'] = $request->email;
        $emp['emp_image'] = $image_url;
        $emp['emp_details_id'] = $details_get_id;
        DB::table('tbl_emp')->insertGetId($emp);

        Session::put('emp_inserted', 'Data Inserted Successfully!!!');
        return Redirect::to('regi-emp');
//        echo '<pre>';
//        print_r($ref_get_id);
//        exit();
    }

    //=====End Registration=====================================

    public function save_driver_regi(Request $request) {

        $image = $request->file('image');

        if (!isset($image)) {
            $image_url = NULL;
        } else {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $destination_path = 'ap/assets/img/driver_img/';
            $image_full_name = $image_name . '.' . $ext;
            $image_url = $destination_path . $image_full_name;

            $success = $image->move($destination_path, $image_full_name);
            if ($success) {
                $image_url = $destination_path . $image_full_name;
            } else {
                $image_url = NULL;
            }
        }


        //------tbl_driver_details---------------------
        $details = array();
        $details['driver_son_wife_off'] = $request->son_wife_off;
        $details['driver_national_id'] = $request->national_id;
        $details['driver_passport_no'] = $request->passport_no;
        $details['driver_licence_no'] = $request->driving_licence;
        $details['driver_car_regi_no'] = $request->driver_car_regi_no;
        $details['dpi_gender'] = $request->g_radio;
        //------driver permannent information----------------------------
        $details['dpi_village'] = $request->dpi_village;
        $details['dpi_police_station'] = $request->dpi_police_station;
        $details['dpi_district'] = $request->dpi_district;
        $details['dpi_country'] = $request->dpi_country;
        $details['dpi_religion'] = $request->dpi_religion;

        $details['driver_phone2'] = $request->driver_phone2;
        $details_get_id = DB::table('tbl_driver_details')->insertGetId($details);

        //------tbl_driver------------------------------
        $driver = array();
        $driver['driver_name'] = $request->name;
        $driver['driver_phone1'] = $request->driver_phone1;
        $driver['driver_image'] = $image_url;
        $driver['driver_details_id'] = $details_get_id;

        DB::table('tbl_driver')->insertGetId($driver);

        Session::put('Driver_data_inserted', 'Data Inserted Successfully!!!');
        return Redirect::to('info-driver');
    }

    public function save_guest_regi(Request $request) {

        //------save Guest Informarion into tbl_guest---------------------
        $flat_info_id = $request->id;

        if ($flat_info_id == '') {
            $previous_url = url()->previous();
            return Redirect::to($previous_url);
        } else {
            $guest = array();
            $guest['guest_name'] = $request->b;
            $guest['guest_mobile'] = $request->c;
            $guest['guest_gender'] = $request->d;
            $guest['guest_address'] = $request->e;
            $guest['flat_info_id'] = $flat_info_id;
            DB::table('tbl_guest')->insert($guest);

            $previous_url = url()->previous();
            return Redirect::to($previous_url);
        }
    }

    //-----
    public function save_visitor_regi(Request $request) {

        //------save Visitor Informarion into tbl_visitor---------------------
        $visitor = array();
        $visitor['emp_id'] = $request->v_id;

        $save_visitor = DB::table('tbl_visitor')->insert($visitor);
        return $save_visitor;

//        echo '<pre>';
//        print_r($guest);
//        exit();
        //$previous_url = url()->previous();
        //return Redirect::to($previous_url);
    }

}
