<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InventoryController extends Controller
{
    //
    public function ataglance_inventory()
    {
        $inventory = view('ap.pages.inventory.i_at_a_glance');
        $master = view('ap.pages.inventory.i_master')
                ->with('broadcasting_content', $inventory);

        return view('master_ap')
                ->with('maincontent', $master);
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
