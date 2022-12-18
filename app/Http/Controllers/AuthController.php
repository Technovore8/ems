<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    
    public function registration(){
        return view('frontend.pages.registration.registration');
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
        $nidfilename=null;
        if($request->hasFile('nid_image')){
            $file=$request->file('nid_image');
            $nidfilename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$nidfilename);
        }
        #post data
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'password'=>bcrypt($request->password),
            'image'=>$filename,
            'nid_image'=>$nidfilename,
            'role'=>$request->role
        ]);
        return redirect()->route('login');
    }




    #user profile
    public function profile(){
        
        return view('frontend.pages.registration.profile');
    }

    public function edit($id){
        $user=Auth::user();
        return view('frontend.pages.registration.profileEdit',compact('user'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
        ]);
        $user=auth()->user();
        $filename=$user->image;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        $nidfilename=$user->image;
        if($request->hasFile('nid_image')){
            $file=$request->file('nid_image');
            $nidfilename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$nidfilename);
        }
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'image'=>$filename,
            'nid_image'=>$nidfilename
        ]);

        return redirect()->route('user.profile');


    }
}
