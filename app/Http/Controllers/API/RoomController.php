<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Room;
class RoomController extends Controller
{
  public function getRooms(){
    return Room::all();
    }
}
