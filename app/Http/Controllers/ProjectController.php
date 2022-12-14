<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects=Project::with('location')->get();
        return view('frontend.pages.project.index',compact('projects'));
    }

    public function details($id){
        $project=Project::with('location')->find($id);
        return view('frontend.pages.project.details',compact('project'));
    }
}
