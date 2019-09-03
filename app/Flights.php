<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    protected $fillable = [
        'flightFrom', 'flightTo', 'flightDepart',
    ];
}
