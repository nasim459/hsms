<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class BldController extends Controller {

    //
    //--------------add building
    public function add_bld() {
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
                ->orderBy('bld_floor', 'asc')
                ->orderBy('bld_unit', 'asc')
                ->get();

        //----start total_number_of_building------------
        $length = count($bld_show);
        $b = 0; //------b means maximum building no
        for ($i = 0; $i < $length; $i++) {
            $a = $bld_show[$i]->bld_name;
            if ($a < $length) {
                if ($b > $a) {
                    $b = $b;
                } else {
                    $b = $a;
                }
            }
        }
        Session::put('bld_no', $b);
        $bld_no = Session::get('bld_no');
        //----end total_number_of_building-------------
        //----start total_number_of_floor_of_per_building------------
        for ($s = 1; $s <= $bld_no; $s++) {

            $b = 0; //------b means maximum floor no
            for ($i = 0; $i < $length; $i++) {

                $t = $bld_show[$i]->bld_name;
                if ($s == $t) {

                    $a = $bld_show[$i]->bld_floor;
                    if ($a < $length) {
                        if ($b > $a) {
                            $b = $b;
                        } else {
                            $b = $a;
                        }
                    }
                }
            }
            $bld_floor[$s - 1] = $b;
            Session::put($s - 1, $b);
        }
        //----end total_number_of_floor_of_per_building------------
        // echo '<pre>';
        // print_r($bld_floor);
        //echo $bld_floor[3];
        //exit();
        //echo '----------------------------------'.'</br>';
        //echo '<pre>';
        //print_r($bld_show);
        //exit();

        $bld = view('ap.pages.settings.bld_add')
                ->with('salary_view', $salary_view)
                ->with('invoice_view', $invoice_view)
                ->with('payment_paid', $payment_paid)
                ->with('add_salary_statement', $add_salary_statement)
                ->with('bld_show', $bld_show);
        //->with('bld_floor', $bld_floor);
        $master = view('ap.pages.settings.settings_master')
                ->with('settings_content', $bld);
        return view('master_ap')
                        ->with('maincontent', $master);
    }

    //-----save_bld
    public function save_bld(Request $request) {

        echo $a = $request->a;
        echo $b = $request->b;
        echo $c = $request->c;
        
        $bld_check = DB::table('tbl_flat_info')
                ->where('bld_name', $a)
                ->where('bld_floor', $b)
                ->where('bld_unit', $c)
                ->get();
        
        if (!isset($bld_check[0])) {
            
            $save = array();
            $save['bld_name'] = $a;
            $save['bld_floor'] = $b;
            $save['bld_unit'] = $c;
            $bld = DB::table('tbl_flat_info')->insert($save);
            
            if ($bld) {
                Session::put('bld_data', '1');
            } else {
                Session::put('bld_data', '0');
            }
            
            return Redirect::to('bld-add');
            
        } else {
            Session::put('bld_data', '11');
            return Redirect::to('bld-add');
        }
    }
    
    //----Publication bld_satus
    public function status_bld($flat_info_id, $status)
    {

        if($status == 1){
            DB::table('tbl_flat_info')
                ->where('flat_info_id', $flat_info_id)
                ->update(['bld_status' => 1]);
            return Redirect::to('bld-add');

        }else{
            DB::table('tbl_flat_info')
                ->where('flat_info_id', $flat_info_id)
                ->update(['bld_status' => 0]);
            return Redirect::to('bld-add');
        }
    }
    

}
