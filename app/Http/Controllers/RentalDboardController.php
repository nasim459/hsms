<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use App\Http\Controllers\Session;

class RentalDboardController extends Controller
{
    public function dboard_rental(){
        
        $post_show = DB::table('tbl_forum')
                ->select('tbl_forum.*')
                ->get();

        $ct_show = DB::table('tbl_forum_category')
                ->select('tbl_forum_category.*')
                ->get();

//        echo '<pre>';
//        print_r($post_show);
//        exit();      

        $content = view('fe.rental_portal.pages.forum')
                ->with('ct_show', $ct_show)
                ->with('show', $post_show);
       

        return view('fe.rental_portal.rental_dboard')
                        ->with('maincontent', $content);
                       
       
    }
    
    public function rental_profile(){
        $content = view('fe.rental_portal.pages.rental_profile');
        return view('fe.rental_portal.rental_dboard')
                        ->with('maincontent', $content);
    }
    
    
    public function rental_payment_info(){
        $content = view('fe.rental_portal.pages.rental_payment');
        return view('fe.rental_portal.rental_dboard')
                        ->with('maincontent', $content);
    }
}
