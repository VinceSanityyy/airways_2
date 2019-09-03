<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservation;
use DB;
use App\Quotation;
class ReservationController extends Controller
{

    public function showReservation(){
        return Reservation::all();
     }
}
