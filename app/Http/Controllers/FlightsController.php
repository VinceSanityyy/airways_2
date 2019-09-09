<?php

namespace App\Http\Controllers;

use App\Flights;
use Illuminate\Http\Request;
use App\TempFlight;
use App\TempPayment;
use View;
class FlightsController extends Controller
{
    public function searchFlights(Request $request){
        $flights =  Flights::where('flight_country_from', 'like', '%' . $request->flightFrom . '%')
            ->where('flight_country_from', 'like', '%' . $request->flightFrom . '%')
            ->where('flight_country_to', 'like', '%' . $request->flightTo . '%')
            ->whereDate('flight_schedule', 'like', '%' . $request->flightDepart . '%')
            ->paginate(5);

            return view('airways.flightresult', compact('flights'));

    }

    public function confirmDetails ($flight_id){

        $flight = Flights::find($flight_id);
        return view('airways.confirmdetails', compact('flight'));

    }

    public function index()
    {
        $posts=Flight::where('paymentID','1')->get();
        // $posts=Flight::where('paymentID','1')->get();
        $flight=Flight::where('PaymentID','1')->take(1)->get();

      //$posts= DB::select('Select * from posts');
      return View::make('airways.confirmdetails')
                ->with(compact('posts'))
                ->with(compact('flight'));
    }

    public function getFlights(){
        $flights = Flights::all();

        return response()->json($flights);
    }

    public function addFlight(Request $request){

        $this->validate($request, [
            'flight_schedule' => 'required',
            'flight_arrival' => 'required',
            'alias' => 'required',
            'flight_country_from' => 'required',
            'flight_country_to' => 'required',
            'plane_id' => 'required',
            'price' => 'required',
            'seats_available' => 'required',
            'status' => 'required',


           ]);

        return Flights::create([
            'flight_schedule' => $request['flight_schedule'],
            'flight_arrival' => $request['flight_arrival'],
            'alias' => $request['alias'],
            'flight_country_from' => $request['flight_country_from'],
            'flight_country_to' => $request['flight_country_to'],
            'plane_id' => $request['plane_id'],
            'price' => $request['price'],
            'seats_available' => $request['seats_available'],
            'status' => $request['status'],

        ]);
    }

}
