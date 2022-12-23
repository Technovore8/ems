<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Exception;

class ContactusController extends Controller
{
    public function contactus(){
        return view('frontend.pages.contactus');
    }
    
    public function store(Request $request){
        $request->validate([
            'message'=>'required',
            "email"=>'required',
            "name"=>'required'
        ]);
        try{
        Contact::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'subject'=>$request->subject,
           'message'=>$request->message 
        ]);
    } 
    catch (Exception $err) {
        
    }
        Toastr::success('Thank you for connecting us', 'success');
        return redirect()->back();
    }
    public function message(){
        $message = Contact::all();
        return view("backend.pages.contact.index",compact("message"));
    }
    public function delete($id){
        Contact::find($id)->delete();
        return redirect()->back();
    }
}
