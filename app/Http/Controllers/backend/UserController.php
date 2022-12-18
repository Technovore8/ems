<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

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
        //dd($request);
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
            'nid_image'=>$nidfilename
        ]);
        
    

        Toastr::success('user created successfuly', 'success');
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
        $user=User::find($id);
        $nidfilename=$user->image;
        if($request->hasFile('image')){
            $file=$request->file('image');
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
        Toastr::success('user updated successfuly', 'success');
        return redirect()->route('backend.user.index');
    }

    public function delete($id){
        $user=User::find($id)->delete();
        Toastr::error('user deleted successfuly', 'success');
        return redirect()->route('backend.user.index');
    }
   
}
