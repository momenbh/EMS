<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class Productcontroller extends Controller
{
    public function product(){
        $product=Product::OrderBy('id','desc')->paginate(3);
        return view('Backend.pages.product',compact('product'));
        
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
        return redirect()->route('product.create')->with('message','information submit successfully');
    }
    public function delete($id){

        Product::find($id)->delete();
        return redirect()->back();
    }
    public function view($id){
        $product=Product::find($id);
        return view('Backend.pages.productview',compact('product'));
    }
    public function edit($id){
        $product=Product::find($id);
        return view('Backend.pages.productedit',compact('product'));
    }
    public function update(Request $request,$id){
        $product=Product::find($id);
        $product->update([
            'name'=>$request->name,
            'phone_number'=>$request->phone_number,
            'email'=>$request->email,
            'date_of_birth'=>$request->date_of_birth,
            'age'=>$request->age,

        ]);
        return redirect()->route('product.create');
    }
      
}
