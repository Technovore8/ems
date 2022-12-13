<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertiesController extends Controller
{
    public function properties(){
       $properties=Property::with('location','project')->get();
       dd($properties);
    }
}
