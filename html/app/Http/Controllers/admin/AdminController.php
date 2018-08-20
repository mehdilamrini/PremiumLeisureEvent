<?php

namespace App\Http\Controllers\admin;

use App\Accomodations;
use App\Airport;
use App\Booking;
use App\GuestsName;
use App\Http\Controllers\Controller;
use App\PrivateGolfTrans;
use App\TeeTimes;

use App\Voucher;
use Illuminate\Support\Collection;
//use Illuminate\Database\Eloquent\Collection;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;



use PDF;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




    public function lister_confirmations(){

            $id=Auth::id();
                $bookings = Booking::where('idUser',$id)->get();
             return view('admin.list-confirmations',compact('bookings'));

    }


    public  function  create_confirmation(){

        return view('admin.create-confirmations');
    }




public  function  validate_confirmation(Request $request){


            $booking = new Booking();

            $booking->idUser = Auth::id();

            $booking->date = $request->date;
            $booking->to = $request->to;
            $booking->tel = $request->tel;
            $booking->email = $request->email;
            $booking->ustldnr = $request->ust;
            $booking->canceled = "Confirmed";
            //$booking->conf_invoice = $request->inv;

            if ($request->shuttle_included != null )
            $booking->free_golf_shuttles = $request->shuttle_included;
            else
                $booking->free_golf_shuttles = '0';



    if ($request->cuddies_included != null )
        $booking->caddies_buggies = $request->cuddies_included;
    else
        $booking->caddies_buggies = '0';



            //$booking->free_golf_shuttles = "1";
            //$booking->caddies_buggies = "1";


            $booking->amount = $request->amount;
            $booking->amount_details = $request->amount_details;
            $booking->save();


             $input=array();


            $input['fname']= $request->fname;
            $input['lname']= $request->lname;
            $input['guest_details']= $request->guest_details;


        for ($i=0; $i < count($input['fname']); ++$i){
        $guests =  new GuestsName();
        $guests->idBooking = $booking->id;
           // $guests->idBooking = 1;
        $guests->FirstName = $input['fname'][$i];
        $guests->LastName = $input['lname'][$i];
        $guests->Details = $input['guest_details'][$i];
        $guests->save();
    }

            $acc= new Accomodations();
            $acc->idBooking = $booking->id;
            $acc->Details = $request->acc;
            $acc->save();

            $airport = new Airport();
            $airport->idBooking = $booking->id;
            $airport->Arrival_Details = $request->arrival;
            $airport->Return_Details = $request->departure;
            $airport->save();


    $inputt=array();
    $inputt['teedate'] = $request->teedate;
    $inputt['teedetails']=$request->teedetails;
    $inputt['teehour']=$request->teehour;

    for ($i=0; $i < count($inputt['teedate']); ++$i){

        $teetime =  new TeeTimes();
        $teetime->idBooking = $booking->id;
        $teetime->Date = $inputt['teedate'][$i];
        $teetime->Details = $inputt['teedetails'][$i];
        $teetime->Time = $inputt['teehour'][$i];
        $teetime->save();
    }




     if ( $request->shuttle_included != '1' ){


    $inputtt=array();
    $inputtt['privateDate']=$request->privateDate;
    $inputtt['privateClub']=$request->privateClub;
    $inputtt['privateHour']=$request->privateHour;

    for ($i=0; $i < count($inputtt['privateDate']); ++$i){
        $privategolf =  new PrivateGolfTrans();
        $privategolf->idBooking = $booking->id;
        $privategolf->Date = $inputtt['privateDate'][$i];
        $privategolf->GolfClub = $inputtt['privateClub'][$i];
        $privategolf->DepartureTime = $inputtt['privateHour'][$i];
        $privategolf->save();
    }

    return  redirect()->route('list-all-confirmations');
}
}

