<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Guest;
class GuestController extends Controller
{
   public function getGuests(){
        return Guest::all();
   }
}
