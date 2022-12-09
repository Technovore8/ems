<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function properties(){
        return view('frontend.pages.properties.properties');
    }
}