public  function delete_booking($id){

        $booking = Booking::find($id);
        $booking->canceled = 'Canceled';
        $booking->save();
        //$booking->delete();

        return $booking;

            }


        public function generate_pdf_voucher($id){

            set_time_limit(60 * 5);
            $book=  Booking::where('id',$id)->first();
            $guests=$book->guests()->get();
            $accs=$book->accomodations()->first();
            $teetimes=$book->teetimes()->get();
            $airport= $book->airports()->first();
            $voucher= Voucher::where('idBooking',$id)->first();


            $pdf = PDF::loadView('admin.voucher-details',compact('book','guests','accs','teetimes','airport','voucher'))
                ->setPaper('a4');
            // return dd($pdf);

            $filename= 'voucher_'.$book->conf_invoice.".pdf";

            return $pdf->download($filename);


        }
            public  function generate_pdf($id){

                set_time_limit(60 * 5);
                $book=  Booking::where('id',$id)->first();
                $guests=$book->guests()->get();
                $accs=$book->accomodations()->first();
                $teetimes=$book->teetimes()->get();
                $airport= $book->airports()->first();


                $pdf = PDF::loadView('admin.conf-details', compact('book','guests','accs','teetimes','airport'))
                    ->setPaper('a4');
                   // return dd($pdf);

                $filename= $book->conf_invoice.".pdf";

                 return $pdf->download($filename);


//                $pdf = App::make('snappy.pdf.wrapper');
//                $pdf->loadHTML(view('admin.conf-details', compact('book','guests','accs','teetimes','airport')));
//                return $pdf->inline();


            }

            public function  conf_details($id){

                $book=  Booking::where('id',$id)->first();
                $guests=$book->guests()->get();
                $accs=$book->accomodations()->first();
                $teetimes=$book->teetimes()->get();
                $airport= $book->airports()->first();
                $golftrans= $book->golftrans()->get();

        return view('admin.conf-details',compact('book','guests','accs','teetimes','airport','golftrans'));
            }

    public function  clone_conf($id){

        $book=  Booking::where('id',$id)->first();
        $guests=$book->guests()->get();
        $accs=$book->accomodations()->first();
        $teetimes=$book->teetimes()->get();
        $airport= $book->airports()->first();
        $golftrans= $book->golftrans()->get();

        return view('admin.create-confirmations-clone',compact('book','guests','accs','teetimes','airport','golftrans'));


            }



public function create_voucher($id){

                $book= Booking::where('id',$id)->first();
                $customers= $book->guests()->get();

                $voucher= Voucher::where('idBooking',$id)->first();

                if ($voucher == null ){
                return view('admin.create-voucher',compact('book','customers'));
                }
                else{
                   // echo 'notnull';

                    //$voucher= Voucher::where('idBooking',$id)->first();
                    $guests=$book->guests()->get();
                    $accs=$book->accomodations()->first();
                    $teetimes=$book->teetimes()->get();
                    $airport= $book->airports()->first();


                    return view('admin.voucher-details',compact('book','guests','accs','teetimes','airport','voucher'));


                }



            }
            public function  save_voucher(Request $request){

                if($request->hasFile('logo')) {

                    $this->validate($request, [


                        'File.*' => 'mimes:jpg,jpeg,png'

                    ]);


                }

                $files = Input::file('logo');


                if ( $files != null){
                    foreach ($files as $loadfile) {
                        // return back();

                        $destinationPath = public_path('uploads/vouchers');
                        $extension = $loadfile->getClientOriginalExtension();
                        $fileName = uniqid() . '.' . $extension;
                        $loadfile->move($destinationPath, $fileName);

                        $voucher = new Voucher();
                        $voucher->idBooking = $request->id;
                        $voucher->Logo_file = $fileName;
                        $voucher->save();

                    }
                }

                 Voucher::where('idBooking',$request->id)
                    ->update(['Name' => $request->name,
                        'Customer' => $request->customer,
                   'Location' => $request->location,
                   'City' =>  $request->city,
                   'Colleague' => $request->coll,
                   'Number_pers' => $request->pers,
                   'Number_office' => $request->off,
                ]);

                $voucher= Voucher::where('idBooking',$request->id)->first();
                $book= Booking::where('id',$request->id)->first();
                $guests=$book->guests()->get();
                $accs=$book->accomodations()->first();
                $teetimes=$book->teetimes()->get();
                $airport= $book->airports()->first();


                return view('admin.voucher-details',compact('book','guests','accs','teetimes','airport','voucher'));
            }






}
