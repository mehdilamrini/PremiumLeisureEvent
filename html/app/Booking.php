<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{


    protected $fillable = [
        'idUser', 'date', 'to', 'amount','amount_details','tel','email','ustldnr','conf_invoice','free_golf_shuttles','caddies_buggies'
    ];

    //


    public function guests(){
        return $this->hasMany('App\GuestsName' , 'idBooking');
    }

    public function accomodations(){
        return $this->hasMany('App\Accomodations' , 'idBooking');
    }

    public function teetimes(){
        return $this->hasMany('App\TeeTimes' , 'idBooking');
    }

    public function airports(){
        return $this->hasMany('App\Airport' , 'idBooking');
    }

    public function vouchers(){
        return $this->hasMany('App\Voucher' , 'idBooking');
    }

    public function golftrans(){
        return $this->hasMany('App\PrivateGolfTrans' , 'idBooking');
    }



    protected static function boot() {
        parent::boot();

        static::deleting(function($booking) { // before delete() method call this
            //
            $booking->guests()->delete();
            $booking->accomodations()->delete();
            $booking->teetimes()->delete();
            $booking->airports()->delete();
            $booking->vouchers()->delete();
            // do the rest of the cleanup...
        });
    }




}
