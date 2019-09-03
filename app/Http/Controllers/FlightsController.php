<?php

namespace App\Http\Controllers;

use App\Flights;
use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function searchFlights(Request $request){
        $flights =  Flights::where('flight_country_from', 'like', '%' . $request->flightFrom . '%')
            ->where('flight_country_from', 'like', '%' . $request->flightFrom . '%')
            ->where('flight_country_to', 'like', '%' . $request->flightTo . '%')
            ->whereDate('flight_schedule', 'like', '%' . $request->flightDepart . '%')
            ->get();


            return view('airways.flightresult', compact('flights'));
            // return View::make('airways.flightresult')->with('flights', $flights);
    }

    public function confirmDetails (){
        return view('airways.confirmdetails');
    }
}
