<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class ServiceBillController extends Controller {

    //
    //-----bill_service_make
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
//        echo '<pre>';
//        print_r($rental_show);
//        exit();

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
                ->where('invoice_status', 2)        //-- 2 means invoice_un_submit
                ->select('tbl_invoice.*', 'tbl_flat_info.*', 'tbl_rental.*')
                ->orderBy('invoice_id', 'desc')
                ->get();
        
        $payment_paid = DB::table('tbl_invoice_payment')
                ->join('tbl_invoice', 'tbl_invoice_payment.invoice_id', '=', 'tbl_invoice.invoice_id')
                ->join('tbl_rental', 'tbl_invoice_payment.rental_id', '=', 'tbl_rental.rental_id')
                ->join('tbl_flat_info', 'tbl_invoice_payment.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->select('tbl_invoice_payment.*', 'tbl_rental.*', 'tbl_flat_info.*')
                ->orderBy('bld_name', 'asc')
                ->orderBy('bld_floor', 'asc')
                ->orderBy('bld_unit', 'asc')
                ->get();
        $p_p_l = count($payment_paid);
        Session::put('payment_paid', $p_p_l);

        //------Rental_Bill_Statement_Show
        $assign_statement = DB::table('tbl_rental')
                ->join('tbl_flat_info', 'tbl_rental.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->where('person_status', 1)
                //->where('rental_bill_status', 11)  //---11 means show_all_data ---- to check value_give 33
                ->select('tbl_rental.*', 'tbl_flat_info.*')
                ->orderBy('bld_name', 'asc')
                ->orderBy('bld_floor', 'asc')
                ->orderBy('bld_unit', 'asc')
                ->get();
        $l = count($assign_statement);
        Session::put('assign_statement', $l);
        
        $salary = view('ap.pages.settings.make_service_bill')
                ->with('salary_view', $salary_view)
                ->with('rental_show', $rental_show)
                ->with('invoice_bill', $invoice_bill)
                ->with('payment_paid', $payment_paid)
                ->with('assign_statement', $assign_statement);
        $master = view('ap.pages.settings.settings_master')
                ->with('settings_content', $salary);
        return view('master_ap')
                        ->with('maincontent', $master);
    }

    //-----rental_service_bill_statement
    public function statement_bill_service(Request $request) {
        
        $a = $request->a;
        $b = $request->b;
        
        if($a != Null && $b != Null){
            
            $bill = array();
            $bill['rental_bill_status'] = 11;
            $bill['month_define'] = $a;
            $bill['year_define'] = $b;
            DB::table('tbl_rental')
                ->where('person_status', 1)
                ->update($bill);
            return Redirect::to('make-service-bill');
        } else {
            
            Session::put('mistake', 'You have to select Month & Year ?');
            return Redirect::to('make-service-bill');
        }
        
    }
    
    //-----generate_rental_service_bill
    public function generate_bill_service(Request $request) {
        
        //$re = $request->all();
        $rental_id = $request->rntl_id;
        $service_assigned_id = $request->s_a_id;
        $amount = $request->amount;
        
        //----when $rental_id will not found then use_this_function 
        if($rental_id == NULL){
            return Redirect::to('make-service-bill');
        }
        $length = count($service_assigned_id);
        
        for($i=0; $i<$length; $i++){
            DB::table('tbl_service_assigned')
                ->where('service_assigned_id', $service_assigned_id[$i])
                ->where('rental_id', $rental_id)
                ->update(['amount' => $amount[$i]]);
        }
        
        //------rental_service_taken
        $service_taken = DB::table('tbl_service_assigned')
                ->join('tbl_rental', 'tbl_service_assigned.rental_id', '=', 'tbl_rental.rental_id')
                ->join('tbl_service', 'tbl_service_assigned.service_id', '=', 'tbl_service.service_id')
                ->where('tbl_service_assigned.rental_id', $rental_id)
                ->where('tbl_service_assigned.status', 1)
                ->select('tbl_service_assigned.amount', 'tbl_service.service_type')
                ->get();
        $s_t_l = count($service_taken);         //---$s_t_l means service_taken_length
//        echo '<pre>';
//        print_r($service_taken);
//        exit();
        
        //------total_service_assigned_amount
        $total_service_amount = DB::table('tbl_service_assigned')
                ->where('rental_id', $rental_id)
                ->where('status', 1)
                ->sum('amount');
        echo $total_service_amount;
        
        //------total_previous_due
        $previous_due = DB::table('tbl_invoice_payment')
                ->where('rental_id', $rental_id)
                ->where('pay_status', 2)
                ->sum('due_amount');
        
        $grand_total = $total_service_amount + $previous_due;
        
        //------rental_information_start
        $rental_info = DB::table('tbl_rental')
                ->join('tbl_flat_info', 'tbl_rental.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->where('tbl_rental.rental_id', $rental_id)
                ->select('tbl_rental.*', 'tbl_flat_info.*')
                ->get();
        $rental_name = $rental_info[0]->rental_name;
        $rental_id_no = $rental_info[0]->rental_id_no;
        $rental_phone_1 = $rental_info[0]->rental_phone_1;
        $flat_info_id = $rental_info[0]->flat_info_id;
        $bld_name = $rental_info[0]->bld_name;
        $bld_floor = $rental_info[0]->bld_floor;
        $bld_unit = $rental_info[0]->bld_unit;
        $month_define = $rental_info[0]->month_define;
        $year_define = $rental_info[0]->year_define;
        
//        echo '<pre>';
//        print_r($previous_due);
//        echo '<pre>';
//        print_r($rental_info);
//        exit();
        
        //----insert data into tbl_invoice with tbl_invoice_item at_a_time----start
        $invoice = array();
        $invoice['invoice_month'] = $month_define;
        $invoice['invoice_year'] = $year_define;
        $invoice['invoice_amount_total'] = $total_service_amount;
        $invoice['invoice_previous_due'] = $previous_due;
        $invoice['invoice_grand_total'] = $grand_total;
        $invoice['rental_id'] = $rental_id;
        $invoice['flat_info_id'] = $flat_info_id;
        $invlice_get_id = DB::table('tbl_invoice')->insertGetId($invoice);
        
        for($n=0; $n<$s_t_l; $n++){
            $invoice_item = array();
            $invoice_item['invoice_item_name'] = $service_taken[$n]->service_type;
            $invoice_item['invoice_item_amount'] = $service_taken[$n]->amount;
            $invoice_item['invoice_id'] = $invlice_get_id;
            DB::table('tbl_invoice_item')->insert($invoice_item);
        }
        //----insert data into tbl_invoice with tbl_invoice_item at_a_time----end
        
        
        
        //$rental_id = $request->rntl_id;
        //$rental_id = 1;
        
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
                ->select('tbl_service.*', 'tbl_service_assigned.*', 'tbl_service_assigned.rental_id')
                ->orderBy('service_type', 'asc')
                ->get();
      return $bill_show;
    }
    
    //-----rental_service_bill_invoice_view
    public function service_bill_invoice_view($rental_id) {
        
      $bill_show = DB::table('tbl_invoice')
                ->join('tbl_invoice_item', 'tbl_invoice.invoice_id', '=', 'tbl_invoice_item.invoice_id')
                ->join('tbl_rental', 'tbl_invoice.rental_id', '=', 'tbl_rental.rental_id')
                ->where('tbl_invoice.rental_id', $rental_id)
                ->where('invoice_status', 2)
                ->select('tbl_invoice.*', 'tbl_invoice_item.*', 'tbl_rental.*')
                //->orderBy('service_type', 'asc')
                ->get();
//        echo '<pre>';
//        print_r($rental_show);
//        exit();
      return $bill_show;
    }
    
    //-----rental_service_bill_invoice_view
    public function service_bill_invoice_due($rental_id) {
        
      $bill_due = DB::table('tbl_invoice_payment')
                ->join('tbl_invoice', 'tbl_invoice_payment.invoice_id', '=', 'tbl_invoice.invoice_id')
                ->join('tbl_rental', 'tbl_invoice_payment.rental_id', '=', 'tbl_rental.rental_id')
                ->join('tbl_flat_info', 'tbl_invoice_payment.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->where('tbl_invoice_payment.rental_id', $rental_id)
                ->where('tbl_invoice_payment.pay_status', 2)
                ->select('tbl_invoice_payment.*', 'tbl_rental.*', 'tbl_flat_info.*')
                ->get();
      return $bill_due;
    }
    
    //-----rental_service_bill_payment
    public function payment_bill_service(Request $request) {
        
        //$all = $request->all();
        $invoice_id = $request->a;
        $rental_id = $request->b;
        $flat_info_id = $request->c;
        $pay_month = $request->d;
        $pay_year = $request->e;
        $payable_amount = $request->f;
        $pay_amount = $request->g;
        $due_amount = $payable_amount - $pay_amount;
        
        //----------change pay_status  
        if($due_amount == 0){
            $pay_status = 1;
        } else {
            $pay_status = 2;
        }
        
        //----------tbl_rental(month_define & year_define will be 0)
        $define = array();
        $define['month_define'] = 0;
        $define['year_define'] = 0;
        DB::table('tbl_rental')
                ->where('rental_id', $rental_id)
                ->update($define);
        
        //----------tbl_invoice_payment(previous_due_clear with change pay_status)
        DB::table('tbl_invoice_payment')
                ->where('rental_id', $rental_id)
                ->update(['pay_status' => 1]);
        
        //----------tbl_invoice(change invoice_status that means invoice_submit)
        DB::table('tbl_invoice')
                ->where('rental_id', $rental_id)
                ->update(['invoice_status' => 1]);  
        
        //----------insert data into tbl_invoice_payment
        $payment = array();
        $payment['pay_month'] = $pay_month;
        $payment['pay_year'] = $pay_year;
        $payment['payable_amount'] = $payable_amount;
        $payment['pay_amount'] = $pay_amount;
        $payment['due_amount'] = $due_amount;
        $payment['pay_status'] = $pay_status;
        $payment['invoice_id'] = $invoice_id;
        $payment['rental_id'] = $rental_id;
        $payment['flat_info_id'] = $flat_info_id;
        DB::table('tbl_invoice_payment')->insert($payment);

        return Redirect::to('make-service-bill');
    }
    
    //-----rental_service_bill_payment
    public function due_payment_bill_service(Request $request) {
        
        //$all = $request->all();
        $invoice_id = $request->a;
        $rental_id = $request->b;
        $flat_info_id = $request->c;
        $pay_month = $request->d;
        $pay_year = $request->e;
        
        $payable_amount = $request->f;
        $pay_amount = $request->g;
        $due_amount = $payable_amount - $pay_amount;
        
        //----------change pay_status  
        if($due_amount == 0){
            $pay_status = 1;
        } else {
            $pay_status = 2;
        }
        
        //----------tbl_rental(month_define & year_define will be 0)
//        $define = array();
//        $define['month_define'] = 0;
//        $define['year_define'] = 0;
//        DB::table('tbl_rental')
//                ->where('rental_id', $rental_id)
//                ->update($define);
        
        //----------tbl_invoice_payment(previous_due_clear with change pay_status)
        DB::table('tbl_invoice_payment')
                ->where('rental_id', $rental_id)
                ->update(['pay_status' => 1]);
        
        //----------tbl_invoice(change invoice_status that means invoice_submit)
        DB::table('tbl_invoice')
                ->where('rental_id', $rental_id)
                ->update(['invoice_status' => 1]);  
        
        //----------insert data into tbl_invoice_payment
        $payment = array();
        $payment['pay_month'] = $pay_month;
        $payment['pay_year'] = $pay_year;
        $payment['payable_amount'] = $payable_amount;
        $payment['pay_amount'] = $pay_amount;
        $payment['due_amount'] = $due_amount;
        $payment['pay_status'] = $pay_status;
        $payment['invoice_id'] = $invoice_id;
        $payment['rental_id'] = $rental_id;
        $payment['flat_info_id'] = $flat_info_id;
        DB::table('tbl_invoice_payment')->insert($payment);

        return Redirect::to('make-service-bill');
    }
   
    //-----view_rental_service
    public function service_rental_view($rental_id){
        
        $service_view = DB::table('tbl_service')
                ->where('service_status', 1)
                ->get();
        
        return $service_view;
    }
   
    //-----running_rental_service
    public function service_rental_running($rental_id){
        
        $service_view = DB::table('tbl_service_assigned')
                ->join('tbl_service', 'tbl_service_assigned.service_id', '=', 'tbl_service.service_id')
                ->where('rental_id', $rental_id)
                ->get();
        
        return $service_view;
    }
    
    //-----add_rental_service
    public function service_rental_add(Request $request){
        
        //$all = $request->all();
        $rental_id = $request->a;
        $service_id = $request->b;
        $l = count($service_id);
        
        //echo $service_id;
        
        
        if(!isset($service_id)){
            
            Session::put('not_taken', 'Service Not Taken?');
            return Redirect::to('make-service-bill');
            
        }  else {
           //----find_out flat_info_id by use renta_id 
           $rentl_info = DB::table('tbl_rental')
                   ->where('rental_id', $rental_id)
                   ->select('tbl_rental.flat_info_id')
                   ->get();   
           $flat_info_id = $rentl_info[0]->flat_info_id;

           for($i=0; $i<$l; $i++) {

               $s_id = $service_id[$i];
               //----find_out service_person_id by use service_id 
               $rentl_info = DB::table('tbl_service')
                   ->where('service_id', $s_id)
                   ->select('tbl_service.service_person_id')
                   ->get();
               $service_person_id = $rentl_info[0]->service_person_id;
               //echo 's_id'.$s_id. '=' .$service_person_id.'</br>';

               //----insert data into tbl_service_assigned
               $add_service = array();
               $add_service['service_id'] = $s_id;
               $add_service['service_person_id'] = $service_person_id;
               $add_service['rental_id'] = $rental_id;
               $add_service['flat_info_id'] = $flat_info_id;
               DB::table('tbl_service_assigned')->insert($add_service);
               
           }
        //--------chage_status rental_bill_status of tbl_rentals
        DB::table('tbl_rental')
                ->where('rental_id', $rental_id)
                ->update(['rental_bill_status' => 11]);
        return Redirect::to('make-service-bill');
        }
        
    }
    

//        echo '<pre>';
//        print_r($all);
//        exit();
    
}
