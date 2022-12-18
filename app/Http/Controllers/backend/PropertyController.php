<?php

namespace App\Http\Controllers\backend;

use App\Models\Project;
use App\Models\Location;
use App\Models\Property;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class PropertyController extends Controller
{
    public function create(){
        $location=Location::all();
        $project=Project::all();
        return view('backend.pages.property.create',compact('location','project'));
    }
    
    public function index(){
        $property=Property::get();
        return view('backend.pages.property.index',compact('property'));
    }
    
    public function store(Request $request){
       // dd($request);
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'details'=>'required'
        ]);
   
        $filename=null;
        if($request->hasfile('image')){
        $file=$request->file('image');
        $filename=date('ymdhis').'.'.$file->getClientOriginalExtension();
        $file->storeAs('/uploads',$filename);
        }

        Property::create([
        'name'=>$request->name,
        'location_id'=>$request->location_id,
        'project_id'=>$request->project_id,
        'details'=>$request->details,
        'slug'=>Str::slug($request->name),
        'image'=>$filename,
        'price'=>$request->price
]);
Toastr::success('property created successfuly', 'success');
        return redirect()->route('backend.property.index');
    }

    public function edit($id){
        $location=Location::all();
        $project=Project::all();
        $property=Property::with('location','project')->find($id);
        return view('backend.pages.property.edit',compact('property','location','project'));
    }
    public function update(Request $request,$id){
      $request->validate([
        'name'=>'required',
      ]);  
      $property=Property::find($id);
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
      $khotianfilename=null;
      if($request->hasFile('khotian_image')){
          $file=$request->file('khotian_image');
          $khotianfilename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
          $file->storeAs('/uploads',$khotianfilename);
      }
      $property->update([
        'name'=>$request->name,
        'location_id'=>$request->location_id,
        'project_id'=>$request->project_id,
        'details'=>$request->details,
        'slug'=>Str::slug($request->name),
        'image'=>$filename,
        'nid_image'=>$nidfilename,
        'khotian_image'=>$khotianfilename,
        'price'=>$request->price,
      ]);
      Toastr::success('property updated successfuly', 'success');
      return redirect()->route('backend.property.index');

    }
    public function delete($id){
        $property=Property::find($id)->delete();
        Toastr::error('property deleted successfuly', 'success');
        return redirect()->route('backend.property.index');
    }
}
