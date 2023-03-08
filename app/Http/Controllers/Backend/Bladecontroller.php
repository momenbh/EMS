<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Bladecontroller extends Controller
{
    public function blade(){

        
        return view('home');
    }

    public function registration (Request $request){
    //  dd($request->all());
    $request->validate([

        'name'=>'required',
        'email'=>'required|email',
        'phone_number'=>'required',
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
        $credenials=$request->only(['email','password']);
        if(Auth::attempt($credenials))
        {
            return redirect ()->route('home.blade')->with('message','login successfully');
            
        }
        else 
        {
            return redirect ()->back()->with('message','invaild password');
        }
        

        

    }
}
