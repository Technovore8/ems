<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Location;
use App\Models\Property;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

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
        $nidfilename=null;
        if($request->hasfile('nid_image')){
        $file=$request->file('nid_image');
        $nidfilename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
        $file->storeAs('/uploads',$nidfilename);
        }
        $khotianfilename=null;
        if($request->hasfile('khotian_image')){
        $file=$request->file('khotian_image');
        $khotianfilename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
        $file->storeAs('/uploads',$khotianfilename);
        }
        Property::create([
            'name'=>$request->name,
            'location_id'=>$request->location_id,
            'project_id'=>$request->project_id,
            'details'=>$request->details,
            'price'=>$request->price,
            'image'=>$filename,
            'nid_image'=>$nidfilename,
            'khotian_image'=>$khotianfilename
        ]);
        Toastr::success('Your property add for sale', 'success');
        return redirect()->route('home'); 

    }
}
