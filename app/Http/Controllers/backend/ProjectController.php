<?php

namespace App\Http\Controllers\backend;

use App\Models\Project;
use App\Models\Location;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Exception;

class ProjectController extends Controller
{
    public function create(){
        $location=Location::get();
        return view('backend.pages.project.create',compact('location'));
    }
    public function index(){
        $project=Project::get();
        return view('backend.pages.project.index',compact('project'));
    }
    public function store(Request $request){
        $filename=null;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        try{
        Project::create([
            'name'=>$request->name,
            'location_id'=>$request->location_id,
            'image'=>$filename,
            'details'=>$request->details,
            'slug'=>Str::slug($request->name),
        ]);
    } 
    catch (Exception $err) {
        
    }
        Toastr::success('project created successfuly', 'success');
        return redirect()->route('backend.project.index');
    }


    public function edit($id){
        $location=Location::get();
        $project=Project::with('location')->find($id);
    return view('backend.pages.project.edit',compact('project','location'));
    }


    public function update(Request $request,$id){

        $project=Project::with('location')->find($id);
        $filename=null;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        try{
        $project->update([
            'name'=>$request->name,
            'location_id'=>$request->location_id,
            'image'=>$filename,
            'details'=>$request->details,
        ]);
    } 
    catch (Exception $err) {
        
    }
        Toastr::success('project updated successfuly', 'success');
        return redirect()->route('backend.project.index');
    }
    public function delete($id){
        $project=Project::find($id)->delete();
        Toastr::error('project deleted successfuly', 'success');
        return redirect()->route('backend.project.index');

    }
}