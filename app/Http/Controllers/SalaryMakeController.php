<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class SalaryMakeController extends Controller
{
    //
    public function salary_make()
    {
        
        $salary_view = DB::table('tbl_emp_salary')
                ->join('tbl_emp', 'tbl_emp_salary.emp_id', '=', 'tbl_emp.emp_id')
                ->select('tbl_emp_salary.*', 'tbl_emp.*')
                ->orderBy('emp_salary_id', 'desc')
                ->get();
        
        $invoice_view = DB::table('tbl_emp_invoice')
                ->join('tbl_emp', 'tbl_emp_invoice.emp_id', '=', 'tbl_emp.emp_id')
                ->select('tbl_emp_invoice.*', 'tbl_emp.emp_id_no')
                ->orderBy('emp_invoice_id', 'desc')
                ->get();
        
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
        
        $salary = view('ap.pages.settings.make_salary')
                ->with('salary_view', $salary_view)
                ->with('invoice_view', $invoice_view)
                ->with('payment_paid', $payment_paid)
                ->with('add_salary_statement', $add_salary_statement);
        $master = view('ap.pages.settings.settings_master')
                ->with('settings_content', $salary);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function invoice_salary_make(Request $request)
    {
        $month = $request->month;
        $year = $request->year;
        $demo = $request->employee_sal_id;
        $total_amount = $request->total_amount;
        $emp_id = $request->emp_id;
        
        echo '<pre>';
        echo ' => emp_salary_id'.'<br>';
        print_r($demo);
        echo 'emp_salary_id => total_amount'.'<br>';
        print_r($total_amount);
        echo 'emp_salary_id => emp_id'.'<br>';
        print_r($emp_id);
        
        $invoice = array();
        foreach ($demo as $value){
            $invoice['pay_month'] = $month;
            $invoice['pay_year'] = $year;
            $invoice['emp_id'] = $emp_id[$value];
            $invoice['emp_salary_id'] = $value;
            $invoice['total_amount'] = $total_amount[$value];
            
            $check = DB::table('tbl_emp_invoice')
                    ->where('pay_month', $month)
                    ->Where('pay_year', $year)
                    ->where('emp_salary_id', $value)
                    ->get();
//            echo '<pre>';
//            print_r($check[]);
//            exit();
            if(!isset($check[0])){
                
                //echo '<pre>';
                //print_r($check);
                //exit();

                //echo 'Yes';
                DB::table('tbl_emp_invoice')->insert($invoice); 
                Session::flash('salary_created', 'Salary Craeted Successfully!');
                
               
            }else{
                //echo 'NO';
                Session::flash('salary_exit', 'Salary Already Exit!');
                return Redirect::to('make-salary');
                
            }
            
            
        }
        return Redirect::to('make-salary');
        
        //exit();
        
//        $create_invoice = DB::table('tbl_emp_salary')
//                ->where('tbl_emp_salary.emp_salary_id', '=', $emp_salary_id)
//                ->select('tbl_emp_salary.*')
//                ->get();
        
//        echo '<pre>';
//        print_r($create_invoice);
//        exit();
        
//        $total_amount = $create_invoice[0]->total_amount;
//        $emp_salary_id = $create_invoice[0]->emp_salary_id;
//        $emp_id = $create_invoice[0]->emp_id;
//        $pay_month = date('d/m/y');
//        $pay_year = date('d/m/y');
        //exit();
//        echo '<br>';
//        echo date('d/m/Y').'<br>';
//        echo date('m').'<br>';
//        echo date('y').'<br>';
//        echo $total_amount;
        
//        $invoice = array();
//        $invoice['emp_salary_id'] = $emp_salary_id;
//        $invoice['emp_id'] = $emp_id;
//        $invoice['total_amount'] = $total_amount;
//        $invoice['pay_month'] = $pay_month;
//        $invoice['pay_year'] = $pay_year;
//        DB::table('tbl_emp_invoice')->insert($invoice);
        
        //return Redirect::to('make-salary');
    }
    
    public function salary_give($emp_invoice_id)
    {
        $give_salary = DB::table('tbl_emp_invoice')
                ->where('tbl_emp_invoice.emp_invoice_id', '=', $emp_invoice_id)
                //->orderBy('rental_id', 'asc')
                ->get();
        
//        echo '<pre>';
//        print_r($give_salary);
//        exit();
        
        $salary = view('ap.pages.settings.salary_give')
                ->with('give_salary', $give_salary);
        $master = view('ap.pages.settings.settings_master')
                ->with('settings_content', $salary);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function due_salary(Request $request)
    {
        
        //------tbl_emp_details---------------------
        $emp_invoice_id = $request->emp_invoice_id;
        $emp_salary_id = $request->emp_salary_id;
        $emp_id = $request->emp_id;
        
        $month = $request->month;
        $year = $request->year;
        
        $total_amount = $request->total_amount;
        $give_amount = $request->give_salary;
        
        //----Start check_previous_due------
        $rough_check = DB::table('tbl_emp_payment')
                ->where('tbl_emp_payment.emp_id', $emp_id)
                ->select('tbl_emp_payment.due_amount')
                ->get();
        
        //echo '<pre>';
        //print_r($rough_check).'<br>';
        //print_r($rough_check[0]).'<br>';
        //print_r($rough_check[1]).'<br>';
        //print_r(length($rough_check));
        //print_r(count($rough_check));
        $length = count($rough_check);
        $pre_due=0;
        for($i=0; $i < $length; $i++){
            $pre_due = $pre_due +  $rough_check[$i]->due_amount;
        }
        $previous_due = $pre_due;
        
        
        //exit();
        
        //----End check_previous_due--------
        
        if($give_amount == NULL){
            //echo "NULL"."<br>";
            $give_amount = 0;
            echo $due_amount = $give_amount + $previous_due;
            //echo $give_amount."<br>";
            //exit();
            
            $salary = array();
            $salary['emp_invoice_id'] = $emp_invoice_id;
            $salary['emp_id'] = $emp_id;
            $salary['pay_month'] = $month;
            $salary['pay_year'] = $year;
            $salary['total_amount'] = $total_amount;
            $salary['give_amount'] = $give_amount;
            $salary['due_amount'] = $due_amount;
            DB::table('tbl_emp_payment')->insert($salary);
            
            DB::table('tbl_emp_invoice')
                ->where('tbl_emp_invoice.emp_invoice_id', $emp_invoice_id)
                ->update(['tbl_emp_invoice.invoice_status' => 1]);
            
        }else {
            //echo "$give_amount = ".$give_salary."<br>";
            echo $due_amount = ($total_amount - $give_amount) + $previous_due;
            //exit();
            $salary = array();
            $salary['emp_invoice_id'] = $emp_invoice_id;
            $salary['emp_id'] = $emp_id;
            $salary['pay_month'] = $month;
            $salary['pay_year'] = $year;
            $salary['total_amount'] = $total_amount;
            $salary['give_amount'] = $give_amount;
            $salary['due_amount'] = $due_amount;
            DB::table('tbl_emp_payment')->insert($salary);
            
            DB::table('tbl_emp_invoice')
                ->where('tbl_emp_invoice.emp_invoice_id', $emp_invoice_id)
                ->update(['tbl_emp_invoice.invoice_status' => 1]);
            
        }
        
        //echo "emp_invoice_id = ".$emp_invoice_id."<br>";
        //echo "emp_salary_id = ".$emp_salary_id."<br>";
        //echo "emp_id = ".$emp_id."<br>";
        //echo "total_amount = ".$total_amount."<br>";
        //echo $month;
        //echo $year;
        //echo "give_salary = ".$give_salary."<br>";
        
        //exit();
        
        return Redirect::to('make-salary');
    }
    
//    echo '<pre>';
//    print_r();
//    exit();
}
