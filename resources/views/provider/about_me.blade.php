@extends('provider.layout.provider-main')
@section('header-additional-links')
    <style>
        /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
        #map {
            height: 450px;
            width: 100%;
            border: 1px solid gray;
            padding: 4px;
            margin-bottom: 15px;
            border-radius: 4px;
        }
    </style>
@endsection
@section('page-breadcrumb')
    <li><i class="fa fa-home"></i><a href="{{ route('provider.dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('provider.index') }}">Providers</a></li>
@endsection
@section('page-content')
    <div class="panel-form">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2><i class="fa fa-bed" aria-hidden="true"></i> &nbsp;Provider</h2>
                <label>About Me</label>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel-body">
                    <form action="{{ route('provider.store-about-me', $provider) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <fieldset>
                            <div class="form-group row">
                                <label for="providerDetails" class="col-sm-2 col-form-label">Provider Details</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="providerDetails" name="providerDetails" rows="10" required>{{ $provider->provider_details }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="providerEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="providerEmail" name="providerEmail" value = {{$provider->provider_email}} required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value = {{$provider->phoneNumber}} required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="location-option" class="col-sm-2 col-form-label">Choose Location (Manually or Choose from Maps)</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input custom-checkbox" type="radio" id="location-option-manually" name="location-option" value="manual" checked>
                                        <label class="form-check-label" for="location-option-manually">
                                            Enter Manually
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input custom-checkbox" type="radio" id="location-option-maps" name="location-option" value="maps">
                                        <label class="form-check-label" for="location-option-maps">
                                            Choose From Maps
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <div id="map" style="display: none;"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Provider Address" class="col-sm-2 col-form-label">Provider Address:</label>
                                <label class="col-sm-1 col-form-label">City :</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="providerCity" name="providerCity" value = {{$provider->city}} required />
                                </div>
                                <label class="col-sm-1 col-form-label">Address :</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="providerAddress" name="providerAddress" value = {{$provider->address}} required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="filename" class="col-sm-2 col-form-label">Add Images</label>
                                <div class="col-sm-10">
                                    <div class="input-group control-group increment" >
                                        <input type="file" name="filename[]" id="filename[]" multiple class="form-control">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row m-20-top">
                            <div class="col-sm-12">
                                <button type="submit" name="submitBtn" class="btn btn-primary pull-right"><i class="fa fa-pencil-square">&nbsp;</i>Update Information</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('additional-scripts')
    <script>
        var map, infoWindow;
        var address = "";
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 6
            });
            var geocoder = new google.maps.Geocoder;
            var infowindow = new google.maps.InfoWindow;

            infoWindow = new google.maps.InfoWindow;

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Location found.');
                    infoWindow.open(map);
                    map.setCenter(pos);
                    map.setZoom(11);
                    geocodeLatLng(geocoder, map, infowindow, pos);
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }

        function geocodeLatLng(geocoder, map, infowindow, pos) {
            geocoder.geocode({'location': pos}, function(results, status) {
                if (status === 'OK') {
                    if (results[0]) {
                        var marker = new google.maps.Marker({
                            position: pos,
                            map: map
                        });

                        address = results[0].formatted_address.split(',');
                        let addressLength = address.length;
                        if (addressLength > 2) {
                            let country = address[addressLength - 1];
                            let city = address[addressLength - 2];
                            let streetAddress = address[0] + address[1];
                            $('#providerCity').val(city + ', ' + country);
                            $('#providerAddress').val(streetAddress);
                        }

                        infowindow.setContent(results[0].formatted_address);
                        infowindow.open(map, marker);
                    } else {
                        window.alert('No results found');
                    }
                } else {
                    window.alert('Geocoder failed due to: ' + status);
                }
            });
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }

        $('input[type=radio][name=location-option]').change(function() {
            if ($(this).val() === 'maps') {
                $('#map').show();
                initMap();
            } else if ($(this).val() === 'manual') {
                $('#map').hide();
                $('#providerCity, #providerAddress').val("");
            }
        });
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfsZoOZ9tJ7_btGgqhMrgEPid1fUA4_Rg&callback=initMap">
    </script>
@endsection

