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
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="full-width-breadcrumbs margin-top-bottom-10 al">
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
                    <div class="col-sm-10 custom-hr"></div>
                    <legend>Best Available Packages :</legend>
                    <table summary="test" class="table table-striped table-hover" cellspacing="0" id="master">
                        <thead>
                            <tr>
                                <th><span>Agent Name</span></th>
                                <th><span>Payment</span></th>
                                <th><span>Package</span></th>
                                <th><span>Package Type</span></th>
                                <th><span>Hotel</span></th>
                                <th><span>Hotel Stars</span></th>
                                <th><span>Hotel Distance</span></th>
                                <th><span>Flights <br></span></th>
                                <th><span>Agent Location <br></span></th>
                                <th><span>View Details <br></span></th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($packages) >= 1)
                            @foreach($packages as $package)
                            <tr>
                                <td>{{ $package->provider->organizationName }}</td>
                                <td><span class="package-price">&#163;{{ $package->price }}</span></td>
                                <td>{{ $package->title }}</td>
                                <td>{{ $package->type }}</td>
                                <td>{{ $package->hotel->name }}</td>
                                <td>{{ $package->hotel->address }}</td>
                                <td>{{ $package->hotel->stars }}</td>
                                <td>{{ $package->flight->airlineName }}</td>
                                <td>{{ $package->provider->address }}</td>
                                <td><input class="btn btn-primary more-details" type="button" value="More Details" data-href="#content_{{ $loop->index }}" ></td>
                            </tr>
                            <tr class="content collapse" id="content_{{ $loop->index }}">
                                <td colspan="10">
                                    <div class="content-container">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3>About this package:</h3>
                                                <hr>
                                                <form>
                                                    <div class="form-group row">
                                                        <label for="package_description_{{ $loop->index }}" class="col-sm-offset-1 col-sm-3 col-form-label">Package Description:</label>
                                                        <div class="col-sm-8">
                                                            <textarea readonly class="form-control" id="package_stars_{{ $loop->index }}" rows="4">{{ $package->package_details }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="package_stars_{{ $loop->index }}" class="col-sm-offset-1 col-sm-3 col-form-label">Package Stars:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext" id="package_stars_{{ $loop->index }}" value="{{ $package->packageStars }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="departure_date_{{ $loop->index }}" class="col-sm-offset-1 col-sm-3 col-form-label">Departure Date:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext" id="departure_date_{{ $loop->index }}" value="{{ $package->departureDate }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="arrival_date_{{ $loop->index }}" class="col-sm-offset-1 col-sm-3 col-form-label">Arrival Date:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext" id="arrival_date_{{ $loop->index }}" value="{{ $package->arrivalDate }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="days_makkah_{{ $loop->index }}" class="col-sm-offset-1 col-sm-3 col-form-label">Days in Makkah:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext" id="days_makkah_{{ $loop->index }}" value="{{ $package->makkahDays }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="days_medina_{{ $loop->index }}" class="col-sm-offset-1 col-sm-3 col-form-label">Days in Medina:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext" id="days_medina_{{ $loop->index }}" value="{{ $package->medinaDays }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="route_{{ $loop->index }}" class="col-sm-offset-1 col-sm-3 col-form-label">Route:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext" id="route_{{ $loop->index }}" value="{{ $package->route }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="infant_discount_{{ $loop->index }}" class="col-sm-offset-1 col-sm-3 col-form-label">Infant Discount:</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">%</span>
                                                                </div>
                                                                <input type="number" readonly class="form-control" id="infant_discount_{{ $loop->index }}" value="{{ $package->infantDiscount }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="toddler_discount_{{ $loop->index }}" class="col-sm-offset-1 col-sm-3 col-form-label">Toddler Discount:</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">%</span>
                                                                </div>
                                                                <input type="number" readonly class="form-control" id="toddler_discount_{{ $loop->index }}" value="{{ $package->toddlerDiscount }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="overfive_discount_{{ $loop->index }}" class="col-sm-offset-1 col-sm-3 col-form-label">Over-five Discount:</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">%</span>
                                                                </div>
                                                                <input type="number" readonly class="form-control" id="overfive_discount_{{ $loop->index }}" value="{{ $package->	overFiveDiscount }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="overfive_discount_{{ $loop->index }}" class="col-sm-offset-1 col-sm-3 col-form-label">Package Stars:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control" id="overfive_discount_{{ $loop->index }}" value="{{ $package->packageStars }}">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-sm-6">
                                                <h3>About this agent:</h3>
                                                <hr>
                                                <form>
                                                    <div class="form-group row">
                                                        <label for="provider_organization_name_{{ $loop->index }}" class="col-sm-offset-1 col-sm-3 col-form-label">Organization Name:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext" id="provider_organization_name_{{ $loop->index }}" value="{{ $package->provider->organizationName }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="provider_description_{{ $loop->index }}" class="col-sm-offset-1 col-sm-3 col-form-label">About this Agent:</label>
                                                        <div class="col-sm-8">
                                                            <textarea readonly class="form-control" id="provider_description_{{ $loop->index }}" rows="4">{{ $package->provider->provider_details }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="provider_location_city_{{ $loop->index }}" class="col-sm-offset-1 col-sm-3 col-form-label">Located in City:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext" id="provider_location_city_{{ $loop->index }}" value="{{ $package->provider->city }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="provider_location_address_{{ $loop->index }}" class="col-sm-offset-1 col-sm-3 col-form-label">Address:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext" id="provider_location_address_{{ $loop->index }}" value="{{ $package->provider->address }}">
                                                        </div>
                                                    </div>
                                                </form>
                                                <br>
                                                <h3>What's included in this package?</h3>
                                                <hr>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-sm-offset-2 col-sm-4">
                                                            <label class="included-in-package"><i class="fa fa-lg {{ ($package->visa)? 'fa-check-circle color-green':'fa-times-circle color-red'}}"></i>
                                                             Visa</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-offset-2 col-sm-4">
                                                            <label class="included-in-package"><i class="fa fa-lg {{ ($package->food)? 'fa-check-circle color-green':'fa-times-circle color-red'}}"></i> Food</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-offset-2 col-sm-4">
                                                            <label class="included-in-package"><i class="fa fa-lg {{ ($package->draft)? 'fa-check-circle color-green':'fa-times-circle color-red'}}"></i> Draft</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-offset-2 col-sm-4">
                                                            <label class="included-in-package"><i class="fa fa-lg {{ ($package->qurbani)? 'fa-check-circle color-green':'fa-times-circle color-red'}}"></i> Qurbani</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-offset-2 col-sm-4">
                                                            <label class="included-in-package"><i class="fa fa-lg {{ ($package->transfers)? 'fa-check-circle color-green':'fa-times-circle color-red'}}"></i> Transfers</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-offset-2 col-sm-4">
                                                            <label class="included-in-package"><i class="fa fa-lg {{ ($package->ziyaarah)? 'fa-check-circle color-green':'fa-times-circle color-red'}}"></i> Ziyaarah</label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
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

            $(".more-details").click(function() {
                let contentId = this.dataset.href;
                if ($(this).val() === 'More Details') {
                    $(this).val('Close Details')
                } else {
                    $(this).val('More Details');
                }
                $(contentId).toggleClass("collapse");
            });
        });
    </script>
@endsection