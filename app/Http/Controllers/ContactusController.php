<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class ContactusController extends Controller
{
    public function contactus(){
        return view('frontend.pages.contactus');
    }
    
    public function store(Request $request){
        $request->validate([
            'message'=>'required'
        ]);
        Contact::create([
           'name'=>auth()->user()->name,
           'email'=>auth()->user()->email,
           'subject'=>$request->subject,
           'message'=>$request->message 
        ]);
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
