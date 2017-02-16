<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class imageController extends Controller
{
    //
    //--------------update update_picture_of_rental
    public function update_pic_rental_info(Request $request) {
        //------start_picture
        $image = $request->file('image');
        $rental_id = $request->a;

        if (isset($image)) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $destination_path = 'ap/images/rental_people_img/';
            $image_full_name = $image_name . '.' . $ext;
            $image_url = $destination_path . $image_full_name;
            $success = $image->move($destination_path, $image_full_name);

            if ($success) {

                $service_person = array();
                $service_person['service_person_image'] = $image_url;
                DB::table('tbl_rental')
                        ->where('rental_id', $rental_id)
                        ->update(['rental_image' => $image_url]);

                Session::flash('rental_img', 'Profile Picture Successfully Update!');
                $url_current = Session::get('url_current');
                return Redirect::to($url_current);
            }
        } else {
            $url_current = Session::get('url_current');
            return Redirect::to($url_current);
        }
        //------end_picture
    }
    
    //--------------update update_picture_of_driver
    public function update_pic_driver_info(Request $request) {
        //------start_image
        $image = $request->file('image');
        $driver_id = $request->a;

        if (isset($image)) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $destination_path = 'ap/assets/img/driver_img/';
            $image_full_name = $image_name . '.' . $ext;
            $image_url = $destination_path . $image_full_name;
            $success = $image->move($destination_path, $image_full_name);

            if ($success) {

                $service_person = array();
                $service_person['driver_image'] = $image_url;
                DB::table('tbl_driver')
                        ->where('driver_id', $driver_id)
                        ->update(['driver_image' => $image_url]);

                Session::put('driver_img', 'Profile Picture Successfully Update!');
                $previous_url = url()->previous();
                return Redirect::to($previous_url);
            }
        } else {
            Session::put('driver_img_error', 'Nothing To Update!');
            $previous_url = url()->previous();
            return Redirect::to($previous_url);
        }
        //------end_imge
    }
    
    
    
}
