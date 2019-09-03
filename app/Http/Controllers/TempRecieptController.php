<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TempFlight;
use App\TempPayment;
use View;
class TempRecieptControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts=TempFlight::where('paymentID','1')->orderBy('FlightID','desc')->get();
        // $posts=Flight::where('paymentID','1')->get();
        $flight=TempFlight::where('PaymentID','1')->take(1)->get();

      return View::make('payment.reciept')
                ->with(compact('posts'))
                ->with(compact('flight'));
    }

}
