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
            <div class="visa-short-form form-text-style">
                <form name="visaShortForm" method="post" action="{{ route('visa-page-1') }}">
                    {{ csrf_field() }}
                    <input type="hidden" id="userinfo_page" value="userinfo_page_one" />
                    <fieldset>
                        <div class="col-sm-10 custom-hr"></div>
                        <legend>Visa Short Application :</legend>
                        <div class="form-group row">
                            <label for="form_field_fullName" class="col-sm-5 col-form-label">Full Name: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_fullName" name="fullName" placeholder="Full Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_familyName" class="col-sm-5 col-form-label">Family Name: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_familyName" name="familyName" placeholder="Family Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_motherName" class="col-sm-5 col-form-label">Mother Name: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_motherName" name="motherName" placeholder="Mother Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_previousNationality" class="col-sm-5 col-form-label">Previous Nationality: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_previousNationality" name="previousNationality" placeholder="Previous Nationality" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_profession" class="col-sm-5 col-form-label">Profession: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_profession" name="profession" placeholder="Profession" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_permanentAddressUK" class="col-sm-5 col-form-label">Permanent Address in UK: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_permanentAddressUK" name="permanentAddressUK" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_maritalStatus" class="col-sm-5 col-form-label">Marital Status:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="maritalStatus" id="form_field_maritalStatus">
                                    <option selected disabled>Please choose</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_religion" class="col-sm-5 col-form-label">Religion: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_religion" name="religion" placeholder="Religion" required>
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
                            <label for="form_field_dependants" class="col-sm-5 col-form-label">Any Dependants:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="dependants" id="form_field_dependants">
                                    <option selected disabled>Please choose</option>
                                    <option value=1>Yes</option>
                                    <option value=0>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_telephoneNumberUK" class="col-sm-5 col-form-label">Telephone Number in UK: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_telephoneNumberUK" name="telephoneNumberUK" required>
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
