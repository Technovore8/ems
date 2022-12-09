<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellPropertiesController extends Controller
{
    public function sellproperties(){
        return view('frontend.pages.properties.sellproperties');
    }
}
