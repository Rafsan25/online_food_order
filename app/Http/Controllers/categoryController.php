<?php

namespace App\Http\Controllers;


use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(){
        return view('BackEnd.category.addCategory');
    }
    public function save(Request $request){
        $category=new category();
        $category->category_name=$request->category_name;
        $category->order_number=$request->order_number;
        $category->category_status=$request->category_status;
        $category->added_on=$request->added_on;
        $category->save();

        return back()->with('sms','Category saved');
    }
    public function manage(){
        $categories=category::all();
        return view('BackEnd.category.manageCategory',compact('categories'));
    }

}
