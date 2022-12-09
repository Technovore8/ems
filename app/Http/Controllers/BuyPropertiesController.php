<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyPropertiesController extends Controller
{
    public function buyproperties(){
        return view('frontend.pages.properties.buyproperties');
    }
}
