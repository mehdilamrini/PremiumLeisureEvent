<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>
        Premium Leisure & Events | Dashboard
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    @yield('style')

<style>

    .line {

        display: block;
        margin-top: 0.5em;
        margin-bottom: 0.5em;
        margin-left: auto;
        margin-right: auto;
        border-style: inset;
        border-width: 2px;

    }

</style>

    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <!--begin::Page Vendors -->
    <link href="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors -->
    <link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="{{asset('assets/demo/default/media/img/logo/favicon.ico')}}" />
</head>



<!-- BEGIN::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <!-- BEGIN: Header -->
  
    <!-- END: Header -->


    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <div class="m-content">
                <div class="m-portlet">
                    <div class="m-portlet__body m-portlet__body--no-padding">
                        <div class="m-invoice-1">
                            <div class="m-invoice__wrapper">
                                <div class="m-invoice__head" >
                                    <div class="m-invoice__container m-invoice__container--centered">
                                        <div class="m-invoice__logo">

                                            <a href="#" >
                                                <img  height="100" src="{{asset('uploads/logo_default_dark.png')}}">

                                            </a>

                                            <h3 class="m--font-brand">Vouchers Details</h3>


                                            {{--<img   height="100" src="{{asset('uploads/logo-left.png')}}" align="right">--}}
                                            {{--<img   height="100" src="{{asset('uploads/Untitled2.png')}}" align="right"></br></br></br></br></br>--}}
                                            {{--<img   height="40" src="{{asset('uploads/Untitled3.png')}}" align="right">--}}


                                        </div>
                                        <span class="m-invoice__desc" >

												 <span align="center">

													 Premium Leisure & Events
                                                     The leading Golf Holidays & Events Specialists in Morocco

												 </span>
												 <span style="color:#273c75;" align="center">
