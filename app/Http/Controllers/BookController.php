<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use App\Models\Property;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create($id){
        $property=Property::find($id);
        Booking::create([
            'user_id'=>auth()->user()->id,
            'property_id'=>$property->id,
        ]);

        return to_route('home');
    }
    
}
