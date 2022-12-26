<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
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
            Toastr::success('login successfull', 'success');
            if(auth()->user()->role== "admin"){
                return redirect()->route('admin');
            }
            return redirect()->route('home');
        }
        else{
            Toastr::error('Invalid credentials', 'error');
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        Toastr::success('Log Out successfull', 'success');
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
        try{
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'password'=>bcrypt($request->password),
            'image'=>$filename,
            'nid_image'=>$nidfilename,
            'role'=>$request->role
        ]);
    } 
    catch (Exception $err) {
        
    }
        Toastr::success('Your registration completed please login', 'success');
        return redirect()->route('login');
    }




    #user profile
    public function profile(){
    
            $listedProperties = Property::where('user_id',auth()->user()->id)->get();
            return view('frontend.pages.registration.profile',compact('listedProperties'));

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
        try{
        User::find($id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'image'=>$filename,
            'nid_image'=>$nidfilename
        ]);
    } 
    catch (Exception $err) {
        
    }
        Toastr::success('Profile updated successfuly', 'success');
        return redirect()->route('user.profile');


    }
    public function view($id){
       
    }
}
