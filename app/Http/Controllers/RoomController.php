<?php

namespace App\Http\Controllers;

use App\Room;
use App\Hotel;
use Illuminate\Http\Request;

use DB;
use App\Quotation;

class RoomController extends Controller
{
    public function index()
    {
        return view('airways.hotelreservation1');
    }

    public function read(){

        // $hotelresult = new Room();
        // $data=$hotelresult->read();

        $data = Room::all();
        
        // $hotelresult1 = new Hotel();


        $hotel = Hotel::all();
        
        // $hotel=$hotelresult1->readhoteldetails();
      

        return view('airways.hoteldetails',compact('data','hotel'));
    }

    
    public function readDetails($id){
        $hotel = Hotel::find($id);
        $rooms = Room::where('hotel_id',$id)->get();
        return view('airways.hoteldetails', compact('hotel','rooms'));
      //  var_dump($rooms);
        // var_dump($rooms);
    }


}
