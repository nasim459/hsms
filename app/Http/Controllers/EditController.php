<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class EditController extends Controller
{
    //
    //--------------Begin edit information-------------------------
    public function edit_rental_info($rental_id)
    {
        $edit_rental = DB::table('tbl_rental')
                ->join('tbl_flat_info', 'tbl_rental.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->join('tbl_rental_details', 'tbl_rental.rental_details_id', '=', 'tbl_rental_details.rental_details_id')
                ->join('tbl_rental_family', 'tbl_rental.rental_family_id', '=', 'tbl_rental_family.rental_family_id')
                ->join('tbl_rental_reference', 'tbl_rental.rental_reference_id', '=', 'tbl_rental_reference.rental_reference_id')
                ->where('tbl_rental.rental_id', '=', $rental_id)
                ->get();
        
//        echo '<pre>';
//        print_r($edit_rental);
//        exit();
        
        $edit = view('ap.pages.people.info_rental_edit')
                ->with('edit_rental', $edit_rental);
        return view('master_ap')
                ->with('maincontent', $edit);
        
    }
    
    public function edit_emp_info($emp_details_id)
    {

        $edit_emp = DB::table('tbl_emp')
                ->join('tbl_emp_details', 'tbl_emp.emp_details_id', '=', 'tbl_emp_details.emp_details_id')
                ->where('tbl_emp.emp_details_id', '=', $emp_details_id)
                ->get();
        
//        echo '<pre>';
//        print_r($edit_emp);
//        exit();
        
        $edit = view('ap.pages.people.info_emp_edit')
                ->with('edit_emp', $edit_emp);
        return view('master_ap')
                ->with('maincontent', $edit);
        
    }
    
    public function edit_driver_info($driver_details_id) {
        
        $edit_driver = DB::table('tbl_driver')
                ->join('tbl_driver_details', 'tbl_driver.driver_details_id', '=', 'tbl_driver_details.driver_details_id')
                ->where('tbl_driver.driver_details_id', '=', $driver_details_id)
                ->get();
        
//        echo '<pre>';
//        print_r($edit_driver);
//        exit();
        
        $edit = view('ap.pages.people.info_driver_edit')
                ->with('edit_driver', $edit_driver);
        return view('master_ap')
                ->with('maincontent', $edit);
        
    }
    //--------------End edit information-------------------------
    
    //--------------Begin update information-------------------------
    public function update_rental_info(Request $request)
    {
        //------id of all table---------------------
        $flat_info_id = $request->flat_info_id;
        $rental_id = $request->rental_id;
        $rental_details_id = $request->rental_details_id;
        $rental_family_id = $request->rental_family_id;
        $rental_reference_id = $request->rental_reference_id;
        
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
        DB::table('tbl_rental_details')
                ->where('tbl_rental_details.rental_details_id',$rental_details_id)
                ->update($details);
        
        //------tbl_rental_family-----------------------
        $f = array();
        $f['f_name'] = $request->f_name;
        $f['f_occupation'] = $request->f_occupation;
        $f['f_phone'] = $request->f_phone;
        $f['f_staying'] = $request->f_staying;
        $f['f_age'] = $request->f_age;
        DB::table('tbl_rental_family')
                ->where('tbl_rental_family.rental_family_id', $rental_family_id)
                ->update($f);
        
        //------tbl_rental_reference--------------------
        $ref = array();
        $ref['r_name'] = $request->r_name;
        $ref['r_phone'] = $request->r_phone;
        $ref['r_address'] = $request->r_address;
        DB::table('tbl_rental_reference')
                ->where('tbl_rental_reference.rental_reference_id', $rental_reference_id)
                ->update($ref);
        
        //------tbl_flat_info--------------------------
        $bld = array();
        $bld['bld_name'] = $request->building;
        $bld['bld_floor'] = $request->floor;
        $bld['bld_unit'] = $request->unit;
        DB::table('tbl_flat_info')
                ->where('tbl_flat_info.flat_info_id', $flat_info_id)
                ->update($bld);
        
        //------tbl_rental------------------------------
        $rental = array();
        $rental['rental_name'] = $request->rntl_name;
        $rental['rental_phone_1'] = $request->rntl_phone1;
        $rental['rental_email'] = $request->rntl_email;
        DB::table('tbl_rental')
                ->where('tbl_rental.rental_id', $rental_id)
                ->update($rental);
        
        //Session::put('rental_insert', 'Data Inserted Successfully!!!');
        //return Redirect::to('info-owner-details', $rental_id);

        return redirect()->route('rental-edit', $rental_id);
        
        //echo '<pre>';
        //print_r($ref_get_id);
        //exit();
    }
    
    public function update_emp_info(Request $request)
    {
        //------emp_id & emp_details_id---------------------
        $emp_id = $request->emp_id;
        $emp_details_id = $request->emp_details_id;
        
//        echo '<pre>';
//        print_r($emp_id);
//        exit();
        
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
        
        DB::table('tbl_emp_details')
                ->where('tbl_emp_details.emp_details_id', $emp_details_id)
                ->update($details);
        
        //------tbl_emp-----------------------
        $emp = array();
        $emp['emp_name'] = $request->emp_name;
        $emp['emp_position'] = $request->position;
        $emp['emp_phone1'] = $request->phone1;
        $emp['emp_email'] = $request->email;
        
        DB::table('tbl_emp')
                ->where('tbl_emp.emp_id', $emp_id)
                ->update($emp);
        
        return Redirect::to('info-emp');
        
        //echo '<pre>';
        //print_r($ref_get_id);
        //exit();
    }
    
    public function update_driver_info(Request $request)
    {
        
        //------driver_id & driver_details_id---------------------
        $driver_id = $request->driver_id;
        $driver_details_id = $request->driver_details_id;
        
//        echo '<pre>';
//        print_r($driver_id);
//        exit();
        
        //------tbl_driver_details---------------------
        $details = array();
        $details['driver_son_wife_off'] = $request->son_wife_off;
        $details['driver_phone2'] = $request->driver_phone2;
        $details['driver_national_id'] = $request->national_id;
        $details['driver_passport_no'] = $request->passport_no;
        $details['driver_licence_no'] = $request->driving_licence;
        $details['driver_car_regi_no'] = $request->driver_car_regi_no;
        $details['dpi_religion'] = $request->dpi_religion;
        $details['dpi_gender'] = $request->g_radio;
      
        $details['dpi_country'] = $request->dpi_country;
        $details['dpi_district'] = $request->dpi_district;
        $details['dpi_police_station'] = $request->dpi_district;
        $details['dpi_village'] = $request->dpi_village;
        
        DB::table('tbl_driver_details')
                ->where('tbl_driver_details.driver_details_id', $driver_details_id)
                ->update($details);
        
        //------tbl_emp-----------------------
        $driver= array();
        $driver['driver_name'] = $request->name;
        $driver['driver_phone1'] = $request->driver_phone1;
      
        
        DB::table('tbl_driver')
                ->where('tbl_driver.driver_id', $driver_id)
                ->update($driver);
        
        return Redirect::to('info-driver');
        
        //echo '<pre>';
        //print_r($ref_get_id);
        //exit();
    }
    //--------------End update information-------------------------
    
    
}
