<?php

namespace App\Http\Controllers\backend;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function create(){
        return view('backend.pages.project.create');
    }
    public function index(){
        $project=Project::get();
        return view('backend.pages.project.index',compact('project'));
    }
    public function store(Request $request){
        // //dd($request->all());
        //     $request->validate([
        //     'name'=>'required',
        //     'address'=>'required',
        //     'details'=>'required'

        // ]);
        // dd($request);
        $filename=null;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        Project::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'image'=>$filename,
            'details'=>$request->details,
            'slug'=>Str::slug($request->name),
        ]);
        return redirect()->route('backend.project.index');
    }
    public function edit($id){
    $project=Project::find($id);
    return view('backend.pages.project.edit',compact('project'));
    }
}