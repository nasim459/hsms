<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller {

    //----------
    public function hsms_panel_signin() {
        return view('login.login_ap');
    }

    public function check_panel_signin(Request $request) {
        $username = $request->username;
        $password = $request->password;

        $check_login = DB::table('tbl_access_panel')
                ->where('access_panel_email', $username)
                ->where('access_panel_password', $password)
                ->first();
        
        if ($check_login) {
            
            $signin_username = $check_login->access_panel_name;
            $signin_email = $check_login->access_panel_email;
            Session::put('signin_username', $signin_username);
            Session::put('signin_email', $signin_email);
            return Redirect::to('dboard');
        } else {
            
            Session::put('wrong_entry', 'Incorrect UserName & Password?');
            return Redirect::to('signin-panel-hsms');
        }
    }

    public function signup() {
        return view('login.signup_ap');
    }

}
