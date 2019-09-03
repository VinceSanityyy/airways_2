<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempPayment extends Model
{
    protected $table= 'temp_payments';
    public $primaryKey ='FlightID';
    public $timestamps=true;
}
