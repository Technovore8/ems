<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use App\Models\Booking;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Exception;

class BookingController extends Controller
{
    public function create()
    {
        $users = User::all();
        $properties = Property::all();
        return view('backend.pages.booking.create', compact('users', 'properties'));
    }

    public function index()
    {
        $book = Booking::with('user', 'property')->get();
        
        return view('backend.pages.booking.index', compact('book'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'user_id' => 'required',
            'property_id' => 'required'
        ]);
        try {
            Booking::create([
                'user_id' => $request->user_id,
                'property_id' => $request->property_id
            ]);
        } catch (Exception $err) {
        }
        Toastr::success('bookings created successfuly', 'success');
        return redirect()->route('backend.booking.index');
    }


    public function edit($id)
    {
        $users = User::all();
        $properties = Property::all();
        $booking = Booking::find($id);
        return view('backend.pages.booking.edit', compact('booking', 'users', 'properties'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'property_id' => 'required'
        ]);

        $booking = Booking::find($id);
        try {
            $booking->update([
                'property_id' => $request->property_id,
                'status' => $request->status
            ]);
        } catch (Exception $err) {
            dd($err);
        }
        Toastr::success('booking updated successfuly', 'success');
        return redirect()->route('backend.booking.index');
    }

    public function delete($id)
    {
        $booking = Booking::find($id)->delete();
        Toastr::error('booking deleted successfuly', 'success');
        return redirect()->route('backend.booking.index');
    }
    public function view($id){

        $booking = Booking::find($id);
        return view('backend.pages.booking.view',compact('booking'));
    }
}
