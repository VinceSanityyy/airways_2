<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{

    protected $primaryKey = 'flight_id';
    public $timestamps = false;
    public $fillable = [
       'flight_id','flight_schedule','flight_arrival', 'seats_available'
        ,'terminal','flight_country_from','flight_country_to','plane_id','price','status' , 'alias',
    ];
}

