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
                ->get();
        
        $invoice_view = DB::table('tbl_emp_invoice')
                ->select('tbl_emp_invoice.*')
                ->get();
        
//        echo '<pre>';
//        print_r($salary_view);
//        exit();
        
        $emp = view('ap.pages.settings.make_salary')
                ->with('salary_view', $salary_view)
                ->with('invoice_view', $invoice_view);
        $master = view('ap.pages.settings.settings_master')
                ->with('settings_content', $emp);
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
    
    
//    echo '<pre>';
//    print_r();
//    exit();
}
