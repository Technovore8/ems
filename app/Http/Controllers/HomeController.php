<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $properties=Property::with('location','project')->get();
        return view('frontend.pages.home.home',compact('properties'));
    }
}
