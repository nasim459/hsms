<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class ServiceBillController extends Controller
{
    //
    public function bill_service_make()
    {
        
        $salary_view = DB::table('tbl_emp_salary')
                ->join('tbl_emp', 'tbl_emp_salary.emp_id', '=', 'tbl_emp.emp_id')
                ->select('tbl_emp_salary.*', 'tbl_emp.*')
                ->orderBy('emp_salary_id', 'desc')
                ->get();
        
        
        
        
        
        
        $rental_show = DB::table('tbl_rental')
                ->join('tbl_flat_info', 'tbl_rental.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                //->join('tbl_service_assigned', 'tbl_rental.rental_id', '=', 'tbl_service_assigned.rental_id')
                //->join('tbl_service', 'tbl_service_assigned.service_id', '=', 'tbl_service.service_id')
                //->join('tbl_service_person', 'tbl_service_assigned.service_person_id', '=', 'tbl_service_person.service_person_id')
                ->select('tbl_rental.*', 'tbl_flat_info.*')
                ->orderBy('bld_name', 'asc')
                ->orderBy('bld_floor', 'asc')
                ->orderBy('bld_unit', 'asc')
                ->get();
        
        $rental_total = count($rental_show);
        Session::put('rental_total', $rental_total);
//        echo '<pre>';
//        print_r($rental_show);
//        exit();        
        
        
        
        
        $payment_paid = DB::table('tbl_emp_payment')
                ->join('tbl_emp', 'tbl_emp_payment.emp_id', '=', 'tbl_emp.emp_id')
                ->select('tbl_emp_payment.*', 'tbl_emp.emp_id_no')
                ->orderBy('emp_payment_id', 'desc')
                ->get();
        
        $add_salary_statement = DB::table('tbl_emp')
                //->join('tbl_emp', 'tbl_emp_salary.emp_id', '=', 'tbl_emp.emp_id')
                //->where('tbl_emp.salary_status', '1')
                ->select('tbl_emp.*')
                ->orderBy('emp_id', 'desc')
                ->get();
//        echo '<pre>';
//        print_r($salary_view);
//        exit();
        
        $salary = view('ap.pages.settings.make_service_bill')
                ->with('salary_view', $salary_view)
                ->with('rental_show', $rental_show)
                ->with('payment_paid', $payment_paid)
                ->with('add_salary_statement', $add_salary_statement);
        $master = view('ap.pages.settings.settings_master')
                ->with('settings_content', $salary);
        return view('master_ap')
                ->with('maincontent', $master);
    }
}
