<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index(){
        $categories=category::where('category_status',1)->get();
        return view('BackEnd.dish.add',compact('categories'));
    }
    public function save_dish(Request $request){
        $imgName=$request->file('dish_image');
        $image=$imgName->getClientOriginalName();
        $directory='BackEndSourceFile/dish_img';
        $imgUrl=$directory.$image;
        $imgName->move($directory,$image);

        $dish=new Dish();
        $dish->dish_name=$request->dish_name;
        $dish->category_id=$request->category_id;
        $dish->dish_detail=$request->dish_detail;
        $dish->dish_image=$imgUrl;
        $dish->dish_status=$request->dish_status;
        return back()->with('sms','Saved!');
    }
}
