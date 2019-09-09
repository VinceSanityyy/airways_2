<?php

namespace App;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    // protected $connection="dbhotel";

    // public function read(){
    //     return DB::connection('mysql2')->select("Select * from hotels");


    // }
    // public function readhoteldetails(){
    //     return DB::connection('mysql2')->select("Select * from hotels where id=1");


    // }
    public function rooms(){
        return $this->hasMany('App\Room');
    }
}
