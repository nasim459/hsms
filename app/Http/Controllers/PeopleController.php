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
        $url_current = url()->current();
        Session::put('url_current', $url_current);

        $rental_details = DB::table('tbl_rental_details')
                ->join('tbl_rental', 'tbl_rental_details.rental_details_id', '=', 'tbl_rental.rental_details_id')
                ->join('tbl_flat_info', 'tbl_rental.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->join('tbl_rental_family', 'tbl_rental.rental_family_id', '=', 'tbl_rental_family.rental_family_id')
                ->join('tbl_rental_reference', 'tbl_rental.rental_reference_id', '=', 'tbl_rental_reference.rental_reference_id')
                ->select('tbl_rental_details.*', 'tbl_rental.*', 'tbl_flat_info.*', 'tbl_rental_family.*', 'tbl_rental_reference.*')
                ->where('tbl_rental_details.rental_details_id', '=', $rental_details_id)
                ->orderBy('rental_id', 'asc')
                ->get();
            
        $rental_id = $rental_details[0]->rental_id;
        $flat_info_id = $rental_details[0]->flat_info_id;
        Session::put('rental_id', $rental_id);
        Session::put('flat_info_id', $flat_info_id);
        
        $service_show = DB::table('tbl_service')
                ->select('tbl_service.*')
                ->get();
        
        $service_assigned_show = DB::table('tbl_service_assigned')
                    ->join('tbl_service_person', 'tbl_service_assigned.service_person_id', '=', 'tbl_service_person.service_person_id')
                    ->join('tbl_service', 'tbl_service_assigned.service_id', '=', 'tbl_service.service_person_id')
                    ->where('tbl_service_assigned.rental_id', $rental_id)
                    ->get();
        
//            echo '<pre>';
//            print_r($rental_details);
//            echo '<pre>';
//            print_r($service_show);
//            exit();
        
        
        $owner = view('ap.pages.people.info_owner_details')
                ->with('rental_details', $rental_details)
                ->with('service_show', $service_show)
                ->with('service_assigned_show', $service_assigned_show);
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
        $rental_show = DB::table('tbl_rental')
                ->join('tbl_flat_info', 'tbl_rental.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->select('tbl_rental.*', 'tbl_flat_info.*')
                ->get();
        
        $owner = view('ap.pages.people.info_rental')
                ->with('rental_show', $rental_show);
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $owner);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    //--------------show rental_picture
    public function pic_rental_info($rental_id) {
        
        $rental_pic = DB::table('tbl_rental')
                        ->where('rental_id', $rental_id)
                        ->get();
        return $rental_pic;
    }
    
    //----Details informtation of details_rental_info
    public function details_rental_info($rental_details_id)
    {
        $url_current = url()->current();
        Session::put('url_current', $url_current);

        $rental_details = DB::table('tbl_rental_details')
                ->join('tbl_rental', 'tbl_rental_details.rental_details_id', '=', 'tbl_rental.rental_details_id')
                ->join('tbl_flat_info', 'tbl_rental.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->join('tbl_rental_family', 'tbl_rental.rental_family_id', '=', 'tbl_rental_family.rental_family_id')
                ->join('tbl_rental_reference', 'tbl_rental.rental_reference_id', '=', 'tbl_rental_reference.rental_reference_id')
                ->select('tbl_rental_details.*', 'tbl_rental.*', 'tbl_flat_info.*', 'tbl_rental_family.*', 'tbl_rental_reference.*')
                ->where('tbl_rental_details.rental_details_id', '=', $rental_details_id)
                ->orderBy('rental_id', 'asc')
                ->get();
//        echo '<pre>';
//        print_r($rental_details);
//        exit();
        $rental_id = $rental_details[0]->rental_id;
        $flat_info_id = $rental_details[0]->flat_info_id;
        Session::put('rental_id', $rental_id);
        Session::put('flat_info_id', $flat_info_id);
        
        $service_show = DB::table('tbl_service')
                ->select('tbl_service.*')
                ->get();
        
        $service_assigned_show = DB::table('tbl_service_assigned')
                    ->join('tbl_service_person', 'tbl_service_assigned.service_person_id', '=', 'tbl_service_person.service_person_id')
                    ->join('tbl_service', 'tbl_service_assigned.service_id', '=', 'tbl_service.service_person_id')
                    ->where('tbl_service_assigned.rental_id', $rental_id)
                    ->get();
        
//            echo '<pre>';
//            print_r($rental_details);
//            echo '<pre>';
//            print_r($service_show);
//            exit();
        
        $owner = view('ap.pages.people.info_rantal_details')
                ->with('rental_details', $rental_details)
                ->with('service_show', $service_show)
                ->with('service_assigned_show', $service_assigned_show);
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $owner);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    //----Rental rental_satus
    public function status_rental_info($rental_id, $status)
    {
            DB::table('tbl_rental')
                    ->where('rental_id', $rental_id)
                    ->update(['person_status' => $status]);
            $data['status'][$rental_id] = $status;
            return $data;
    }
    
    public function driver_info()
    {
        $driver_show= DB::table('tbl_driver')
                ->select('tbl_driver.*')
                ->get();
        
        $driver = view('ap.pages.people.info_driver')
                ->with('driver_show',$driver_show);
        
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $driver);
        return view('master_ap')
                ->with('maincontent', $master);
      
    }
    
    public function details_driver_info($driver_details_id) {

        $driver_details = DB::table('tbl_driver')
        ->join('tbl_driver_details', 'tbl_driver.driver_details_id', '=', 'tbl_driver_details.driver_details_id')
        ->where('tbl_driver.driver_details_id', '=', $driver_details_id)
        ->orderBy('driver_id', 'asc')
        ->get();

//        echo '<pre>';
//        print_r($driver_details);
//        exit();
        
         $driver = view('ap.pages.people.info_driver_details')
                ->with('driver_details', $driver_details);
                
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $driver);
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
