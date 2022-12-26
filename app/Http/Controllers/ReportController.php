<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request){
        if($request->from_date && $request->to_date){
            $request->validate([
                'from_date'    => 'required|date',
                'to_date'      => 'required|date|after:from_date',
        ]);
     
     
     
        $from=$request->from_date;
        $to=$request->to_date;
            //       $status=$request->status;           
        $bookings=Booking::with('property','user')->whereBetween('created_at', [$from, $to])->get();
                    
        return view('backend.pages.report.index',compact('bookings'));
        }else{
            $bookings=Booking::all();
                    
            return view('backend.pages.report.index',compact('bookings'));
        }
    }
}
