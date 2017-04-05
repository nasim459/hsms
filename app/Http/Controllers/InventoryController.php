<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
class InventoryController extends Controller
{
    //
    public function ataglance_inventory()
    {
        
        $last_record = DB::table('tbl_invoice_payment')
                ->orderBy('invoice_payment_id', 'desc')
                ->first();
        $last_pay_month = $last_record->pay_month;
        $last_pay_year = $last_record->pay_year;
//        echo '<pre>';
//        print_r($last_record);
//        exit();
        
        //-----------Sum tbl_invoice_payment of rental
        $at_a_glance_payable_amount = DB::table('tbl_invoice_payment')
                ->where('pay_month', $last_pay_month)
                ->sum('payable_amount');
        $at_a_glance_pay_amount = DB::table('tbl_invoice_payment')
                ->where('pay_month', $last_pay_month)
                ->sum('pay_amount');
        Session::put('at_a_glance_payable_amount', $at_a_glance_payable_amount);
        Session::put('at_a_glance_pay_amount', $at_a_glance_pay_amount);
        
        
        $inventory = view('ap.pages.inventory.i_at_a_glance');
        $master = view('ap.pages.inventory.i_master')
                ->with('broadcasting_content', $inventory);

        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function show_ataglance_inventory()
    {
//        $last_record = DB::table('tbl_invoice_payment')
//                ->orderBy('invoice_payment_id', 'desc')
//                ->first();
//        return $last_record;
        $show_rental = DB::table('tbl_rental')
                ->join('tbl_flat_info', 'tbl_rental.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->select('tbl_rental.*', 'tbl_flat_info.*')
                ->get();
        return $show_rental;
    }
    
    public function grant_total_inventory()
    {
        $inventory = view('ap.pages.inventory.i_grant_total');
        $master = view('ap.pages.inventory.i_master')
                ->with('broadcasting_content', $inventory);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function utilities_inventory()
    {
        $inventory = view('ap.pages.inventory.i_utilities_bills');
        $master = view('ap.pages.inventory.i_master')
                ->with('broadcasting_content', $inventory);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function utilities_add_inventory()
    {
        $inventory = view('ap.pages.inventory.i_utilities_bills_add');
        $master = view('ap.pages.inventory.i_master')
                ->with('broadcasting_content', $inventory);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function utilities_edit_inventory()
    {
        $inventory = view('ap.pages.inventory.i_utilities_bills_edit');
        $master = view('ap.pages.inventory.i_master')
                ->with('broadcasting_content', $inventory);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function utilities_details_inventory()
    {
        $inventory = view('ap.pages.inventory.i_utilities_bills_details');
        $master = view('ap.pages.inventory.i_master')
                ->with('broadcasting_content', $inventory);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function utilities_grant_inventory()
    {
        $inventory = view('ap.pages.inventory.i_utilities_bills_grant_total');
        $master = view('ap.pages.inventory.i_master')
                ->with('broadcasting_content', $inventory);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function income_inventory()
    {
        $inventory = view('ap.pages.inventory.i_income');
        $master = view('ap.pages.inventory.i_master')
                ->with('broadcasting_content', $inventory);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    
    
}
