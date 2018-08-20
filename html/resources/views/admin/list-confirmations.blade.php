@extends('layouts.adminTemplate')



@section('content')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script src="{{asset('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>
<style>

    .red {
        background-color: red !important;
    }

</style>

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Booking Confirmations
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

            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Booking Confirmations
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">

                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin: Search Form -->
                    <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                        <div class="row align-items-center">
                            <div class="col-xl-8 order-2 order-xl-1">
                                <div class="form-group m-form__group row align-items-center">
                                    
                                    
                                    <div class="col-md-4">
                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
                                            <span class="m-input-icon__icon m-input-icon__icon--left">
															<span>
																<i class="la la-search"></i>
															</span>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                                <a href="{{Route('create-confirmations')}}"  class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
												<span>
													<i class="la la-plus"></i>
													<span>
														Create Confirmation
													</span>
												</span>
                                </a>
                                <div class="m-separator m-separator--dashed d-xl-none"></div>
                            </div>
                        </div>
                    </div>
                    <!--end: Search Form -->
                    <!--begin: Datatable -->
                    <table class="m-datatable" id="html_table" width="100%">
                        <thead>
                        <tr>
                            <th title="Field #1" >
                                Date
                            </th>
                            <th title="Field #2">
                               To
                            </th>
                            <th title="Field #3">
                                Email
                            </th>
                            <th title="Field #4">
                               Tel
                            </th>
                            <th title="Field #5">
                                Conf-Invoice
                            </th>
                            <th title="Field #6">
                                status
                            </th>

                            <th title="Field #7">
                                Created-at
                            </th>
                            <th title="Field #8">
                                Action
                            </th>

                        </tr>
                        </thead>
                        <tbody>

                    @forelse($bookings as $booking)

                          <tr id="{{$booking->id}}" >


                                <td>{{$booking->date}}</td>
                                <td> {{$booking->to}}</td>
                                <td>{{$booking->email}}</td>
                                <td>{{$booking->tel}}</td>
                                <td>{{$booking->id}}</td>

                              <td >{{$booking->canceled}}</td>

                                <td>{{$booking->created_at}}</td>
                                <td>

                                    <span style="overflow: visible; width: 110px;">
                                        <div class="dropdown ">
                                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">
                                                <i class="la la-ellipsis-h m--font-success"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right ">

                                                <button onclick="window.location='{{ Route("conf-details" ,$booking->id) }}'"  class="dropdown-item" ><i class="la la-search-plus"></i>View Confirrmation</button>
                                                @if($booking->vouchers()->first() != null )
                                                <button onclick="window.location='{{ Route("create_voucher" ,$booking->id) }}'"  class="dropdown-item" ><i class="la la-search-plus"></i>View Voucher</button>
                                                    <button onclick="window.location='{{ Route("generate_pdf_voucher" ,$booking->id) }}'"  class="dropdown-item" ><i class="la la-file-pdf-o"></i>Download Voucher</button>
                                                    @else
                                                    <button onclick="window.location='{{ Route("create_voucher" ,$booking->id) }}'"  class="dropdown-item" ><i class="la la-file-text"></i>Generate Voucher</button>


                                                @endif


                                                <button onclick="window.location='{{ Route("generate_pdf" ,$booking->id) }}'"  class="dropdown-item" ><i class="la la-file-pdf-o"></i>Download Confirmation</button>

                                            </div>
                                        </div>
                                        @if($booking->canceled != 'Canceled' )
                                        <button onclick="deleteuser('{{$booking->id}}')" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill "  title="Delete ">
                                            <i class="la la-trash m--font-danger"></i>
                                        </button>
                                            @endif
                                    </span>

                                </td>
                            </tr>
                        @empty

                        @endforelse



                        </tbody>
                    </table>
                    <!--end: Datatable -->
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
                text: "Do you want to Cancel this booking??!",
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
                                //var table = $('#html_table').DataTable();
                                //table.row( this ).delete();
                                swal("Good","Booking Confirmation was successfully canceled","success");
                                location.reload();
                              //  $(row).addClass('red');
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



    <script type="text/javascript">
        @if (count($errors) > 0)
        $('#m_modal_4').modal('show');
        @endif
    </script>




@stop

