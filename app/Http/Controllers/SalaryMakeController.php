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
//        $emp_show = DB::table('tbl_emp')
//                ->select('tbl_emp.*')
//                ->get();
        
        $emp = view('ap.pages.settings.make_salary');
                //->with('emp_show', $emp_show)
        $master = view('ap.pages.settings.settings_master')
                ->with('settings_content', $emp);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    
    
}
