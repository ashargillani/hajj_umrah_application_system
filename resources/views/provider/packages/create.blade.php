@extends('provider.layout.provider-main')
@section('page-breadcrumb')
    <li><i class="fa fa-home"></i><a href="{{ route('provider.dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('packages.index') }}">Packages</a></li>
    <li><a href="{{ route('packages.create') }}">Add Package</a></li>
@endsection
@section('page-content')
    <div class="panel-form">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2><i class="fa fa-gift" aria-hidden="true"></i> &nbsp;Package</h2>
                <label>Add New Package</label>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel-body">
                    <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group row">
                                <label for="packageClass" class="col-sm-2 col-form-label">Package Class:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="packageClass" id="packageClass" required>
                                        <option selected disabled>None</option>
                                        <option value="Economy">Economy</option>
                                        <option value="Deluxe">Deluxe</option>
                                        <option value="Platinum">Platinum</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="totalDays" class="col-sm-2 col-form-label">What is the length of your package ?</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="totalDays" id="totalDays" required>
                                        <option selected disabled>Set your stay duration</option>
                                        <option value="14">14 days or less</option>
                                        <option value="21">21 days or less</option>
                                        <option value="26">26 days or less</option>
                                        <option value="30">30 days or less</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="packageType" class="col-sm-2 col-form-label">Is this a shifting or non-shifting package?</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="packageType" id="packageType" required>
                                        <option selected value="Shifting">Shifting - Moving around</option>
                                        <option value="Non-Shifting">Non-Shifting - Set to one location</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="route" class="col-sm-2 col-form-label">What route will your group take ?</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="route" id="route" required>
                                        <option value="Medina>Makkah>Shisha>Hajj>Shisha">Medina>Makkah>Shisha>Hajj>Shisha</option>
                                        <option value="Medina>Makkah H1>Makkah H2>Hajj>Makkah H2">Medina>Makkah H1>Makkah H2>Hajj>Makkah H2"</option>
                                        <option value="Makkah H1>Makkah H2>Hajj>Makkah H2>Medina">Makkah H1>Makkah H2>Hajj>Makkah H2>Medina</option>
                                        <option value="Makkah H1>Makkah H2>Hajj>Medina">Makkah H1>Makkah H2>Hajj>Medina</option>
                                        <option value="Makkah H1>Makkah H2>Hajj>Jeddah">Makkah H1>Makkah H2>Hajj>Jeddah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="packageStars" class="col-sm-2 col-form-label">What are the stars of the package?</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="packageStars" id="packageStars" value="1">
                                    <div class="starrating risingstar d-flex justify-content-end flex-row-reverse">
                                        <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="6 star"></label>
                                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                                        <input type="radio" id="star1" name="rating" value="1" checked /><label for="star1" title="1 star"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="packageDetails" class="col-sm-2 col-form-label">Package Details</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="packageDetails" name="packageDetails" rows="10" placeholder="Package Details"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="departureDate" class="col-sm-2 col-form-label">Set your Departure Date</label>
                                <div class="col-sm-10">
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="date" class="form-control" name="departureDate" id="departureDate" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="arrivalDate" class="col-sm-2 col-form-label">Set your Return Date</label>
                                <div class="col-sm-10">
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="date" class="form-control" name="arrivalDate" id="arrivalDate" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="daysMakkah" class="col-sm-2 col-form-label">No of nights in Makkah</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="daysMakkah" name="daysMakkah" placeholder="15" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="daysMedina" class="col-sm-2 col-form-label">No of nights in Medina</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="daysMedina" name="daysMedina" placeholder="5" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="roomType" class="col-sm-2 col-form-label">Room Type :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="roomType" id="roomType" required>
                                        <option selected disabled>Package Beds</option>
                                        <option value="double">Double (2)</option>
                                        <option value="triple">Triple (3)</option>
                                        <option value="quadruple">Quadruple (4) </option>
                                        <option value="quintuple">Quintuple (5)</option>
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
                                        <input type="number" class="form-control" id="price" name="price" placeholder="2000" required>
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
                                        <input type="number" class="form-control" id="infantDiscount" name="infantDiscount" placeholder="30" value="0">
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
                                        <input type="number" class="form-control" id="toddlerDiscount" name="toddlerDiscount" placeholder="30" value="0">
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
                                        <input type="number" class="form-control" id="overFiveDiscount" name="overFiveDiscount" placeholder="30" value="0">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">Tick the features offered in the Package?</div>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="visa" name="visa">
                                        <label class="form-check-label" for="visa">
                                            Visa
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="food" name="food">
                                        <label class="form-check-label" for="food">
                                            Food
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="draft" name="draft">
                                        <label class="form-check-label" for="draft">
                                            Draft
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="qurbani" name="qurbani">
                                        <label class="form-check-label" for="qurbani">
                                            Qurbani
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="transfers" name="transfers">
                                        <label class="form-check-label" for="transfers">
                                            Transfers
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="ziyaarah" name="ziyaarah">
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
                                        @foreach($data['flights'] as $flight)
                                            <option value="{{$flight->id}}">
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
                                        @foreach($data['hotels'] as $hotel)
                                            <option value="{{$hotel->id}}">
                                                {{$hotel->name}}
                                            </option>
                                        @endforeach
                                    </select>
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
                                <button type="submit" name="submitBtn" class="btn btn-primary pull-right"><i class="fa fa-plus">&nbsp;</i>Add Package</button>
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
    </script>
@endsection

