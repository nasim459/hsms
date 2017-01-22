<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
use Validator;
use Illuminate\Support\Facades\Auth;
use Session;
use App\User;
use DB;

class HomeController extends Controller {

    //
    public function dashboard() {
        $master = view('ap.pages.dboard_home');
        return view('master_ap')
                        ->with('maincontent', $master);
    }

    public function postSignIn(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error_message', 'Required fields are blank!');
        }

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']], true)) {

                return redirect('aa');

        }

        return redirect()->back()->with('error_message', 'We are unable to sign you in. Invalid Email and password.');
    }


    public function mailTest(Request $request) {

        $link = "";
        $email = "yaminalam27@gmail.com";
        $password = "";

        $aa = Mail::send('mailTemp.mailTest', ['link' => $link, 'email' => $email, 'password' => $password], function (Message $m) use ($email) {
                    $m->from(env('MAIL_USERNAME'), "Yamin");
                    $m->to($email)->subject('Test laravel mail...');
                });


        echo "<pre>";
        print_r($aa);
        echo "</pre>";
        exit();
    }

}
