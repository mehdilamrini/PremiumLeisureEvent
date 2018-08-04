<?php

namespace App\Http\Controllers;

use App\Booking;
use App\UserMobile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Call;
use App\DispatcherAgent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if(Auth::User()->role == "Admin")
        {

            $id=Auth::id();


            $user= User::where('id',$id)->first();
            $bookings= $user->bookings()->orderBy('created_at', 'desc')->get();
            //return $bookings;
            return view('admin.dashboard',compact('bookings'));

        }



        
    }
}
