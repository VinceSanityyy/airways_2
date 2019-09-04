<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempFlight extends Model
{
    protected $table= 'temp_flights';
    public $primaryKey ='FlightID';
    public $timestamps=false;
}
