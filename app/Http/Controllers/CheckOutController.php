<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function check(){
        return view('FrontEnd.checkout.checkField');
    }
}
