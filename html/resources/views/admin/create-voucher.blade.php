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
                        Create Voucher
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

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif


            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
                            <h3 class="m-portlet__head-text">

                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form method="post"  action="{{Route('save_voucher')}}" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$book->id}}">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Logo:
                            </label>
                            <div class="col-lg-6">
                                <input type="file"   name="logo[]">
                                <label>
                                    Choose Logo File (png , jpg , jpeg extensions only )
                                </label>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Voucher To:
                            </label>
                            <div class="col-lg-6">

                                <select class="form-control m-input" id="exampleSelect1" name="name">
                                        @foreach($customers as $ct)
                                    <option value="{{$ct->FirstName}} {{$ct->LastName}}">
                                        {{$ct->FirstName}} {{$ct->LastName}}
                                    </option>
                                            @endforeach

                                </select>
                            </div>
                        </div>


                        <div class="form-group m-form__group row">

                                <label class="col-lg-2 col-form-label">
                                     Customer :
                                </label>
                                <div class="col-lg-6">
                                <input type="text" name="customer" class="form-control m-input" >
                                <span class="m-form__help">
                    Exemple:Fairway Golfreisen 																	</span>
                                </div>
                        </div>



                        <div class="form-group m-form__group row">

                            <label class="col-lg-2 col-form-label">
                                Customer's Location :
                            </label>
                            <div class="col-lg-6">
                                <input type="text" name="location" class="form-control m-input" >
                                <span class="m-form__help">
                    Exemple:Germany																	</span>
                            </div>
                        </div>


                        <div class="form-group m-form__group row">

                            <label class="col-lg-2 col-form-label">
                                Hote City :
                            </label>
                            <div class="col-lg-6">
                                <input type="text" name="city" class="form-control m-input" >
                                <span class="m-form__help">
                    Exemple:Agadir																	</span>
                            </div>
                        </div>


                        <div class="form-group m-form__group row">

                            <label class="col-lg-2 col-form-label">
                                 Staff Name :
                            </label>
                            <div class="col-lg-6">
                                <input type="text" name="coll" class="form-control m-input" >
                                <span class="m-form__help">
                    Exemple:Zakaria																</span>
                            </div>
                        </div>


                        <div class="form-group m-form__group row">

                            <label class="col-lg-2 col-form-label">
                                 Mobile Numbers :
                            </label>
                            <div class="col-lg-6">
                                <input type="text" name="pers" class="form-control m-input" >
                                <span class="m-form__help">
                    																</span>
                            </div>
                        </div>


                        <div class="form-group m-form__group row">

                            <label class="col-lg-2 col-form-label">
                                Office Number :
                            </label>
                            <div class="col-lg-6">
                                <input type="text" name="off" class="form-control m-input" >
                                <span class="m-form__help">
                    																</span>
                            </div>
                        </div>



                    </div>
                    <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions--solid">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-success">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->








        </div>
    </div>
    </div>
    <!-- end:: Body -->





    <script type="text/javascript">
        @if (count($errors) > 0)
        $('#m_modal_4').modal('show');
        @endif
    </script>

    @section('script')


        <script>
            $(document).ready(function () {


                var i=1 ;

                $('#addpallet').click(function () {

                    i++;
                    $('#boxclone').append('<div id="boxclone'+i+'">\n' +
                        '                                                    <div class="form-group  m-form__group row" >\n' +
                        '                                                        <label  class="col-lg-2 col-form-label">\n' +
                        '                                                        </label>\n' +
                        '                                                        <div data-repeater-list="" class="col-lg-10">\n' +
                        '                                                            <div data-repeater-item class="form-group m-form__group row align-items-center">\n' +
                        '                                                                <div class="col-md-3">\n' +
                        '                                                                    <div class="m-form__group m-form__group--inline">\n' +
                        '                                                                        <div class="m-form__label">\n' +
                        '\n' +
                        '                                                                        </div>\n' +
                        '                                                                        <div class="m-form__control">\n' +
                        '\n' +
                        '                                                                            <input type="text" name="fname[]" class="form-control m-input" placeholder="First Name">\n' +
                        '\n' +
                        '                                                                        </div>\n' +
                        '                                                                    </div>\n' +
                        '                                                                    <div class="d-md-none m--margin-bottom-10"></div>\n' +
                        '                                                                </div>\n' +
                        '                                                                <div class="col-md-3">\n' +
                        '                                                                    <div class="m-form__group m-form__group--inline">\n' +
                        '                                                                        <div class="m-form__label">\n' +
                        '\n' +
                        '                                                                        </div>\n' +
                        '                                                                        <div class="m-form__control">\n' +
                        '\n' +
                        '                                                                            <input type="text" name="lname[]" class="form-control m-input" placeholder="Last Name">\n' +
                        '\n' +
                        '                                                                        </div>\n' +
                        '\n' +
                        '                                                                    </div>\n' +
                        '                                                                    <div class="d-md-none m--margin-bottom-10"></div>\n' +
                        '                                                                </div>\n' +
                        '                                                                <div class="col-md-3">\n' +
                        '                                                                    <div class="m-form__group m-form__group--inline">\n' +
                        '                                                                        <div class="m-form__label">\n' +
                        '\n' +
                        '                                                                        </div>\n' +
                        '                                                                        <div class="m-form__control">\n' +
                        '\n' +
                        '                                                                            <input type="text"  name="guest_details[]" class="form-control m-input" placeholder="More Details">\n' +
                        '\n' +
                        '\n' +
                        '                                                                        </div>\n' +
                        '                                                                    </div>\n' +
                        '                                                                    <div class="d-md-none m--margin-bottom-10"></div>\n' +
                        '                                                                </div>\n' +
                        '\n' +
                        '                                                                <div class="col-md-3">\n' +
                        '\n' +
                        '                                                                    <div data-repeater-delete="" id="'+i+'" class="btn-sm btn btn-danger m-btn m-btn--icon m-btn--pill">\n' +
                        '\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\n' +
                        '\n' +
                        '\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class="la la-trash-o"></i>\n' +
                        '\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\n' +
                        '\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDelete\n' +
                        '\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n' +
                        '\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n' +
                        '                                                                    </div>\n' +
                        '                                                                </div>\n' +
                        '                                                            </div>\n' +
                        '                                                        </div>\n' +
                        '                                                    </div>\n' +
                        '                                                </div>\n' +
                        '                                                                        ');




                });


                $(document).on('click' , '.btn-danger', function () {


                    var button_id = $(this).attr("id");

                    $('#boxclone'+button_id+'').remove();


                })



            });



        </script>

        <script>


            $(document).ready(function () {


                var j=1 ;

                $('#addpallet2').click(function () {

                    i++;
                    $('#boxc').append('<div id="box'+j+'">\n' +
                        '                                                    <div class="form-group  m-form__group row" >\n' +
                        '                                                        <label  class="col-lg-2 col-form-label">\n' +
                        '                                                        </label>\n' +
                        '                                                        <div data-repeater-list="" class="col-lg-10">\n' +
                        '                                                            <div data-repeater-item class="form-group m-form__group row align-items-center">\n' +
                        '                                                                <div class="col-md-3">\n' +
                        '                                                                    <div class="m-form__group m-form__group--inline">\n' +
                        '                                                                        <div class="m-form__label">\n' +
                        '\n' +
                        '                                                                        </div>\n' +
                        '                                                                        <div class="m-form__control">\n' +
                        '\n' +
                        '                                                                            <input type="text" name="teedate[]" class="form-control m-input" placeholder="Date" value="Ex: 4th May" required>\n' +
                        '\n' +
                        '                                                                        </div>\n' +
                        '                                                                    </div>\n' +
                        '                                                                    <div class="d-md-none m--margin-bottom-10"></div>\n' +
                        '                                                                </div>\n' +
                        '                                                                <div class="col-md-3">\n' +
                        '                                                                    <div class="m-form__group m-form__group--inline">\n' +
                        '                                                                        <div class="m-form__label">\n' +
                        '\n' +
                        '                                                                        </div>\n' +
                        '                                                                        <div class="m-form__control">\n' +
                        '\n' +
                        '                                                                            <input type="text" name="teedetails[]" class="form-control m-input" placeholder="Details" required>\n' +
                        '\n' +
                        '                                                                        </div>\n' +
                        '\n' +
                        '                                                                    </div>\n' +
                        '                                                                    <div class="d-md-none m--margin-bottom-10"></div>\n' +
                        '                                                                </div>\n' +
                        '                                                                <div class="col-md-3">\n' +
                        '                                                                    <div class="m-form__group m-form__group--inline">\n' +
                        '                                                                        <div class="m-form__label">\n' +
                        '\n' +
                        '                                                                        </div>\n' +
                        '                                                                        <div class="m-form__control">\n' +
                        '\n' +
                        '                                                                            <input type="text"  name="teehour[]" class="form-control m-input" placeholder="Hour" value="Ex: 12h02" required>\n' +
                        '\n' +
                        '\n' +
                        '                                                                        </div>\n' +
                        '                                                                    </div>\n' +
                        '                                                                    <div class="d-md-none m--margin-bottom-10"></div>\n' +
                        '                                                                </div>\n' +
                        '\n' +
                        '                                                                <div class="col-md-3">\n' +
                        '\n' +
                        '                                                                    <div data-repeater-delete="" id="'+j+'" class="btn-sm btn btn-danger rmtee m-btn m-btn--icon m-btn--pill">\n' +
                        '\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\n' +
                        '\n' +
                        '\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class="la la-trash-o"></i>\n' +
                        '\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\n' +
                        '\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDelete\n' +
                        '\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n' +
                        '\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n' +
                        '                                                                    </div>\n' +
                        '                                                                </div>\n' +
                        '                                                            </div>\n' +
                        '                                                        </div>\n' +
                        '                                                    </div>\n' +
                        '                                                </div>\n');




                });


                $(document).on('click' , '.rmtee', function () {


                    var button_id = $(this).attr("id");
                    $('#box'+button_id).remove();

                })



            });



        </script>





        <script src="{{asset('assets/demo/default/custom/components/forms/wizard/wizard.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/demo/default/custom/components/forms/widgets/form-repeater.js')}}" type="text/javascript"></script>

    @stop




@stop

