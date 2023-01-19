<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogincController extends Controller
{
    public function dologin(Request $request)
    {
        $credenials=$request->only(['email','password']);
        if(Auth::attempt($credenials))
        {
            
       
            return redirect()->route('home.blade')->with('message','login successfully');
        }
        else{
            return redirect()->back()->with('message','incorrect password');
        }
    }
}
