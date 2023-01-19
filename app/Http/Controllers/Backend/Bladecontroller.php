<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Bladecontroller extends Controller
{
    public function blade(){
        return view('home');
    }
    public function registration(Request $request){
    //  dd($request->all());
    $request->validate([

        'name'=>'required',
        'email'=>'required|email',
        'mobile'=>'required|phone_number',
        'password'=> 'required',
        

    ]);

        User::create([

            'name'=>$request->name,
             'email'=>$request->email,
             'mobile'=>$request->phone_number,
             'password'=> bcrypt($request->password),
              'role'=>'customer',
  
      ]);
  
  
      
        return redirect()->back()->with('message','registration successfully');
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',

        ]);
        $credentials=$request->except('_token');
        if(auth()->attempt($credentials))
        {
            return redirect ()->back()->with('message','login successfully');
            
        }
        else 
        {
            return redirect ()->back()->with('message','invaild password');
        }
        

        

    }
}
