<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        // dd(auth()->user());
        $properties=Property::with('location','project')->get();
        $projects=Project::all();
        return view('frontend.pages.home.home',compact('properties','projects'));
    }
}
