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
            <div class="visa-page-two-form form-text-style">
                <form name="visaPagetwo" method="post" action="{{ route('visa-page-2', $visa) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
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
                        <div class="form-group row">
                            <label for="form_field_dependants" class="col-sm-5 col-form-label">Any Dependants:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="dependants" id="form_field_dependants">
                                    <option selected disabled>Please choose</option>
                                    <option value=1>Yes</option>
                                    <option value=0>No</option>
                                </select>
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
