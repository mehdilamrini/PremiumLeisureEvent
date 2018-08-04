<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestsName extends Model
{
    //

    protected $fillable = [
        'idBooking', 'FirstName', 'LastName', 'Details',
    ];



    public function booking(){
        return $this->belongsTo('App\Booking');

    }

}
