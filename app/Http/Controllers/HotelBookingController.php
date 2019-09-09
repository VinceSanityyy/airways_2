<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelBookingController extends Controller
{
    public function index()
    {
        return view('airways.hotelbooking');
    }
}
