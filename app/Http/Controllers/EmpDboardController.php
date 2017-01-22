<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpDboardController extends Controller
{
    public function emp_dboard(){
//        return view('ap.emp_portal.emp_dboard');
//       $emp = view('ap.emp_portal.emp_master');
//       echo "<pre>";
//       print_r($emp);
//       exit();
        $emp= view('ap.emp_portal.emp_details');
        return view('ap.emp_portal.emp_dboard')
                ->with('maincontent', $emp);
    }
}
