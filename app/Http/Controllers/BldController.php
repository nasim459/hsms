<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class BldController extends Controller
{
    //
    //--------------add building
    public function add_bld()
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
        
        $salary = view('ap.pages.settings.bld_add')
                ->with('salary_view', $salary_view)
                ->with('invoice_view', $invoice_view)
                ->with('payment_paid', $payment_paid)
                ->with('add_salary_statement', $add_salary_statement);
        $master = view('ap.pages.settings.settings_master')
                ->with('settings_content', $salary);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    
    
}
