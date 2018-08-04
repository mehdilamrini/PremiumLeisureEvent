<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'name', 'email', 'password','FirstName','LastName','Phone','About','Hobbies','role','Picture','Company','TimeZone','Address','Lat','Lang','IdTypeAgent','IdAdmin','AdminLogo','ApkLogo','Code',
    ];

    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function bookings(){
        return $this->hasMany('App\Booking' , 'idUser');
    }




    
    protected static function boot() {
        parent::boot();

        static::deleting(function($user) { // before delete() method call this
             $user->bookings()->delete();

             // do the rest of the cleanup...
        });
    }

}
