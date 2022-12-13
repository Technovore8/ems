<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('frontend.pages.login.login');
    }

    public function loginPost(Request $request){
        // dd($request->all());
        $variable=$request->except('_token');
        if (Auth::attempt($variable)){
            return redirect()->route('home');
        }
        else{
            return redirect()->back();
        }
    }
    public function registration(){
        return view('frontend.pages.registration.registration');
    }
}
