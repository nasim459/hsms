<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class RegiController extends Controller
{
    //
    public function regi_info()
    {
        $regi = view('ap.pages.people.regi_info');
        return view('master_ap')
                ->with('maincontent', $regi);
    }
    
    //=====Start Regi Rough Code================================
    public function rental_regi()
    {
        $regi = view('ap.pages.people.regi_rental');
        return view('master_ap')
                ->with('maincontent', $regi);
    }
    public function driver_regi()
    {
        $regi = view('ap.pages.people.regi_driver');
        return view('master_ap')
                ->with('maincontent', $regi);
    }
    public function s_people_regi()
    {
        $regi = view('ap.pages.people.regi_s_people');
        return view('master_ap')
                ->with('maincontent', $regi);
    }
    public function emp_regi()
    {
        $regi = view('ap.pages.people.regi_emp');
        return view('master_ap')
                ->with('maincontent', $regi);
    }
    public function visitor_regi()
    {
        $regi = view('ap.pages.people.regi_visitor');
        return view('master_ap')
                ->with('maincontent', $regi);
    }
    //=====End Regi Rough Code===================================
    
    //=====Begin Registration====================================
    //--------------regi rental
    public function save_rental_regi(Request $request)
    {
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
        $rental['rental_phone_1'] = $request->rntl_phone1;
        $rental['rental_email'] = $request->rntl_email;
        $rental['rental_details_id'] = $details_get_id;
        $rental['rental_family_id'] = $f_get_id;
        $rental['rental_reference_id'] = $ref_get_id;
        $rental['flat_info_id'] = $flat_info_get_id;
        DB::table('tbl_rental')->insertGetId($rental);
        
        Session::put('rental_inserted', 'Data Inserted Successfully!!!');
        return Redirect::to('info-owner');
    }
    //--------------regi employee
    public function save_emp_regi(Request $request)
    {
        
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
        $emp['emp_details_id'] = $details_get_id;
        DB::table('tbl_emp')->insertGetId($emp);
        
        Session::put('emp_inserted', 'Data Inserted Successfully!!!');
        return Redirect::to('regi-emp');
//        echo '<pre>';
//        print_r($ref_get_id);
//        exit();
    }
    //=====End Registration=====================================
    
    
    
    
 
}
