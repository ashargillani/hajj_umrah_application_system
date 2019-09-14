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
            <div class="passport-dependant-form form-text-style">
                <form name="passportDependant" method="post" action="{{ route('passport-dependant') }}">
                    {{ csrf_field() }}
                    <input type="hidden" id="userinfo_page" value="userinfo_page_one" />
                    <fieldset>
                        <div class="col-sm-10 custom-hr"></div>
                        <legend>Visa Application :</legend>
                        <div class="form-group row">
                            <label for="form_field_fullName" class="col-sm-5 col-form-label">Full Name: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_fullName" name="fullName" placeholder="Full Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_sex" class="col-sm-5 col-form-label">Sex:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="sex" id="form_field_sex">
                                    <option selected disabled>Please choose</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_dateOfBirth" class="col-sm-5 col-form-label">Date of Birth: </label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="form_field_dateOfBirth" name="dateOfBirth" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_relationship" class="col-sm-5 col-form-label">Relationship: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_relationship" name="relationship" placeholder="Relationship" required>
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
