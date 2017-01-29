<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class ServiceBillController extends Controller {

    //
    public function bill_service_make() {

        $salary_view = DB::table('tbl_emp_salary')
                ->join('tbl_emp', 'tbl_emp_salary.emp_id', '=', 'tbl_emp.emp_id')
                ->select('tbl_emp_salary.*', 'tbl_emp.*')
                ->orderBy('emp_salary_id', 'desc')
                ->get();

        //------Rental_Bill_Statement_Show
        $rental_show = DB::table('tbl_rental')
                ->join('tbl_flat_info', 'tbl_rental.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->where('person_status', 1)
                ->where('rental_bill_status', 11)  //---11 means show_all_data ---- to check value_give 33
                ->select('tbl_rental.*', 'tbl_flat_info.*')
                ->orderBy('bld_name', 'asc')
                ->orderBy('bld_floor', 'asc')
                ->orderBy('bld_unit', 'asc')
                ->get();

        //--------Check_Null_Value----for create new bill satement of month----
        if (!isset($rental_show[0])) {
            Session::put('rental_blank', 'rntl_blnk');
        }else{
            Session::put('rental_blank', '');
        }
        
        $rental_total = count($rental_show);
        Session::put('rental_total', $rental_total);
        
        //------Rental_Invoice_Bill_Show
        $invoice_bill = DB::table('tbl_invoice')
                ->join('tbl_flat_info', 'tbl_invoice.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->join('tbl_rental', 'tbl_invoice.rental_id', '=', 'tbl_rental.rental_id')
                ->where('invoice_status', 2)        //-- 2 means unPaid invoice
                ->select('tbl_invoice.*', 'tbl_flat_info.*', 'tbl_rental.*')
                ->orderBy('bld_name', 'asc')
                ->orderBy('bld_floor', 'asc')
                ->orderBy('bld_unit', 'asc')
                ->get();
        
        $payment_paid = DB::table('tbl_emp_payment')
                ->join('tbl_emp', 'tbl_emp_payment.emp_id', '=', 'tbl_emp.emp_id')
                ->select('tbl_emp_payment.*', 'tbl_emp.emp_id_no')
                ->orderBy('emp_payment_id', 'desc')
                ->get();

        $add_salary_statement = DB::table('tbl_emp')
                ->select('tbl_emp.*')
                ->orderBy('emp_id', 'desc')
                ->get();
        
        $salary = view('ap.pages.settings.make_service_bill')
                ->with('salary_view', $salary_view)
                ->with('rental_show', $rental_show)
                ->with('invoice_bill', $invoice_bill)
                ->with('payment_paid', $payment_paid)
                ->with('add_salary_statement', $add_salary_statement);
        $master = view('ap.pages.settings.settings_master')
                ->with('settings_content', $salary);
        return view('master_ap')
                        ->with('maincontent', $master);
    }

    //-----rental_service_bill_statement
    public function statement_bill_service(Request $request) {
        
        DB::table('tbl_rental')
                ->where('person_status', 1)
                ->update(['rental_bill_status' => 11]);

        return Redirect::to('make-service-bill');
    }
    
    //-----generate_rental_service_bill
    public function generate_bill_service(Request $request) {
        
        //$rental_id = $request->rntl_id;
        $rental_id = 1;
        
        DB::table('tbl_rental')
                ->where('rental_id', $rental_id)
                ->update(['rental_bill_status' => 22]);

        return Redirect::to('make-service-bill');
    }
    
    //-----rental_service_bill_show
    public function service_bill_show($rental_id) {
        
      $bill_show = DB::table('tbl_service_assigned')
                ->join('tbl_service', 'tbl_service.service_id', '=', 'tbl_service_assigned.service_id')
                ->where('tbl_service_assigned.status', 1)
                ->where('tbl_service.service_status', 1)
                ->where('tbl_service_assigned.rental_id', $rental_id)
                ->select('tbl_service.service_type','tbl_service_assigned.amount')
                ->orderBy('service_type', 'asc')
                ->get();
      return $bill_show;
    }
   
    

//        echo '<pre>';
//        print_r($rental_show);
//        exit();
    
}
