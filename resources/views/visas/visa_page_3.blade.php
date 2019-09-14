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
            <div class="visa-page-three-form form-text-style">
                <form name="visaPagethree" method="post" action="{{ route('visa-page-3', $visa) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" id="userinfo_page" value="userinfo_page_one" />
                    <fieldset>
                        <div class="col-sm-10 custom-hr"></div>
                        <legend>Visa Application :</legend>
                        <div class="form-group row">
                            <label for="form_field_dateOfArrivalSaudiArabia" class="col-sm-5 col-form-label">Expected Date of Arrival in Saudi Arabia: </label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="form_field_dateOfArrivalSaudiArabia" name="dateOfArrivalSaudiArabia" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_contactAddressSaudiArabia" class="col-sm-5 col-form-label">Contact Address in Saudi Arabia: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_contactAddressSaudiArabia" name="contactAddressSaudiArabia" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_airlineName" class="col-sm-5 col-form-label">Airline Name: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_airlineName" name="airlineName" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_airlineFlightNumber" class="col-sm-5 col-form-label">Airline Flight No: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_airlineFlightNumber" name="airlineFlightNumber" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_airlineTicketNumber" class="col-sm-5 col-form-label">Airline Ticket No: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_airlineTicketNumber" name="airlineTicketNumber" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_nameOfMehram" class="col-sm-5 col-form-label">Name of Mehram: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_nameOfMehram" name="nameOfMehram" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_relationshipWithMehram" class="col-sm-5 col-form-label">Relationship with Mehram: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_relationshipWithMehram" name="relationshipWithMehram" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_carerOfChild" class="col-sm-5 col-form-label">Carer of Child: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_carerOfChild" name="carerOfChild" required>
                            </div>
                        </div>


                    </fieldset>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary pull-right">Submit <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
