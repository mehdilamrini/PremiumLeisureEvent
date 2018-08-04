<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
     protected $fillable = [
        'idBooking', 'Arrival_Details','Return_Details',
];



    public function booking(){
        return $this->belongsTo('App\Booking');

    }

}
