<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class Productcontroller extends Controller
{
    public function product(){
        return view('Backend.pages.product');
        
        return redirect()->back();
    }
    public function form(){
        return view('Backend.pages.productform');
    }
    public function store(Request $request){
        Product::create([
            'name'=>$request->name,
            'phone_number'=>$request->phone_number,
            'email'=>$request->email,
            'date_of_birth'=>$request->date_of_birth,
            'age'=>$request->age,

        ]);
        return redirect()->back()->with('message','information submit successfully');
    }
      
}
