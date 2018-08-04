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


                <!--Begin::Main Portlet-->
                <div class="m-portlet m-portlet--full-height">
                    <!--begin: Portlet Head-->
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Client Registration
                                    <small>
                                        Fill the form
                                    </small>
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                    <a href="#" data-toggle="m-tooltip" class="m-portlet__nav-link m-portlet__nav-link--icon" data-direction="left" data-width="auto" title="Get help with filling up this form">
                                        <i class="flaticon-info m--icon-font-size-lg3"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end: Portlet Head-->





                    <!--begin: Form Wizard-->
                    <div class="m-wizard m-wizard--2 m-wizard--success" id="m_wizard">
                        <!--begin: Message container -->
                        <div class="m-portlet__padding-x">
                            <!-- Here you can put a message or alert -->
                        </div>
                        <!--end: Message container -->
                        <!--begin: Form Wizard Head -->
                        <div class="m-wizard__head m-portlet__padding-x">
                            <!--begin: Form Wizard Progress -->
                            <div class="m-wizard__progress">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar"  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end: Form Wizard Progress -->
                            <!--begin: Form Wizard Nav -->
                            <div class="m-wizard__nav">
                                <div class="m-wizard__steps">
                                    <div class="m-wizard__step m-wizard__step--current"  data-wizard-target="#m_wizard_form_step_1">
                                        <a href="#"  class="m-wizard__step-number">
                                                        <span>
                                                            <i class="fa  flaticon-placeholder"></i>
                                                        </span>
                                        </a>
                                        <div class="m-wizard__step-info">
                                            <div class="m-wizard__step-title">
                                                1. Client Information
                                            </div>
                                            <div class="m-wizard__step-desc">
                                                Confirmations Details/ Cliens Details
                                                <br>
                                                Guest's Names
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_2">
                                        <a href="#" class="m-wizard__step-number">
                                                        <span>
                                                            <i class="fa  flaticon-layers"></i>
                                                        </span>
                                        </a>
                                        <div class="m-wizard__step-info">
                                            <div class="m-wizard__step-title">
                                                2. More Details
                                            </div>
                                            <div class="m-wizard__step-desc">
                                                Accomodations  Tee Times / Airport Transfer
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_3">
                                        <a href="#" class="m-wizard__step-number">
                                                        <span>
                                                            <i class="fa  flaticon-layers"></i>
                                                        </span>
                                        </a>
                                        <div class="m-wizard__step-info">
                                            <div class="m-wizard__step-title">
                                                3. Confirmation
                                            </div>
                                            <div class="m-wizard__step-desc">
                                                Confirm informations
                                                <br>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Form Wizard Nav -->
                        </div>
                        <!--end: Form Wizard Head -->
                        <!--begin: Form Wizard Form-->
                        <div class="m-wizard__form">
                            <!--
        1) Use m-form--label-align-left class to alight the form input lables to the right
        2) Use m-form--state class to highlight input control borders on form validation
        -->
                            <form method="post"  action="{{Route('validate_confirmation')}}" class="m-form m-form--label-align-left- m-form--state-" id="m_form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <!--begin: Form Body -->
                                <div class="m-portlet__body">
                                    <!--begin: Form Wizard Step 1-->
                                    <div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">
                                        <div class="row">
                                            <div class="col-xl-8 offset-xl-2">
                                                <div class="m-form__section m-form__section--first">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            Client Details
                                                        </h3>
                                                    </div>
                                                    <div class="form-group m-form__group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            * Date:
                                                        </label>
                                                        <div class="col-xl-9 col-lg-9">
                                                            <input type="date" name="date" class="form-control m-input" placeholder="" value="" >
                                                            <span class="m-form__help">
                                                                            Please enter issue date
                                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-form__group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            * To:
                                                        </label>
                                                        <div class="col-xl-9 col-lg-9">
                                                            <input type="text" name="to" class="form-control m-input" placeholder="" value="">
                                                            <span class="m-form__help">
                                                                            Please enter address
                                                                        </span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group m-form__group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            * Email:
                                                        </label>
                                                        <div class="col-xl-9 col-lg-9">
                                                            <div class="input-group">

                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-at"></i>
                                                                                </span>
                                                            </div>
                                                            <input type="email" name="email" class="form-control m-input" placeholder="" value="">                                                        </div>

                                                            <span class="m-form__help">
                                                                            Please enter email
                                                                        </span>
                                                        </div>
                                                    </div>




                                                    <div class="form-group m-form__group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            * Phone
                                                        </label>
                                                        <div class="col-xl-9 col-lg-9">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-phone"></i>
                                                                                </span>
                                                                </div>
                                                                <input type="text" name="tel" class="form-control m-input" placeholder="" value="">
                                                            </div>
                                                            <span class="m-form__help">
                                                                            Enter  valid phone
                                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="m-form__heading">
                                                    <h3 class="m-form__heading-title">
                                                        Confirmation Details
                                                    </h3>
                                                </div>


                                                <div class="form-group m-form__group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                        * USt-IdNr
                                                    </label>
                                                    <div class="col-xl-9 col-lg-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-gear"></i>
                                                                                </span>
                                                            </div>
                                                            <input type="text" name="ust" class="form-control m-input" placeholder="" value="">
                                                        </div>
                                                        <span class="m-form__help">
                                                                            Enter USt-IdNr number
                                                                        </span>
                                                    </div>
                                                </div>

                                                <!--div class="form-group m-form__group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                        * Confirmation Invoice :
                                                    </label>
                                                    <div class="col-xl-9 col-lg-9">
                                                        <div class="input-group">
                                                        <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-tags"></i>
                                                                                </span>
                                                        </div>
                                                        <input type="text" name="inv" class="form-control m-input" placeholder="" value=""></div>
                                                        <span class="m-form__help">
                                                                            Please enter confirmation invoice number
                                                                        </span>
                                                    </div>
                                                </div!-->







                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                <div class="m-form__section">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            Guest's name
                                                            <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="Enter Guests Details"></i>
                                                        </h3>
                                                    </div>


                                                    <div id="boxclone">
                                                        <div class="form-group  m-form__group row" >
                                                            <label  class="col-lg-2 col-form-label">
                                                            </label>
                                                            <div data-repeater-list="" class="col-lg-10">
                                                                <div data-repeater-item class="form-group m-form__group row align-items-center">
                                                                    <div class="col-md-3">
                                                                        <div class="m-form__group m-form__group--inline">
                                                                            <div class="m-form__label">

                                                                            </div>
                                                                            <div class="m-form__control">

                                                                                <input type="text" name="fname[]" class="form-control m-input" placeholder="First Name">

                                                                            </div>
                                                                        </div>
                                                                        <div class="d-md-none m--margin-bottom-10"></div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="m-form__group m-form__group--inline">
                                                                            <div class="m-form__label">

                                                                            </div>
                                                                            <div class="m-form__control">

                                                                                <input type="text" name="lname[]" class="form-control m-input" placeholder="Last Name">

                                                                            </div>

                                                                        </div>
                                                                        <div class="d-md-none m--margin-bottom-10"></div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="m-form__group m-form__group--inline">
                                                                            <div class="m-form__label">

                                                                            </div>
                                                                            <div class="m-form__control">

                                                                                <input type="text"  name="guest_details[]" class="form-control m-input" placeholder="More Details">


                                                                            </div>
                                                                        </div>
                                                                        <div class="d-md-none m--margin-bottom-10"></div>
                                                                    </div>



                                                                    <div class="col-md-3">

                                                                        <button type='button' id="addpallet" class="btn btn btn-sm btn-brand m-btn m-btn--icon m-btn--pill m-btn--wide">
    <span>
                                                                <i class="la la-plus"></i>
                                                                <span>
                                                                    Add
                                                                </span>
                                                            </span>
                                                                        </button>



                                                                    </div>



                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Form Wizard Step 1-->
                                    <!--begin: Form Wizard Step 2-->
                                    <div class="m-wizard__form-step" id="m_wizard_form_step_2">
                                        <div class="row">
                                            <div class="col-xl-8 offset-xl-2">
                                                <div class="m-form__section m-form__section--first">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            Accomodations
                                                        </h3>
                                                    </div>
                                                    <div class="form-group m-form__group row">
                                                        <div class="col-lg-12">
                                                            <label class="form-control-label">
                                                                * Details:
                                                            </label>
                                                            <input type="text" name="acc" class="form-control m-input" placeholder="Hotel & Rooms Details" value="" required>
                                                            <span class="m-form__help">
                                                                            Example: 4 Double Rooms on ALL INCLUSIVE from 3rd to 10th May 2018 (07 Nights) at the RIU TIKIDA PALACE HOTEL in AGADIR
                                                                        </span>
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                <div class="m-form__section">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            Tee Times
                                                        </h3>
                                                    </div>

                                                    <div id="boxc">
                                                        <div class="form-group  m-form__group row" >
                                                            <label  class="col-lg-2 col-form-label">
                                                            </label>
                                                            <div data-repeater-list="" class="col-lg-10">
                                                                <div data-repeater-item class="form-group m-form__group row align-items-center">
                                                                    <div class="col-md-3">
                                                                        <div class="m-form__group m-form__group--inline">
                                                                            <div class="m-form__label">

                                                                            </div>
                                                                            <div class="m-form__control">

                                                                                <input type="text" name="teedate[]" class="form-control m-input" placeholder="Date" value="Ex: 4th May" required >


                                                                            </div>
                                                                        </div>
                                                                        <div class="d-md-none m--margin-bottom-10"></div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="m-form__group m-form__group--inline">
                                                                            <div class="m-form__label">

                                                                            </div>
                                                                            <div class="m-form__control">

                                                                                <input type="text" name="teedetails[]" class="form-control m-input" placeholder="Details" required>

                                                                            </div>

                                                                        </div>
                                                                        <div class="d-md-none m--margin-bottom-10"></div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="m-form__group m-form__group--inline">
                                                                            <div class="m-form__label">

                                                                            </div>
                                                                            <div class="m-form__control">

                                                                                <input type="text"  name="teehour[]" class="form-control m-input" placeholder="Hour" value="Ex: 12h02" required>


                                                                            </div>
                                                                        </div>
                                                                        <div class="d-md-none m--margin-bottom-10"></div>
                                                                    </div>



                                                                    <div class="col-md-3">

                                                                        <button type='button' id="addpallet2" class="btn btn btn-sm btn-brand m-btn m-btn--icon m-btn--pill m-btn--wide">
    <span>
                                                                <i class="la la-plus"></i>
                                                                <span>
                                                                    Add
                                                                </span>
                                                            </span>
                                                                        </button>



                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>



                                                    <div class="form-group m-form__group row">
                                                        <label class="col-lg-3 col-form-label">
                                                            Caddies or Buggies included:
                                                        </label>
                                                        <div class="col-lg-12 col-xl-8">
                                                            <div class="m-checkbox-inline m--padding-top-3">
                                                                <label class="m-checkbox">
                                                                    <input type="checkbox" name="cuddies_included" value="1">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="form-group m-form__group row">
                                                        <label class="col-lg-3 col-form-label">
                                                            Free Golf Shuttles:
                                                        </label>
                                                        <div class="col-lg-12 col-xl-8">
                                                            <div class="m-checkbox-inline m--padding-top-3">
                                                                <label class="m-checkbox">
                                                                    <input type="checkbox" name="shuttle_included" value="1">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>






                                                </div>
                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                <div class="m-form__section">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            Airport Details
                                                        </h3>
                                                    </div>



                                                    <div class="form-group m-form__group row">
                                                        <div class="col-lg-12">
                                                            <label class="form-control-label">
                                                                * ARRIVAL Airport Transfer :
                                                            </label>
                                                            <input type="text" name="arrival" class="form-control m-input" placeholder="ARRIVAL Airport Transfer " value="" required>
                                                            <span class="m-form__help">
                                                                            Example:3rd May 2018; Transfer from AGADIR AIRPORT to RIU TIKIDA GOLF PALACE HOTEL –  Flight No GM3516 ; Arrival Time at 09h25
                                                                        </span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group m-form__group row">
                                                        <div class="col-lg-12">
                                                            <label class="form-control-label">
                                                                * RETURN Airport Transfer :
                                                            </label>
                                                            <input type="text" name="departure" class="form-control m-input" placeholder="ARRIVAL Airport Transfer " value="" required>
                                                            <span class="m-form__help">
                                                                            Example:10th May 2018; Transfer from RIU TIKIDA GOLF PALACE HOTEL to AGADIR AIRPORT – Flight No GM3517 ; Flight Departure Time at 15h30 (Departure from the Hotel at 12h30)
                                                                        </span>
                                                        </div>
                                                    </div>



                                                </div>

                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                <div class="m-form__section">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            Amount
                                                        </h3>
                                                    </div>



                                                    <div class="form-group m-form__group row">
                                                        <div class="col-lg-12">
                                                            <label class="form-control-label">
                                                                Total Amount due :
                                                            </label>
                                                            <input type="number" name="amount" class="form-control m-input" placeholder="ARRIVAL Airport Transfer " value="" required>
                                                            <span class="m-form__help">
                                                                            Example: 7720.65
                                                        </div>
                                                    </div>

                                                    <div class="form-group m-form__group row">
                                                        <div class="col-lg-12">
                                                            <label class="form-control-label">
                                                                Details :
                                                            </label>
                                                            <input type="text" name="amount_details" class="form-control m-input" placeholder="ARRIVAL Airport Transfer ">
                                                            <span class="m-form__help">Price per GOLFER on ALL INCLUSIVE in a Double Room: 965 Euros x 8 Golfers = 7720 Euros 																	</span>
                                                        </div>
                                                    </div>



                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Form Wizard Step 2-->
                                    <!--begin: Form Wizard Step 3-->
                                    <div class="m-wizard__form-step" id="m_wizard_form_step_3">
                                        <div class="row">




                                        </div>
                                    </div>
                                    <!--end: Form Wizard Step 3-->
                                </div>
                                <!--end: Form Body -->
                                <!--begin: Form Actions -->
                                <div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
                                    <div class="m-form__actions">
                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-4 m--align-left">
                                                <a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
                                                                <span>
                                                                    <i class="la la-arrow-left"></i>
                                                                    &nbsp;&nbsp;
                                                                    <span>
                                                                        Back
                                                                    </span>
                                                                </span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 m--align-right">


                                                    <button type="submit" class="btn btn-primary m-btn m-btn--custom m-btn--icon" data-wizard-action="submit" >Validate</button>

                                                <a href="#" class="btn btn-warning m-btn m-btn--custom m-btn--icon" data-wizard-action="next">
                                                                <span>
                                                                    <span>
                                                                        Save & Continue
                                                                    </span>
                                                                    &nbsp;&nbsp;
                                                                    <i class="la la-arrow-right"></i>
                                                                </span>
                                                </a>
                                            </div>
                                            <div class="col-lg-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Form Actions -->
                            </form>
                        </div>
                        <!--end: Form Wizard Form-->
                    </div>
                    <!--end: Form Wizard-->




                </div>
                <!--End::Main Portlet-->








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

