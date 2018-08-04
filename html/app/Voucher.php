<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{

    protected $fillable = [
        'idBooking', 'Customer', 'Logo_file','Name','City','Location','Colleague','Number_pers','Number_office'
    ];


    public function booking(){
        return $this->belongsTo('App\Booking');

    }
    //
}
