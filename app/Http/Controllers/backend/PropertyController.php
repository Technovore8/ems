<?php

namespace App\Http\Controllers\backend;

use App\Models\Project;
use App\Models\Location;
use App\Models\Property;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{
    public function create(){
        $location=Location::all();
        $project=Project::all();
        return view('backend.pages.property.create',compact('location','project'));
    }
    
    public function index(){
        $Property=Property::get();
        return view('backend.pages.property.index',compact('Property'));
    }
    
    public function store(Request $request){
  
        $request->validate([
            'name'=>'required',
        ]);
    //    dd($request);
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
]);
        return redirect()->route('backend.property.index');
    }

    public function edit($id){
        $location=Location::all();
        $project=Project::all();
        $property=Property::with('location','project')->find($id);
        return view('backend.pages.property.edit',compact('property','location','project'));
    }
}
