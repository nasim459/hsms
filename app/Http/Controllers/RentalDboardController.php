<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentalDboardController extends Controller
{
    public function rental_dboard(){
        return view('ap.rental_portal.rental_dboard');
    }
}
