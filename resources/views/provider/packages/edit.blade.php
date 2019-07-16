@extends('provider.layout.provider-main')
@section('header-additional-links')
@endsection
@section('page-breadcrumb')
    <li><i class="fa fa-home"></i><a href="{{ route('provider.dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('packages.index') }}">Packages</a></li>
    <li><a href="#">Edit Package Details</a></li>
@endsection
@section('page-content')
    <div class="panel-form">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2><i class="fa fa-gift" aria-hidden="true"></i> &nbsp;Package</h2>
                <label>Edit Details</label>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel-body">
                    <form action={{ route('packages.update', $package)}} method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <fieldset>
                            <legend>Package Details:</legend>
                            <div class="form-group row">
                                <label for="packageClass" class="col-sm-2 col-form-label">Package Class:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="packageClass" id="packageClass">
                                        <option value="Economy" {{($package->class == 'Economy') ? 'selected' : ''}}>Economy</option>
                                        <option value="Deluxe" {{($package->class == 'Deluxe')  ? 'selected' : ''}}>Deluxe</option>
                                        <option value="Platinum" {{($package->class == 'Platinum')  ? 'selected' : ''}}>Platinum</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="totalDays" class="col-sm-2 col-form-label">How long are you planning to stay?</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="totalDays" id="totalDays">
                                        <option value="14" {{ ($package->totalDays) == 14 ? 'selected': '' }}>14 days or less</option>
                                        <option value="21" {{ ($package->totalDays) == 21 ? 'selected': '' }}>21 days or less</option>
                                        <option value="26" {{ ($package->totalDays) == 26 ? 'selected': '' }}>26 days or less</option>
                                        <option value="30" {{ ($package->totalDays) == 30 ? 'selected': '' }}>30 days or less</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="packageType" class="col-sm-2 col-form-label">Is this a shifting or non-shifting package?</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="packageType" id="packageType">
                                        <option selected value="Shifting" {{ ($package->type) == "Shifting" ? 'selected': '' }}>Shifting - Moving around</option>
                                        <option value="Non-Shifting" {{ ($package->type) == "Non-Shifting" ? 'selected': '' }}>Non-Shifting - Set to one location</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="route" class="col-sm-2 col-form-label">What is your route?</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="route" id="route">
                                        <option value="Makkah>Hajj>Medina {{ ($package->route == 'Makkah>Hajj>Medina') ? 'selected' : '' }}">Makkah&gt;Hajj&gt;Medina</option>
                                        <option value="Makkah>Hajj>Jeddah" {{ ($package->route == 'Makkah>Hajj>Jeddah') ? 'selected' : '' }}>Makkah&gt;Hajj&gt;Jeddah</option>
                                        <option value="Medina>Makkah>Hajj>Makkah" {{ ($package->route == 'Medina>Makkah>Hajj>Makkah') ? 'selected' : '' }}>Medina&gt;Makkah&gt;Hajj&gt;Makkah</option>
                                        <option value="Medina>Azeezia>Hajj>Azeezia" {{ ($package->route == 'Medina>Azeezia>Hajj>Azeezia') ? 'selected' : '' }}>Medina&gt;Azeezia&gt;Hajj&gt;Azeezia</option>
                                        <option value="Medina>Shisha>Hajj>Shisha" {{ ($package->route == 'Medina>Shisha>Hajj>Shisha') ? 'selected' : '' }}>Medina&gt;Shisha&gt;Hajj&gt;Shisha</option>
                                        <option value="Medina>Makkah>Hajj>Jeddah" {{ ($package->route == 'Medina>Makkah>Hajj>Jeddah') ? 'selected' : '' }}>Medina&gt;Makkah&gt;Hajj&gt;Jeddah</option>
                                        <option value="Medina>Makkah>Shisha>Hajj>Shisha" {{ ($package->route == 'Medina>Makkah>Shisha>Hajj>Shisha') ? 'selected' : '' }}>Medina&gt;Makkah&gt;Shisha&gt;Hajj&gt;Shisha</option>
                                        <option value="Medina>Makkah H1>Makkah H2>Hajj>Makkah H2" {{ ($package->route == 'Medina>Makkah H1>Makkah H2>Hajj>Makkah H2') ? 'selected' : '' }}>Medina&gt;Makkah H1&gt;Makkah H2&gt;Hajj&gt;Makkah H2"</option>
                                        <option value="Makkah H1>Makkah H2>Hajj>Makkah H2>Medina" {{ ($package->route == 'Makkah H1>Makkah H2>Hajj>Makkah H2>Medina') ? 'selected' : '' }}>Makkah H1&gt;Makkah H2&gt;Hajj&gt;Makkah H2&gt;Medina</option>
                                        <option value="Makkah H1>Makkah H2>Hajj>Medina" {{ ($package->route == 'Makkah H1>Makkah H2>Hajj>Medina') ? 'selected' : '' }}>Makkah H1&gt;Makkah H2&gt;Hajj&gt;Medina</option>
                                        <option value="Makkah H1>Makkah H2>Hajj>Jeddah" {{ ($package->route == 'Makkah H1>Makkah H2>Hajj>Jeddah') ? 'selected' : '' }}>Makkah H1&gt;Makkah H2&gt;Hajj&gt;Jeddah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="packageStars" class="col-sm-2 col-form-label">What are the stars of the package?</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="packageStars" id="packageStars" value="1">
                                    <div class="starrating risingstar d-flex justify-content-end flex-row-reverse">
                                        <input type="radio" id="star6" name="rating" value="6" {{ $package->packageStars == 6 ? 'checked' : '' }} /><label for="star6" title="6 star"></label>
                                        <input type="radio" id="star5" name="rating" value="5" {{ $package->packageStars == 5 ? 'checked' : '' }} /><label for="star5" title="5 star"></label>
                                        <input type="radio" id="star4" name="rating" value="4" {{ $package->packageStars == 4 ? 'checked' : '' }} /><label for="star4" title="4 star"></label>
                                        <input type="radio" id="star3" name="rating" value="3" {{ $package->packageStars == 3 ? 'checked' : '' }} /><label for="star3" title="3 star"></label>
                                        <input type="radio" id="star2" name="rating" value="2" {{ $package->packageStars == 2 ? 'checked' : '' }} /><label for="star2" title="2 star"></label>
                                        <input type="radio" id="star1" name="rating" value="1" {{ $package->packageStars == 1 ? 'checked' : '' }} /><label for="star1" title="1 star"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="packageDetails" class="col-sm-2 col-form-label">Package Details</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="packageDetails" name="packageDetails" rows="10" placeholder="Package Details" >{{ $package->package_details}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="departureDate" class="col-sm-2 col-form-label">Set your Departure Date</label>
                                <div class="col-sm-10">
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="date" class="form-control" name="departureDate" id="departureDate" value = {{$package->departureDate}} >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="arrivalDate" class="col-sm-2 col-form-label">Set your Return Date</label>
                                <div class="col-sm-10">
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="date" class="form-control" name="arrivalDate" id="arrivalDate" value = {{$package->arrivalDate}}>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="daysMakkah" class="col-sm-2 col-form-label">No of Nights in Makkah</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="daysMakkah" name="daysMakkah" value = {{$package->makkahDays}} >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="daysMedina" class="col-sm-2 col-form-label">No of Nights in Medina</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="daysMedina" name="daysMedina" value = {{$package->medinaDays}} >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="roomType" class="col-sm-2 col-form-label">Room Type :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="roomType" id="roomType" >
                                        <option selected disabled>Package Beds</option>
                                        <option value="double" {{ $package->roomType == 'double' ? 'selected' : '' }}>Double (2)</option>
                                        <option value="triple" {{ $package->roomType == 'triple' ? 'selected' : '' }}>Triple (3)</option>
                                        <option value="quadruple" {{ $package->roomType == 'quadruple' ? 'selected' : '' }}>Quadruple (4) </option>
                                        <option value="quintuple" {{ $package->roomType == 'quintuple' ? 'selected' : '' }}>Quintuple (5)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-sm-2 col-form-label">Price per person</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">£</span>
                                        </div>
                                        <input type="number" class="form-control" id="price" name="price" value = {{$package->price}} >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="infantDiscount" class="col-sm-2 col-form-label">Discount for Infant child (in percentage)</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">%</span>
                                        </div>
                                        <input type="number" class="form-control" id="infantDiscount" name="infantDiscount" value = {{$package->infantDiscount}} >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="toddlerDiscount" class="col-sm-2 col-form-label">Discount for Toddler child (in percentage)</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">%</span>
                                        </div>
                                        <input type="number" class="form-control" id="toddlerDiscount" name="toddlerDiscount" value = {{$package->toddlerDiscount}} >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="overFiveDiscount" class="col-sm-2 col-form-label">Discount for Over 5’s (in percentage)</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">%</span>
                                        </div>
                                        <input type="number" class="form-control" id="overFiveDiscount" name="overFiveDiscount" value = {{$package->overFiveDiscount}} >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">Tick the features offered in the Package?</div>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="visa" name="visa"  {{ $package->visa == 1 ? 'checked' : ''}} onclick="return false;">
                                        <label class="form-check-label" for="visa">
                                            Visa
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="food" name="food"  {{ $package->food == 1 ? 'checked' : ''}} onclick="return false;">
                                        <label class="form-check-label" for="food">
                                            Food
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="draft" name="draft"  {{ $package->draft == 1 ? 'checked' : ''}} onclick="return false;">
                                        <label class="form-check-label" for="draft">
                                            Draft
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="qurbani" name="qurbani"  {{ $package->qurbani == 1 ? 'checked' : ''}} onclick="return false;">
                                        <label class="form-check-label" for="qurbani">
                                            Qurbani
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="transfers" name="transfers"  {{ $package->transfers == 1 ? 'checked' : ''}} onclick="return false;">
                                        <label class="form-check-label" for="transfers">
                                            Transfers
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="ziyaarah" name="ziyaarah"  {{ $package->ziyaarah == 1 ? 'checked' : ''}} onclick="return false;">
                                        <label class="form-check-label" for="ziyaarah">
                                            Ziyaarah
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="flightId" class="col-sm-2 col-form-label">Airline Name</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="flightId" id="flightId">
                                        <option selected disabled>Flight</option>
                                        @foreach($flights as $flight)
                                            <option value="{{$flight->id}}" {{ $flight == $package->flight ? 'selected' : ''}}>
                                                {{$flight->airlineName}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hotelId" class="col-sm-2 col-form-label">Hotel Name</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="hotelId" id="hotelId">
                                        <option selected disabled>Hotel</option>
                                        @foreach($hotels as $hotel)
                                            <option value="{{$hotel->id}}" {{ $hotel == $package->hotel ? 'selected' : ''}}>
                                                {{$hotel->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row">
                            @foreach($package->pictures as $picture)
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <a href="{{ asset('images/packages/' . $picture->filename) }}">
                                            <img src="{{ asset('images/packages/' . $picture->filename) }}">
                                            <div class="caption">
                                                <p>Package Image</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group row m-20-top">
                            <div class="col-sm-12">
                                <button type="submit" name="submitBtn" class="btn btn-primary pull-right"><i class="fa fa-pencil-square">&nbsp;</i> Update Package</button>
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
        //replace options function
        (function($, window) {
            $.fn.replaceOptions = function(options) {
                var self, $option;

                this.empty();
                self = this;
                $.each(options, function(index, option) {
                    $option = $("<option></option>")
                        .attr("value", option.value)
                        .text(option.text);
                    self.append($option);
                });
            };
        })(jQuery, window);

        $(document).ready(function () {
            var shiftingOptions = [
                {text: "Medina>Makkah>Shisha>Hajj>Shisha", value: "Medina>Makkah>Shisha>Hajj>Shisha"},
                {text: "Medina>Makkah H1>Makkah H2>Hajj>Makkah H2", value: "Medina>Makkah H1>Makkah H2>Hajj>Makkah H2"},
                {text: "Makkah H1>Makkah H2>Hajj>Makkah H2>Medina", value: "Makkah H1>Makkah H2>Hajj>Makkah H2>Medina"},
                {text: "Makkah H1>Makkah H2>Hajj>Medina", value: "Makkah H1>Makkah H2>Hajj>Medina"},
                {text: "Makkah H1>Makkah H2>Hajj>Jeddah", value: "Makkah H1>Makkah H2>Hajj>Jeddah"}
            ];
            var nonShiftingOptions = [
                {text: "Makkah>Hajj>Medina", value: "Makkah>Hajj>Medina"},
                {text: "Makkah>Hajj>Jeddah", value: "Makkah>Hajj>Jeddah"},
                {text: "Medina>Makkah>Hajj>Makkah", value: "Medina>Makkah>Hajj>Makkah"},
                {text: "Medina>Azeezia>Hajj>Azeezia", value: "Medina>Azeezia>Hajj>Azeezia"},
                {text: "Medina>Shisha>Hajj>Shisha", value: "Medina>Shisha>Hajj>Shisha"},
                {text: "Medina>Makkah>Hajj>Jeddah", value: "Medina>Makkah>Hajj>Jeddah"}
            ];


            $("#packageType").change(function() {
                let route = $('#route');
                if ($(this).val() === 'Shifting') {
                    route.replaceOptions(shiftingOptions);
                } else {
                    route.replaceOptions(nonShiftingOptions);
                }
            });

            $('input[type=radio][name=rating]').change(function() {
                $('#packageStars').val($(this).val());
            });
        });
        
        function initializeStars() {
            let packageType = $("#packageType");
            let route = $('#route');

            if (packageType.val() === 'Shifting') {
                route.replaceOptions(shiftingOptions);
            } else {
                route.replaceOptions(nonShiftingOptions);
            }
        }

        initializeStars();
    </script>
@endsection