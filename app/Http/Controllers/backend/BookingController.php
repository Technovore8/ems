<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create(){
        return view('backend.pages.booking.create');
    }
    public function index(){
        return view('backend.pages.booking.index');
    }
    public function edit(){
        return view('backend.pages.booking.edit');
    }
}
