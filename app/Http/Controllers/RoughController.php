<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RoughController extends Controller
{
    public function rough()
    {
        return view('rough_info');
    }
    
    
}
