@extends('layouts.adminTemplate')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{asset('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>
<style>

    #size {


        font-size: 50px;

    }

</style>
@section('content')

        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">
                            Dashboard
                        </h3>
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">


                <!--Begin::Section-->
                <div class="row">
                    <div class="col-xl-12">

                        <!--begin::Portlet-->

                        <!--end::Portlet-->


                    </div>
</div>{{--<div class="row">
                    <div class="col-xl-12">

                        <!--begin::Portlet-->
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                                <span class="m-portlet__head-icon m--hide">
                                                    <i class="la la-gear"></i>
                                                </span>
                                        <h3 class="m-portlet__head-text">
                                            Active Call
                                        </h3>
                                    </div>
                                </div>
                            </div>


                            <div class="m-portlet__body" >
                    <table class="m-datatable" id="html_table" width="100%">
                        <thead>
                        <tr>
                            <th title="Field #1">
                                User
                            </th>
                            <th title="Field #2">
                                Agent
                            </th>
                            <th title="Field #3">
                                Dispatcher
                            </th>
                            <th title="Field #3">
                                Type Panic
                            </th>
                            <th title="Field #3">
                                Start TimeZone
                            </th>
                            <th title="Field #3">
                                State
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr id="">
                                <td>Test</td>

                            </tr>
                        </tbody>
                    </table>

                        </div>
                    </div>


                        </div>
                        <!--end::Portlet-->


                    </div>--}}
                <!--End::Section-->
                <!--Begin::Section-->

                    <!--begin:: Widgets/Stats-->
                    <div class="m-portlet ">
                        <div class="m-portlet__body  m-portlet__body--no-padding">
                            <div class="row m-row--no-padding m-row--col-separator-xl">
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <!--begin::Total Profit-->
                                    <div class="m-widget24">
                                        <div class="m-widget24__item">
                                            <h4 class="m-widget24__title">
                                                Total Confirmations
                                            </h4>
                                            <br>
                                            <span class="m-widget24__desc">
                                                </span>
                                            <span class="m-widget24__stats m--font-brand" id="size">

                                                {{count($bookings)}}
                                                </span>
                                            <div class="m--space-10"></div>

                                            <span class="m-widget24__change">

                                                </span>

                                        </div>
                                    </div>
                                    <!--end::Total Profit-->
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <!--begin::New Feedbacks-->
                                    <div class="m-widget24">
                                        <div class="m-widget24__item">
                                            <h4 class="m-widget24__title">
                                                Total Vouchers Generated
                                            </h4>
                                            <br>
                                        <span class="m-widget24__desc">

                                                </span>
                                            <span class="m-widget24__stats m--font-info" id="size">
                                                        <?php $var=0;?>
                                                 @foreach($bookings as $booking)
                                                    <?php
                                                        $var+= count($booking->vouchers()->first())  ?>

                                                    @endforeach
                                                            {{$var}}
                                                </span>
                                            <div class="m--space-10"></div>

                                            <span class="m-widget24__change">

                                                </span>

                                        </div>
                                    </div>
                                    <!--end::New Feedbacks-->
                                </div>


                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Stats-->

                <!--End::Section-->

                <!--Begin::Section-->
<div class="row">
                <div class="col-xl-12">
                    <!--begin::Portlet-->
                    <div class="m-portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                         Last Booking Confirmations
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <!--begin::Section-->
                            <div class="m-section">
                                <div class="m-section__content">
                                    <table class="table table-bordered m-table m-table--border-brand m-table--head-bg-brand ">
                                        <thead>
                                        <tr>

                                            <th>Date</th>
                                            <th>To</th>
                                            <th>Email</th>
                                            <th>Tel</th>
                                            <th>Num Invoice</th>
                                            <th>Created-at</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($bookings->take(5) as $booking)
                                            <tr>

                                                <td>{{$booking->date}}</td>
                                                <td> {{$booking->to}}</td>
                                                <td>{{$booking->email}}</td>
                                                <td>{{$booking->tel}}</td>
                                                <td>{{$booking->id}}</td>
                                                <td>{{$booking->created_at}}</td>
                                            </tr>
                                            @empty
                                            No Bookings Yet
                                            @endforelse


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--end::Section-->


                        </div>
                        <!--end::Form-->
                    </div>
                </div>
                <!--End::Section-->

    <!--End::Section-->
</div>

</div>

        </div>
        </div>
    <!-- end:: Body -->


        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCX6bymX047otzH2x_GEnooOk9M3eoRJ5s"></script>
        <script src="{{asset('assets/vendors/custom/gmaps/gmaps.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/demo/default/custom/components/maps/google-maps.js')}}" type="text/javascript"></script>


        <script type="text/javascript">
            function change(msg){
                alert(msg);
            }
            var GoogleMapsDemo = function() {
                var demo3 = function(lat,lang) {
                    var map = new GMaps({
                        div: '#m_gmap_3',
                        lat: 33.3741337,
                        lng: -86.7558679,
                    });
                    
                    
                    map.setZoom(10);
                }
                return {
                    // public functions
                    init: function(lat,lang) {
                        // default charts
                        demo3(lat,lang);
                    }
                };
            }();

            jQuery(document).ready(function() {
                GoogleMapsDemo.init(30.6666,-6.66666);
            });
        </script>


@stop

