<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class SalaryController extends Controller
{
    //
    //--------------add tbl_emp_salary
    public function save_salary_add(Request $request)
    {
        //------tbl_salary
        $a = $request->a;
        $b = $request->b;
        $c = $request->c;
        $d = $request->d;
        $total_amount = $a+$b+$c+$d;
        
        $salary = array();
        $salary['emp_id'] = $request->emp_id;
        $salary['start_date'] = $request->start;
        $salary['salary_basic'] = $a;
        $salary['salary_house'] = $b;
        $salary['salary_health'] = $c;
        $salary['salary_transport'] = $d;
        $salary['total_amount'] = $total_amount;
        
        DB::table('tbl_emp_salary')->insert($salary);
        return Redirect::to('info-emp');
    }
    //--------------update tbl_emp_salary
    public function salary_update(Request $request)
    {
        //------tbl_salary
        $emp_salary_id = $request->sal_id;
        $emp_id = $request->employee_id;
        $a = $request->a;
        $b = $request->b;
        $c = $request->c;
        $d = $request->d;
        $total_amount = $a+$b+$c+$d;
        
        $salary = array();
        $salary['salary_basic'] = $a;
        $salary['salary_house'] = $b;
        $salary['salary_health'] = $c;
        $salary['salary_transport'] = $d;
        $salary['total_amount'] = $total_amount;
        $salary['emp_id'] = $emp_id;
        
        DB::table('tbl_emp_salary')
                ->where('tbl_emp_salary.emp_salary_id', $emp_salary_id)
                ->update($salary);
        return Redirect::to('info-emp');
    }
    //-----Publish_Statement_Salary
    public function publish_statement_salary($emp_id)
    {        
        DB::table('tbl_emp')
            ->where('emp_id', $emp_id)
            ->update(['salary_status' => 1]);
    
        return Redirect::to('make-salary');
    }
    //-----unPublish_Statement_Salary
    public function unpublish_statement_salary($emp_id)
    {        
        DB::table('tbl_emp')
            ->where('emp_id', $emp_id)
            ->update(['salary_status' => 2]);
    
        return Redirect::to('make-salary');
    }
    
    
    
    
//        echo '<pre>';
//        print_r($salary);
//        exit();
}
