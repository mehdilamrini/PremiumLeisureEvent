<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accomodations extends Model
{
    //
    protected $fillable = [
        'idBooking', 'Details'
    ];



    public function booking(){
        return $this->belongsTo('App\Booking');

    }

}
