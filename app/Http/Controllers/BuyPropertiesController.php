<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class BuyPropertiesController extends Controller
{
    public function buyproperties(){
        $properties = Property::all();
        return view('frontend.pages.properties.buyproperties',compact('properties'));
    }
    public function singleView($id){
        $property = Property::find($id);
        return view('frontend.pages.properties.details',compact('property'));

    }
}
