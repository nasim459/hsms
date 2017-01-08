<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class PeopleController extends Controller
{
    //
    public function owner_info()
    {
        $rental_show = DB::table('tbl_rental')
                ->join('tbl_flat_info', 'tbl_rental.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->select('tbl_rental.*', 'tbl_flat_info.*')
                ->get();
        
        $owner = view('ap.pages.people.info_owner')
                ->with('rental_show', $rental_show);
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $owner);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function emp_info()
    {
        $emp_show = DB::table('tbl_emp')
                ->select('tbl_emp.*')
                ->get();
        
        $emp = view('ap.pages.people.info_emp')
                ->with('emp_show', $emp_show);
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $emp);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function details_owner_info($rental_details_id)
    {
        $rental_details = DB::table('tbl_rental_details')
                ->join('tbl_rental', 'tbl_rental_details.rental_details_id', '=', 'tbl_rental.rental_details_id')
                ->join('tbl_flat_info', 'tbl_rental.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->join('tbl_rental_family', 'tbl_rental.rental_family_id', '=', 'tbl_rental_family.rental_family_id')
                ->join('tbl_rental_reference', 'tbl_rental.rental_reference_id', '=', 'tbl_rental_reference.rental_reference_id')
                ->select('tbl_rental_details.*', 'tbl_rental.*', 'tbl_flat_info.*', 'tbl_rental_family.*', 'tbl_rental_reference.*')
                ->where('tbl_rental_details.rental_details_id', '=', $rental_details_id)
                ->orderBy('rental_id', 'asc')
                ->get();
        
        $owner = view('ap.pages.people.info_owner_details')
                ->with('rental_details', $rental_details);
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $owner);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function details_emp_info($emp_details_id)
    {
        $emp_details = DB::table('tbl_emp')
                ->join('tbl_emp_details', 'tbl_emp.emp_details_id', '=', 'tbl_emp_details.emp_details_id')
                ->where('tbl_emp.emp_details_id', '=', $emp_details_id)
                ->orderBy('emp_id', 'asc')
                ->get();
        
        $emp_id = $emp_details[0]->emp_id;
        
        $emp_salary = DB::table('tbl_emp_salary')
                ->join('tbl_emp', 'tbl_emp_salary.emp_id', '=', 'tbl_emp.emp_id')
                ->where('tbl_emp_salary.emp_id', '=', $emp_id)
                ->get();
        
        //----chekc $emp_salary Array
        if(isset($emp_salary[0])){
            Session::put('salary_add', 'Yes');
        }else{
            Session::put('salary_add', 'No');
        }
        Session::put('emp_id', $emp_id);
        
        
        
        $emp = view('ap.pages.people.info_emp_details')
                ->with('emp_details', $emp_details)
                ->with('emp_salary', $emp_salary);
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $emp);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function rental_info()
    {
        $owner = view('ap.pages.people.info_rental');
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $owner);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function driver_info()
    {
        $owner = view('ap.pages.people.info_driver');
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $owner);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function housekeeping_info()
    {
        $owner = view('ap.pages.people.info_housekeeping');
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $owner);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function visiting_info()
    {
        $owner = view('ap.pages.people.info_visiting');
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $owner);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function service_info()
    {
        $owner = view('ap.pages.people.info_service_people');
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $owner);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    
//    echo '<pre>';
//    print_r();
//    exit();
}
