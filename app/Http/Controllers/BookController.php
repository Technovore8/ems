<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Models\Property;
use App\Models\Remarks;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Exception;

class BookController extends Controller
{
    public function create($id)
    {
        $property = Property::find($id);
        try {
            if(auth()->user()){
                Booking::create([
                    'user_id' => auth()->user()->id,
                    'property_id' => $property->id,
                ]);
                Toastr::success('booking added successfuly', 'success');
            }
        } catch (Exception $err) {
            dd($err);
        }
        return to_route('home');
    }
    public function remarks(Request $request,$id){
        // dd($request->all());
        $property=Property::find($id);

         Remarks::create([
            'user_id'=>auth()->user()->id,
            'property_id'=>$property->id,
            'remarks'=>$request->remarks
         ]);

         return redirect()->back();

    }
}
