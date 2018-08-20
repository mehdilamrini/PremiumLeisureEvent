<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivateGolfTrans extends Model
{
    //


    protected $fillable = [
        'idBooking','Date','GolfClub','DepartureTime'
    ];


    public function booking(){
        return $this->belongsTo('App\Booking');

    }
}
