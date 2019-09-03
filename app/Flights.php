<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    public $timestamps = false;
    public $fillable = [
        'flightFrom', 'flightTo', 'flightDepart',  'flight_id', 'alias','flight_schedule','flight_arrival'
        ,'terminal','flight_country_from','flight_country_to','plane_id','price','status'
    ];
}

