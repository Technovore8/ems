<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Remarks;
use Illuminate\Http\Request;

class BuyPropertiesController extends Controller
{
    public function buyproperties(){
        $properties = Property::where("status","approved")->get();
        dd($properties);
        return view('frontend.pages.properties.buyproperties',compact('properties'));
    }
    public function singleView($id){
        $property = Property::find($id);
        $remarks=Remarks::with('UserRelation','PropertyRelation')->where('property_id',$property->id)->get();
        return view('frontend.pages.properties.details',compact('property','remarks'));

    }
}
