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
                            <li><a class="current" href="">Your Booking</a></li>
                            <li><a href="">Your Quotes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="journey-page-form form-text-style">
                <form name="journeyPageThree" method="post" action="{{ route('journey.store') }}">
                    {{ csrf_field() }}
                    <input type="hidden" id="userinfo_page" value="userinfo_page_two" />
                    <fieldset>
                        <div class="col-sm-10 custom-hr"></div>
                        <legend>Best Available Packages :</legend>
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Provider</th>
                                <th scope="col">Agent Name</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Package</th>
                                <th scope="col">Package Type</th>
                                <th scope="col">Hotel</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($packages) >= 1)
                                @foreach($packages as $package)
                                <tr>
                                    <td>{{ $package->provider->organizationName }}</td>
                                    <td>{{ $package->provider->organizationName }}</td>
                                    <td>{{ $package->price }}</td>
                                    <td>{{ $package->title }}</td>
                                    <td>{{ $package->type }}</td>
                                    <td>{{ $package->hotel->name }}</td>
                                </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </fieldset>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary pull-right">Take Me To the Best Package <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Modal -->
            <div class="modal modal-lg fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Additional Passengers Complete Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="additional_passenger">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="submitAdditionalFormBtn" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('body-additional-js-links')
    <script src="{{ asset('js/formData.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Get Form One Data
            let formOneData = JSON.parse(localStorage.getItem("userinfo_page_one"));
            // Get Journey Page Two Data
            let formTwoData = JSON.parse(localStorage.getItem("userinfo_page_two"));

        });
    </script>
@endsection