<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Dish;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $categories=category::where('category_status',1)->get();
        $dishes=Dish::where('dish_status',1)->get();
        return view('FrontEnd.include.home',compact('categories','dishes'));
    }
}
