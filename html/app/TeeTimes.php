<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeeTimes extends Model
{
    //
    protected $fillable = [
        'idBooking', 'Date', 'Time','Details'
    ];


    public function booking(){
        return $this->belongsTo('App\Booking');

    }


}
