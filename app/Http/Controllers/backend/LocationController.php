<?php

namespace App\Http\Controllers\backend;

use App\Models\Location;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Exception;

class LocationController extends Controller
{
    public function create(){
        return view('backend.pages.location.create');
    }
    public function index(){
        $Location=Location::get();
        return view('backend.pages.location.index',compact('Location'));
    }
    public function store(Request $request){
        // dd($request);
        $request->validate([
            'name'=>'required'
        ]);
        Location::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
        ]);
        Toastr::success('Location created successfuly', 'success');
        return redirect()->route('backend.location.index');
    }
    public function edit($id)
    
    {
    $location=Location::find($id);
    return view('backend.pages.location.edit',compact('location'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'name'=>'required'
        ]);
        $location=Location::find($id);
        $filename=null;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        try{
        $location->update([
            'name'=>$request->name,

        ]);
    } 
    catch (Exception $err) {
        
    }

        Toastr::success('Location updated successfuly', 'success');
        return redirect()->route('backend.location.index');
    }
    public function delete($id){
        $location=Location::find($id)->delete();
        Toastr::success('Location deleted successfuly', 'warning');
        return redirect()->route('backend.location.index');
    }

}

