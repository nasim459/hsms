<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class ServiceAssignedController extends Controller
{
    //
    //--------------add service_assigned
    public function add_assigned_service_info(Request $request)
    {
        $previous_url = url()->previous();
        //------tbl_service_assigned
        $rental_id = $request->aa;
        $flat_info_id = $request->bb;
        
        $amount = $request->amount;
        $amount_tmp = $request->amount;
        
        $service_id = $request->s_id;
        $service_person_id = $request->sp_id;
        
        $length = count($service_id);
//            echo '<pre>';
//            echo 'amount';
//            print_r($amount);
//            
//            echo '<pre>';
//            echo 'service_id';
//            print_r($service_id);
//            
//            echo '<pre>';
//            echo 'service_person_id';
//            print_r($service_person_id);
            
        $n = 0;    
        $data =  array();
        //foreach($service_id as $v)
        for($i=0; $i<$length; $i++){
            $data['amount_tmp'] = $amount_tmp[$i];
            $data['amount'] = $amount[$i];
            $data['service_id'] = $service_id[$i];
            $data['service_person_id'] = $service_person_id[$i];
            
            $data['rental_id'] = $rental_id;
            $data['flat_info_id'] = $flat_info_id;
            
            
            $check = DB::table('tbl_service_assigned')
//                    ->where('tbl_service_assigned.service_id', $service_id[$i])
                    ->where([
                        ['tbl_service_assigned.service_id', '=', $service_id[$i]],
                        ['tbl_service_assigned.rental_id', '=', $rental_id]
                    ])
                    ->get();
            if(!isset($check[0])){
                //echo 'Yes';
                DB::table('tbl_service_assigned')->insert($data); 
               
            }else{
                //echo 'NO';
                Session::flash('service_taken', 'Service Already Taken!');
                return Redirect::to($previous_url);
            }
        }
        Session::flash('service_assigned', 'Service Started Successfully!');
        return Redirect::to($previous_url);
    }
    
    
    
    
}
