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
        //---rough
        $salary_view = DB::table('tbl_emp_salary')
                ->join('tbl_emp', 'tbl_emp_salary.emp_id', '=', 'tbl_emp.emp_id')
                ->select('tbl_emp_salary.*', 'tbl_emp.*')
                ->orderBy('emp_salary_id', 'desc')
                ->get();
        //---rough
        $invoice_view = DB::table('tbl_emp_invoice')
                ->join('tbl_emp', 'tbl_emp_invoice.emp_id', '=', 'tbl_emp.emp_id')
                ->select('tbl_emp_invoice.*', 'tbl_emp.emp_id_no')
                ->orderBy('emp_invoice_id', 'desc')
                ->get();
        //---rough
        $payment_paid = DB::table('tbl_emp_payment')
                ->join('tbl_emp', 'tbl_emp_payment.emp_id', '=', 'tbl_emp.emp_id')
                ->select('tbl_emp_payment.*', 'tbl_emp.emp_id_no')
                ->orderBy('emp_payment_id', 'desc')
                ->get();
        //---rough
        $add_salary_statement = DB::table('tbl_emp')
                //->join('tbl_emp', 'tbl_emp_salary.emp_id', '=', 'tbl_emp.emp_id')
                //->where('tbl_emp.salary_status', '1')
                ->select('tbl_emp.*')
                ->orderBy('emp_id', 'desc')
                ->get();
//        echo '<pre>';
//        print_r($salary_view);
//        exit();
        
        
        
        $bld_show = DB::table('tbl_flat_info')
                ->select('tbl_flat_info.*')
                ->get();
        
        //----start total_number_of_building------------
        $length = count($bld_show);
        $b = 0;
        for($i=0; $i<$length; $i++){
            $a = $bld_show[$i]->bld_name;
            if($a < $length){
                if($b > $a){
                    $b = $b;
                }else {
                    $b = $a;
                }
                
            }
            
        }
        //echo $b;
        Session::put('bld_no', $b);
        //----end total_number_of_building-------------

//        echo '<pre>';
//        print_r($bld_show);
//        exit();
        
        $bld = view('ap.pages.settings.bld_add')
                ->with('salary_view', $salary_view)
                ->with('invoice_view', $invoice_view)
                ->with('payment_paid', $payment_paid)
                ->with('add_salary_statement', $add_salary_statement)
                ->with('bld_show', $bld_show);
        $master = view('ap.pages.settings.settings_master')
                ->with('settings_content', $bld);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    
    
}
