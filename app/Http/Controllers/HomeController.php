<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;

class HomeController extends Controller {

    //
    public function dashboard() {
        $master = view('ap.pages.dboard_home');
        return view('master_ap')
                        ->with('maincontent', $master);
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
