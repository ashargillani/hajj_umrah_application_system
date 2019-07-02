@extends('layout.master')
@section('header-additional-links')
    <link href="{{ asset('css/breadcrumbs.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" >
@endsection
@section('page-content')
    <div class="banner-area banner-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2><span>Book your trip</span></h2>
                        <ul class="page-title-link">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact" class="section wb">
        <div class="container">
            <div class="row">
                <div class="full-width-breadcrumbs margin-top-bottom-10">
                    <div class="col col-sm-12">
                        <ul id="breadcrumbs-one">
                            <li><a href="">Your Trip</a></li>
                            <li><a href="">Your Details</a></li>
                            <li><a href="">Your Booking</a></li>
                            <li><a class="current" href="">Your Quotes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="journey-page-form form-text-style">
                <form name="journeyPageOne" method="post" action="{{ route('journey.store') }}">
                    {{ csrf_field() }}
                    <input type="hidden" id="userinfo_page" value="userinfo_page_one" />
                    <fieldset>
                        <div class="col-sm-10 custom-hr"></div>
                        <legend>Visa Application :</legend>
                        <div class="form-group row">
                            <label for="form_field_permanentAddressUK" class="col-sm-5 col-form-label">Permanent Address in UK: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_permanentAddressUK" name="permanentAddressUK" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_telephoneNumberUK" class="col-sm-5 col-form-label">Telephone Number in UK: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_telephoneNumberUK" name="telephoneNumberUK" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_passportNumber" class="col-sm-5 col-form-label">Passport Number: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_passportNumber" name="passportNumber" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_placeOfIssue" class="col-sm-5 col-form-label">Place of Issue: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_placeOfIssue" name="placeOfIssue" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_dateOfIssue" class="col-sm-5 col-form-label">Date of Issue: </label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="form_field_dateOfIssue" name="dateOfIssue" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_expiryDate" class="col-sm-5 col-form-label">Expiry Date: </label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="form_field_expiryDate" name="expiryDate" required>
                            </div>
                        </div>

                    </fieldset>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary pull-right">Proceed <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
