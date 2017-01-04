<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InvoiceController extends Controller
{
    //
    public function invoice_owner_info()
    {
        $master = view('ap.pages.people.info_owner_invoice');
        return view('master_ap')
                ->with('maincontent', $master);
    }
}
