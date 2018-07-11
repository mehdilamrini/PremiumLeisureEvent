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

                                            <h3 class="m--font-brand">Booking Confirmation</h3>


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
                                            <div class="m-invoice__item">
													 <span class="m-invoice__subtitle m--font-focus" >
														 DATE
													 </span>
                                                <span class="m-invoice__text " style="color: grey">
														 {{$book->date}}
													 </span>
                                            </div>
                                            <div class="m-invoice__item">
													 <span class="m-invoice__subtitle m--font-focus" >
														 INVOICE NO.
													 </span>
                                                <span class="m-invoice__text" style="color: grey">
														 {{$book->conf_invoice}}
													 </span>
                                            </div>

                                            <div class="m-invoice__item">
													 <span class="m-invoice__subtitle m--font-focus" >
														 Ustlndr.
													 </span>
                                                <span class="m-invoice__text" style="color: grey">
														 {{$book->ustldnr}}
													 </span>
                                            </div>
                                            <div class="m-invoice__item">
													 <span class="m-invoice__subtitle m--font-focus" >
														 INVOICE TO.
													 </span>
                                                <span class="m-invoice__text" style="color: grey">
														 {{$book->to}}
                                                    <br>
													 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-invoice__body m-invoice__body--centered">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Guests Names
                                                </th>
                                                <th>
                                                    Details
                                                </th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($guests as $g)
                                                <tr>
                                                    <td>
                                                        {{$g->FirstName}} {{$g->LastName}}
                                                    </td>
                                                    <td class="m--font-brand">
                                                        {{$g->Details}}
                                                    </td>

                                                </tr>
                                            @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="m-invoice__body m-invoice__body--centered">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Accomodations
                                                </th>


                                            </tr>
                                            </thead>
                                            <tbody>


                                            <tr>
                                                <td class="m--font-brand">{{$accs->Details}}</td>
                                            </tr>



                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="m-invoice__body m-invoice__body--centered">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Tee Times
                                                </th>
                                                <th>
                                                    Details
                                                </th>
                                                <th>
                                                    Time
                                                </th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($teetimes as $t)
                                                <tr>
                                                    <td>
                                                        {{$t->Date}}
                                                    </td>
                                                    <td>
                                                        {{$t->Details}}
                                                    </td>

                                                    <td style="color: darkslategrey">
                                                        Tee Time at {{$t->Time}}
                                                    </td>

                                                </tr>
                                            @endforeach


                                            </tbody>
                                        </table>
                                        @if($book->caddies_buggies == "0")
                                            <span class="m--font-danger">*Caddies or Buggies not included – to be paid directly to the Golf Club</span>
                                        @else
                                            <span class="m--font-success">Caddies or Buggies  included </span>
                                        @endif

                                    </div>
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

                                <div class="m-invoice__body m-invoice__body--centered">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Arrival Airport Transfer
                                                </th>


                                            </tr>
                                            </thead>
                                            <tbody>


                                            <tr>
                                                <td class="m--font-brand">{{$airport->Arrival_Details}}</td>
                                            </tr>



                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="m-invoice__body m-invoice__body--centered">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Return Airport Transfer
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



                                <div class="m-invoice__footer">
                                    <div class="m-invoice__container m-invoice__container--centered">
                                        <div class="m-invoice__content">
												 <span>
														Amount Details
												 </span>


                                            <span>
														 {{$book->amount_details}}
													 </span>
                                            </span>

                                        </div>
                                        <div class="m-invoice__content">
												 <span>
													 TOTAL AMOUNT
												 </span>
                                            <span class="m-invoice__price" style="color: #3ec19e">
													 {{$book->amount}} €
												 </span>
                                            <span>
													 Taxes Included
												 </span>
                                        </div>


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
