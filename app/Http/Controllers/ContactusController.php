<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function contactus(){
        return view('frontend.pages.contactus');
    }
    
    public function store(Request $request){
        // dd($request);
        // dd(auth()->user());
        $request->validate([
            'message'=>'required'
        ]);
        Contact::create([
           'name'=>auth()->user()->name,
           'email'=>auth()->user()->email,
           'subject'=>$request->subject,
           'message'=>$request->message 
        ]);
        return redirect()->back();
    } 
}
