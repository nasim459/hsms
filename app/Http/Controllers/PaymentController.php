<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PaymentController extends Controller
{
    //
    public function all_payment()
    {
        $payment = view('ap.pages.payment.p_all_payment');
        $master = view('ap.pages.payment.p_master')
                ->with('broadcasting_content', $payment);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function hand_cash_payment()
    {
        $payment = view('ap.pages.payment.p_hand_cash');
        $master = view('ap.pages.payment.p_master')
                ->with('broadcasting_content', $payment);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function add_hand_cash_payment()
    {
        $payment = view('ap.pages.payment.p_hand_cash_add');
        $master = view('ap.pages.payment.p_master')
                ->with('broadcasting_content', $payment);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    public function edit_hand_cash_payment()
    {
        $payment = view('ap.pages.payment.p_hand_cash_edit');
        $master = view('ap.pages.payment.p_master')
                ->with('broadcasting_content', $payment);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function bkash_payment()
    {
        $payment = view('ap.pages.payment.p_bkash');
        $master = view('ap.pages.payment.p_master')
                ->with('broadcasting_content', $payment);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    public function bank_payment()
    {
        $payment = view('ap.pages.payment.p_bank');
        $master = view('ap.pages.payment.p_master')
                ->with('broadcasting_content', $payment);
        return view('master_ap')
                ->with('maincontent', $master);
    }
    
    
    
}
