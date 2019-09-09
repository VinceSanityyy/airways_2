<?php

namespace App;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    // protected $connection="dbhotel";
    // public function read(){
    //     return DB::connection('mysql2')->select("Select * from rooms");


    // }
    public function aminities(){
        return $this->hasMany('App\Aminities');
    }
}