Marrakech Office: 656 ; Massira 1 – Appartement No 5 - MARRAKECH – Morocco
AGADIR Office: Av. 29 Fevrier, Résidence Nesr - Talborjt, AGADIR
Tel: +212 6 61287987 - Tel: +44 7904848163    -  Email: info@moroccogolfbreaks.com   web: www.moroccogolfbreaks.com
												 </span>

                                            <span class="m--font-info" align="center" >

                                                Winner of the WORLD GOLF AWARDS 2014 & 2015 – Morocco’s Best Inbound Golf Tour Operator
                            Winner of the WORLD TRAVEL AWARDS 2015 – Morocco’s Leading DMC

                                            </span>






											 </span>
                                        <div class="m-invoice__items">


                                            <img  height="100" src="{{asset('uploads/vouchers'.'/'.$voucher->Logo_file)}}" height="100" style="display: block;
    margin: 0 auto;">
                                        </div>
                                    </div>
                                </div>
                                <div class="m-invoice__body m-invoice__body--centered" >
                                    <h3>Dear {{$voucher->Name}}</h3></br>
                                    <h5>Welcome to <span class="m--font-brand"> {{$voucher->City}}</span></h5></br>
                                    <h6 >We are  <span class="m--font-brand">PREMIUM LEISURE & EVENTS </span>, your local contact for <span class="m--font-brand"> {{$voucher->Customer}}</span> in  <span class="m--font-brand">{{$voucher->Location}}</span></h6></br>
                                    <h6 >  Our colleague <span class="m--font-brand">{{$voucher->Colleague}}</span> will be assisting you during your stay in <span class="m--font-brand">{{$voucher->City}}</span> 24h/7 contact number is <span class="m--font-brand">{{$voucher->Number_pers}}</span> or Office = <span class="m--font-brand">{{$voucher->Number_office}}</span></h6></br>

                                     <h6 >  Our colleague {{$voucher->Colleague}} will meet you as soon as you pick up your luggage and come through to the arrivals hall.</h6></br>

                                    <h6 >When you pass the sliding doors, ZAKARIA will be holding a sign with your name on it & the logo of FAIRWAY GOLFREISEN.</h6></br>

                                    <h6 >Please remember that the arrivals hall may be busy when you come through, so if you have difficulty finding us, please call on {{$voucher->Number_pers}}</h6></br>


                                </div>

                                @if($book->free_golf_shuttles == "1")
                                    <div class="m-invoice__body m-invoice__body--centered">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Free Golf Shuttles
                                                    </th>


                                                </tr>
                                                </thead>
                                                <tbody>


                                                <tr>
                                                    <td class="m--font-success">Free golf shuttles operated by golf clubs at set time – every hour – please check at the reception of the hotel the Timetable of the Golf shuttles </td>
                                                </tr>



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                @endif

                                {{--<div class="m-invoice__body m-invoice__body--centered">--}}
                                    {{--<div class="table-responsive">--}}
                                        {{--<table class="table">--}}
                                            {{--<thead>--}}
                                            {{--<tr>--}}
                                                {{--<th>--}}
                                                    {{--Arrival Airport Transfer--}}
                                                {{--</th>--}}


                                            {{--</tr>--}}
                                            {{--</thead>--}}
                                            {{--<tbody>--}}


                                            {{--<tr>--}}
                                                {{--<td class="m--font-brand">{{$airport->Arrival_Details}}</td>--}}
                                            {{--</tr>--}}



                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</div>--}}
                                {{--</div>--}}


                                <div class="m-invoice__body m-invoice__body--centered">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Your return airport transfer pick-up time is as follows
                                                </th>


                                            </tr>
                                            </thead>
                                            <tbody>


                                            <tr>
                                                <td class="m--font-brand">{{$airport->Return_Details}}</td>
                                            </tr>



                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="m-invoice__body m-invoice__body--centered">

                                </br><h5 align="center">On Behalf of {{$voucher->Customer}}, I wish you a pleasant stay in {{$voucher->City}}! </h5>

                                <h5 align="center">Kind regards</h5>

                                <h5 align="center">  Mohamed</h5>
                                </div>



                                <?php $var=0; ?>
                                <div class="m-invoice__body m-invoice__body--centered">

                                    <hr class="line" >

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="m--font-brand" >                                <?php $var++; ?>

                                                    Hotel Voucher - {{$book->conf_invoice}}-{{$var}}
                                                </th>

                                                <th class="m--font-brand">
                                                   Guests
                                                </th>


                                                <th></th>
                                                <th></th>


                                            </tr>
                                            </thead>
                                            <tbody>


                                            <tr >
                                                <td class="m--font-success">  Services booked & Confirmed: </td>

                                                <td class="m--font-brand">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$voucher->Name}}   ({{count($guests)}} Golfers)</td>

                                            </tr>

                                            <tr>
                                            <td colspan="2" class="m--font-brand"><span style="color:#2f3640;">Accomodations :</span> {{$accs->Details}}</td>

                                            </tr>

                                            <tr>
                                                <td>For & on Behalf of PREMIUM LEISURE & EVENTS
                                                    And {{$voucher->Customer}} {{$voucher->Location}}</td>

                                                <td class="m--font-success">  <span style="color: #0f0f0f">Date : </span>{{$book->date}}</td>

                                            </tr>






                                            </tbody>
                                        </table>
                                    </div>
                                </div>



                                @foreach($teetimes as $t)
                                <div class="m-invoice__body m-invoice__body--centered">
                                    <hr class="line" >

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="m--font-brand" >                                <?php $var++; ?>

                                                    Golf Voucher - {{$book->conf_invoice}}-{{$var}}
                                                </th>

                                                <th class="m--font-brand">
                                                    Guests
                                                </th>


                                                <th></th>
                                                <th></th>


                                            </tr>
                                            </thead>
                                            <tbody>


                                            <tr >
                                                <td class="m--font-success">  <span style="color: #0f0f0f">To : </span>{{$t->Details}} </td>

                                                <td class="m--font-brand">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$voucher->Name}}   ({{count($guests)}} Golfers)</td>

                                            </tr>

                                            <tr>
                                                <td colspan="2" class="m--font-brand"><span style="color:#2f3640;">Golf Tee Time :</span> {{$t->Date}}- {{$t->Details}} at {{$t->Time}}

                                                    @if($book->caddies_buggies == "0")
                                                        <span style="font-size: 10px;color: #E02F4D">*Caddies or Buggies not included – to be paid directly to the Golf Club</span>
                                                    @else
                                                        <span class="m--font-success">Caddies or Buggies  included </span>
                                                    @endif

                                                </td>

                                            </tr>

                                            <tr>
                                                <td>For & on Behalf of PREMIUM LEISURE & EVENTS
                                                    And {{$voucher->Customer}} {{$voucher->Location}}</td>

                                                <td class="m--font-success"><span style="color: #0f0f0f">Date : </span> {{$book->date}}</td>

                                            </tr>






                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                @endforeach



                                <div class="m-invoice__body m-invoice__body--centered">

                                    <hr class="line" >
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="m--font-brand" >                                <?php $var++; ?>

                                                    Transfer Voucher - {{$book->conf_invoice}}-{{$var}}
                                                </th>

                                                <th class="m--font-brand">
                                                    Guests
                                                </th>


                                                <th></th>
                                                <th></th>


                                            </tr>
                                            </thead>
                                            <tbody>


                                            <tr >
                                                <td class="m--font-success"> <span style="color: #0f0f0f">To : </span> PREMIUM LEISURE & EVENTS {{$voucher->City}}

                                                    <span style="color: #0f0f0f">Tel : </span> {{$voucher->Number_pers}} or {{$voucher->Number_office}}

                                                </td>

                                                <td class="m--font-brand">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$voucher->Name}}   ({{count($guests)}} Golfers)</td>

                                            </tr>

                                            <tr>
                                                <td colspan="2" class="m--font-brand"><span style="color:#2f3640;">Arrival Airport Transfer :</span>{{$airport->Arrival_Details}}</td>

                                            </tr>


                                            <tr>
                                                <td colspan="2" class="m--font-brand"><span style="color:#2f3640;">Return Airport Transfer :</span>{{$airport->Return_Details}}</td>

                                            </tr>


                                            <tr>
                                                <td>For & on Behalf of PREMIUM LEISURE & EVENTS
                                                    And {{$voucher->Customer}} {{$voucher->Location}}</td>

                                                <td class="m--font-success"><span style="color: #0f0f0f">Date : </span> {{$book->date}}</td>

                                            </tr>






                                            </tbody>
                                        </table>

                                        <hr class="line" >
                                    </div>
                                </div>






                                <h4 align="center">Thank you for booking with PREMIUM LEISURE & EVENTS</h4>
                                <img  src="{{asset('uploads/logo-footer.png')}}" height="100" style="display: block;
    margin: 0 auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Body -->
</body>
<!-- end::Body -->




</div>
<!-- end:: Page -->

<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->            <!-- begin::Quick Nav -->

<!-- begin::Quick Nav -->
<!--begin::Base Scripts -->
<script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
<!--end::Base Scripts -->
<!--begin::Page Vendors -->
<script src="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
<!--end::Page Vendors -->
<!--begin::Page Snippets -->
<script src="{{asset('assets/app/js/dashboard.js')}}" type="text/javascript"></script>
@yield('script')
<!--end::Page Snippets -->
</html>
