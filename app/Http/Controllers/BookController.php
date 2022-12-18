<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Models\Property;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class BookController extends Controller
{
    public function create($id){
        $property=Property::find($id);
        Booking::create([
            'user_id'=>auth()->user()->id,
            'property_id'=>$property->id,
        ]);
        Toastr::success('booking added successfuly', 'success');
        return to_route('home');
    }
    
}
