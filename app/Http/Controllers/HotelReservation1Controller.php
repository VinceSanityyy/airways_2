<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelReservation1Controller extends Controller
{
    public function index()
    {
        return view('airways.hotelreservation1');
    }

    public function searchFlights(Request $request){
  

            return view('airways.flightresult', compact('flights'));
            // return View::make('airways.flightresult')->with('flights', $flights);
    }

    

    public function read(Request $request){

        $hotelresult = new Hotel();
        // $data=$hotelresult->read();
        // $data = Hotel::paginate(1);
        $data =  Hotel::where('hotel_location', 'like', '%' . $request->hotel_name . '%')
        ->paginate(1);
        // var_dump($data); 
        // dd($data);

        

        return view('airways.hotelreservation1',compact('data'));
    }
}
