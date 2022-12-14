<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertiesController extends Controller
{
    public function properties(){
       $properties=Property::with('location','project')->get();
       //dd($properties);
       return view('frontend.pages.properties.properties',compact('properties'));
    }

    public function index(){
        $properties=Property::with('location','project')->get();
        return view('frontend.pages.properties.index',compact('properties'));
    }

    public function projectPro($id){
        $properties=Property::where('project_id',$id)->get();
        return view('frontend.pages.project.projectPro',compact('properties'));
    }

}
