@extends('layouts.adminTemplate')

@section('content')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script src="{{asset('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>


    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Booking Confirmations  {{$book->conf_invoice}}
                    </h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>


                    </ul>
                </div>

            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <div class="m-portlet">
                <div class="m-portlet__body m-portlet__body--no-padding">
                    <div class="m-invoice-1">
                        <div class="m-invoice__wrapper">
                            <div class="m-invoice__head" >
                                <div class="m-invoice__container m-invoice__container--centered">
                                    <div class="m-invoice__logo">

                                            <h1 class="m--font-brand">
                                                Booking Confirmation
                                            </h1>

                                        <a href="#">
                                            <img  height="80" src="{{asset('uploads/logo_default_dark.png')}}">
                                        </a>
                                    </div>
                                    <span class="m-invoice__desc">
													<span>
														Premium Leisure & Events
                                                        The leading Golf Holidays & Events Specialists in Morocco

													</span>
													<span style="color:#273c75;">
Marrakech Office: 656 ; Massira 1 – Appartement No 5 - MARRAKECH – Morocco
AGADIR Office: Av. 29 Fevrier, Résidence Nesr - Talborjt, AGADIR
Tel: +212 6 61287987 - Tel: +44 7904848163    -  Email: info@moroccogolfbreaks.com   web: www.moroccogolfbreaks.com
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
                                    <span class="m--font-danger">Caddies or Buggies not included – to be paid directly to the Golf Club</span>
                                        @else
                                        <span>Caddies or Buggies  included </span>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
    <!-- end:: Body -->



    <script type="text/javascript">
        function deleteuser(id){

            swal({
                title: "Are you sure?",
                text: "Do you want to delete this booking confirmation??!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: '{{ url('/delete_conf') }}'+ '/' + id,
                            type: 'GET',
                            dat:{id:id},
                            success:function(msg) {
                                var table = $('#html_table').DataTable();
                                table.row( this ).delete();
                                swal("Good","Booking Confirmation was successfully deleted","success");




                                //  $("."+msg).remove();

                            }
                            ,
                            error:function(){
                                swal("Ops!", "User cannot be removed !", "error");

                            }
                        });
                    }

                    else
                        return false;});
        }

    </script>








@stop

