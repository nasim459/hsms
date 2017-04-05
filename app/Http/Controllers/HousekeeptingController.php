<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class HousekeeptingController extends Controller
{
    //
    //--------housekeeping_info of tbl_housekeeping
    public function housekeeping_info()
    {
        $owner = view('ap.pages.people.info_housekeeping');
        $master = view('ap.pages.people.people_master')
                ->with('people_content', $owner);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    //--------housekeeping_info_show of tbl_housekeeping
    public function show_housekeeping_info()
    {
        $show_housekeeping = DB::table('tbl_housekeeping')
                //->join('tbl_flat_info', 'tbl_housekeeping.tbl_flat_info', '=', 'tbl_flat_info.flat_info_id')
                //->select('tbl_housekeeping.*', 'tbl_flat_info.*')
                ->select('tbl_housekeeping.*')
                ->get();
        return $show_housekeeping;
    }
    
    
    
}
