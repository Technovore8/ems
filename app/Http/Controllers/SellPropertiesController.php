<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Location;
use App\Models\Property;
use Illuminate\Http\Request;

class SellPropertiesController extends Controller
{
    public function sell(){
        $location=Location::all();
        $project=Project::all();
        return view('frontend.pages.properties.sellproperties',compact('location','project'));
    }

    public function sellpost(Request $request){
       //dd($request->all());
        $filename=null;
        if($request->hasfile('image')){
        $file=$request->file('image');
        $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
        $file->storeAs('/uploads',$filename);
        }
        Property::create([
            'name'=>$request->name,
            'location_id'=>$request->location_id,
            'project_id'=>$request->project_id,
            'details'=>$request->details,
            'price'=>$request->price,
            'image'=>$filename
            ]);
        return redirect()->route('home'); 

    }
}
