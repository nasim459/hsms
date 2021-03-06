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
    public function rental_info()
    {
        $owner = view('ap.pages.people.info_rental');
                //->with('rental_show', $rental_show);
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $owner);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function show_rental_info()
    {
        $show_rental = DB::table('tbl_rental')
                ->join('tbl_flat_info', 'tbl_rental.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->select('tbl_rental.*', 'tbl_flat_info.*')
                ->get();
        return $show_rental;
    }
    
    //--------------show rental_picture
    public function pic_rental_info($rental_id)
    {
        
        $rental_pic = DB::table('tbl_rental')
                        ->where('rental_id', $rental_id)
                        ->get();
        return $rental_pic;
    }
    
    //----Details informtation of details_rental_info
    public function details_rental_info($rental_details_id)
    {
        
        $previous_url = url()->previous();
        Session::put('details_rental_p_u', $previous_url); //---details_rental_previous_url means regisrtation_driver_previous_url

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
        
        //-------bld_show for edit_building_location
        $bld_show = DB::table('tbl_rental')
                ->join('tbl_flat_info', 'tbl_rental.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->where('tbl_rental.flat_info_id', $flat_info_id)
                ->select('tbl_rental.rental_id', 'tbl_flat_info.*')
                ->get();
        
        //-------bld_check for edit_building_location
        $bld_check = DB::table('tbl_flat_info')
                ->where('tbl_flat_info.bld_status', '0')
                ->orderBy('bld_name', 'asc')
                ->orderBy('bld_floor', 'asc')
                ->get();
        
        $service_show = DB::table('tbl_service')
                ->select('tbl_service.*')
                ->get();
        
        $service_assigned_show = DB::table('tbl_service_assigned')
                    ->join('tbl_service_person', 'tbl_service_assigned.service_person_id', '=', 'tbl_service_person.service_person_id')
                    ->join('tbl_service', 'tbl_service_assigned.service_id', '=', 'tbl_service.service_person_id')
                    ->where('tbl_service_assigned.rental_id', $rental_id)
                    ->get();
        
        $invoice_show = DB::table('tbl_invoice')
                ->where('rental_id', $rental_id)
                ->where('invoice_status', 1)
                ->where('invoice_status', 1)
                //->orderBy('invoice_month', 'asc')
                ->orderBy('invoice_year', 'asc')
                ->orderBy('invoice_id', 'desc')
                ->get();
        
        $payment_show = DB::table('tbl_invoice_payment')
                ->where('rental_id', $rental_id)
                ->orderBy('invoice_payment_id', 'desc')
                ->orderBy('pay_year', 'asc')
                ->get();
        
        //-----------Sum tbl_invoice_payment of rental
        $rental_payable_amount = DB::table('tbl_invoice_payment')
                ->where('rental_id', $rental_id)
                ->sum('payable_amount');
        $rental_pay_amount = DB::table('tbl_invoice_payment')
                ->where('rental_id', $rental_id)
                ->sum('pay_amount');
        Session::put('rental_payable_amount', $rental_payable_amount);
        Session::put('rental_pay_amount', $rental_pay_amount);
        
        $p_s_l = count($payment_show);  //----$p_s_l means payment_show_length
        Session::put('p_s_l', $p_s_l);

//            echo '<pre>';
//            print_r($p_s_l);
//            exit();
        
        $owner = view('ap.pages.people.info_rantal_details')
                ->with('rental_details', $rental_details)
                ->with('service_show', $service_show)
                ->with('service_assigned_show', $service_assigned_show)
                ->with('invoice_show', $invoice_show)
                ->with('payment_show', $payment_show)
                ->with('bld_show', $bld_show)
                ->with('bld_check', $bld_check);
        //$master = view('ap.pages.people.people_master')
        //        ->with('people_content', $owner);
        return view('master_ap')
                ->with('maincontent', $owner);
    }
    
    //----Rental rental_satus
    public function status_rental_info($rental_id)
    {
        //------change_rental_status
        DB::table('tbl_rental')
                ->where('rental_id', $rental_id)
                ->update(['person_status' => 0]);
        
        //-------change bld_status of tbl_flat_info
        $bld_status = DB::table('tbl_rental')
                ->join('tbl_flat_info', 'tbl_rental.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->where('rental_id', $rental_id)
                ->update(['bld_status' => 0]);
        
        return $bld_status;
    }
    
    //----Rental rental_warning
    public function warning_rental_info($rental_id)
    {
        $rental_details_id = DB::table('tbl_rental')
                ->where('rental_id', $rental_id)
                ->select('rental_details_id')
                ->get();
        return $rental_details_id;
    }
    
    //----Rental rental_invoice
    public function invoice_rental_info($invoice_id)
    {
        $invoice_item = DB::table('tbl_invoice')
                ->join('tbl_invoice_item', 'tbl_invoice.invoice_id', '=', 'tbl_invoice_item.invoice_id')
                ->where('tbl_invoice_item.invoice_id', $invoice_id)
                ->select('tbl_invoice_item.*', 'tbl_invoice.invoice_amount_total')
                ->get();
        return $invoice_item;
    }
    
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
    
    public function show_emp_info()
    {
        $emp_show = DB::table('tbl_emp')
                ->select('tbl_emp.*')
                ->get();
        return $emp_show;
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
        
//        $service_assigned_show = DB::table('tbl_service_assigned')
//                ->join('tbl_service', 'tbl_service_assigned.service_id', '=', 'tbl_service.service_person_id')
//                //->join('tbl_service_person', 'tbl_service_assigned.service_person_id', '=', 'tbl_service_person.service_person_id')
//                ->join('tbl_rental', 'tbl_service_assigned.rental_id', '=', 'tbl_service.rental_id')
//                ->where('tbl_service_assigned.rental_id', $rental_id)
//                ->get();
        $service_assigned_show = DB::table('tbl_service_assigned')
                ->join('tbl_rental', 'tbl_service_assigned.rental_id', '=', 'tbl_rental.rental_id')
                //->join('tbl_service_person', 'tbl_service_assigned.service_person_id', '=', 'tbl_service_person.service_person_id')
                // ->join('tbl_service', 'tbl_service_assigned.service_id', '=', 'tbl_service.service_id')
                ->where('tbl_service_assigned.rental_id', $rental_id)
                ->get();
        
//            echo '<pre>';
//            print_r($service_assigned_show);
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
    
    public function driver_info()
    {
//        $driver_show= DB::table('tbl_driver')
//                ->select('tbl_driver.*')
//                ->get();
        
        $driver = view('ap.pages.people.info_driver');
                //->with('driver_show',$driver_show);
        
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $driver);
        return view('master_ap')
                ->with('maincontent', $master);
      
    }
    
    public function show_driver_info()
    {
        $show_driver = DB::table('tbl_driver')
                //->join('tbl_flat_info', 'tbl_rental.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->select('tbl_driver.*')
                ->get();
        return $show_driver;
    }
    
    public function show_pic_driver_info($driver_id)
    {
        $driver_pic= DB::table('tbl_driver')
                ->where('driver_id', $driver_id)
                //->select('tbl_driver.*')
                ->get();
        return $driver_pic;
      
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
    
    public function visiting_info()
    {
        $emp_show = DB::table('tbl_emp')
                ->get();
        
        $flat_info_show = DB::table('tbl_flat_info')
                ->where('bld_status', 1)
                ->orderBy('bld_name', 'asc')
                ->orderBy('bld_floor', 'asc')
                ->orderBy('bld_unit', 'asc')
                ->get();
        
        $owner = view('ap.pages.people.info_visiting')
                ->with('emp_show', $emp_show)
                ->with('flat_info_show', $flat_info_show);
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $owner);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    //------show_visiting_people
    public function show_visitor_info()
    {
        $visitor_show = DB::table('tbl_guest')
                ->join('tbl_flat_info', 'tbl_guest.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->select('tbl_guest.*', 'tbl_flat_info.*')
                ->get();
        return $visitor_show;
    }
    
    //------add_visitor_info
    public function add_visitor_info(Request $request)
    {
        
        $emp_id = $request->id;
        
        if($emp_id == '') {
            return Redirect::to('regi-info');
        } else {
            $visitor = array();
            $visitor['emp_id'] = $emp_id;
            DB::table('tbl_visitor')->insert($visitor);
            return Redirect::to('regi-info');
        }
    }
    
    //------show_guest_people
    public function show_guest_info()
    {
        $guest_show = DB::table('tbl_visitor')
                ->join('tbl_emp', 'tbl_visitor.emp_id', '=', 'tbl_emp.emp_id')
                ->get();
        return $guest_show;
    }
    
    //------show_guest_details_people
    public function details_show_guest_info($flat_info_id)
    {
        
        $guest_show_details = DB::table('tbl_flat_info')
                ->join('tbl_guest', 'tbl_flat_info.flat_info_id', '=', 'tbl_guest.flat_info_id')
                ->join('tbl_rental', 'tbl_flat_info.flat_info_id', '=', 'tbl_rental.flat_info_id')
                ->where('tbl_flat_info.flat_info_id', $flat_info_id)
                ->get();
        return $guest_show_details;
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
