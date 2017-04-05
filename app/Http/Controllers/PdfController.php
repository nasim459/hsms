<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;
use PDF;

class PdfController extends Controller
{
    //
    public function pdfview(Request $request)
    {
        
        //----$items means $invoice_bill_all
        $items = DB::table('tbl_invoice')
                ->join('tbl_flat_info', 'tbl_invoice.flat_info_id', '=', 'tbl_flat_info.flat_info_id')
                ->join('tbl_rental', 'tbl_invoice.rental_id', '=', 'tbl_rental.rental_id')
                ->where('invoice_status', 1)        //-- 1 means invoice_submit
                ->select('tbl_invoice.*', 'tbl_flat_info.*', 'tbl_rental.*')
                ->orderBy('invoice_id', 'desc')
                ->get();
        
        //$items = DB::table("items")->get();
        view()->share('items',$items);

        if($request->has('download')){
            $pdf = PDF::loadView('pdfview');
            return $pdf->download('pdfview.pdf');
        }

        return view('pdfview');
    }
}
