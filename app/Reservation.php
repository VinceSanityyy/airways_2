<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function rooms(){
        return $this->hasOne('App\Room');
    }

    public function guests(){
        return $this->hasOne('App\Guest');
    }
}
