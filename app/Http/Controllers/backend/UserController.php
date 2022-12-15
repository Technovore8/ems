<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function create(){
        return view('backend.pages.user.create');
    }
    public function index(){
        $users=User::get();
        return view('backend.pages.user.index',compact('users'));
    }

    public function store(Request $request){
        #validation
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
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'password'=>bcrypt($request->password),
            'image'=>$filename,
        ]);
        return redirect()->route('backend.user.index');
    }

    public function edit($id){
        $user=User::find($id);
        return view('backend.pages.user.edit',compact('user'));
    }
#update
    public function update(Request $request,$id){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required',
        ]);
        $user=User::find($id);
        $filename=$user->image;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'image'=>$filename,
        ]);

        return redirect()->route('backend.user.index');
    }

    public function delete($id){
        $user=User::find($id)->delete();
        return redirect()->route('backend.user.index');
    }
}
