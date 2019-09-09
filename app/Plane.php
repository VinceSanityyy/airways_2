<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    protected $fillable = [
        'plane_description', 'status', 'total_seats',
    ];
}
