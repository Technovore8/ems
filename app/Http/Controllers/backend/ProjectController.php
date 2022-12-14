<?php

namespace App\Http\Controllers\backend;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Location;

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
        Project::create([
            'name'=>$request->name,
            'location_id'=>$request->location_id,
            'image'=>$filename,
            'details'=>$request->details,
            'slug'=>Str::slug($request->name),
        ]);
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
        $project->update([
            'name'=>$request->name,
            'location_id'=>$request->location_id,
            'image'=>$filename,
            'details'=>$request->details,
        ]);
        return redirect()->route('backend.project.index');
    }
    public function delete($id){
        $project=Project::find($id)->delete();
        return redirect()->route('backend.project.index');

    }
}