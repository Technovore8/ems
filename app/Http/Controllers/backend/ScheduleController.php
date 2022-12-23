<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function create(){
        return view('backend.pages.schedule.create');
    }
    public function index(){
        $users=User::all();
        return view('backend.pages.schedule.index');
    }
    public function store(Request $request){
        $request->validate([

            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        #file system handling
        $filename=null;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        #post data
        try{
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'password'=>$request->password,
            'image'=>$filename,
        ]);
    } 
    catch (Exception $err) {
        
    }
        return redirect()->route('backend.user.index');
    }
}



    
