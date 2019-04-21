@extends('provider.layout.provider-main')
@section('page-breadcrumb')
    <li><i class="fa fa-home"></i><a href="{{ route('provider.dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('packages.index') }}">Packages</a></li>
    <li><a href="#">Package Details</a></li>
@endsection
@section('page-content')
    <div class="panel-form">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2><i class="fa fa-gift" aria-hidden="true"></i> &nbsp;Flight</h2>
                <label>Update Package</label>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel-body">
                    <form >
                        <fieldset>
                            <legend>Edit Package:</legend>
                            <div class="form-group row">
                                <label for="packageClass" class="col-sm-2 col-form-label">Package Class:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="packageClass" id="packageClass" readonly>
                                        <option value="Economy" {{$package->class == 'Economy'}}>Economy</option>
                                        <option value="Deluxe" {{$package->class == 'Deluxe'}}>Deluxe</option>
                                        <option value="Platinum" {{$package->class == 'Platinum'}}>Platinum</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="totalDays" class="col-sm-2 col-form-label">How long are you planning to stay?</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="totalDays" id="totalDays" readonly>
                                        <option value="14">14 days or less</option>
                                        <option value="21">21 days or less</option>
                                        <option value="26">26 days or less</option>
                                        <option value="30">30 days or less</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="route" class="col-sm-2 col-form-label">What is your route?</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="route" id="route" readonly>
                                        <option value="Makkah/Medina" {{$package->route == 'Makkah/Medina'}}>Makkah/Medina</option>
                                        <option value="Medina/Makkah" {{$package->route == 'Medina/Makkah'}}>Medina/Makkah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="packageStars" class="col-sm-2 col-form-label">What are the stars of the package?</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="packageStars" id="packageStars" readonly>
                                        <option selected disabled>Package Stars</option>
                                        <option value="2">2 Star</option>
                                        <option value="3">3 Star</option>
                                        <option value="4">4 Star</option>
                                        <option value="5">5 Star</option>
                                        <option value="6">6 Star</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="packageType" class="col-sm-2 col-form-label">Is this a shifting or non-shifting package?</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="packageType" id="packageType" readonly>
                                        <option selected disabled>Select</option>
                                        <option value="Shifting">Shifting - Moving around</option>
                                        <option value="Non-Shifting">Non-Shifting - Set to one location</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="departureDate" class="col-sm-2 col-form-label">Set your Departure Date</label>
                                <div class="col-sm-10">
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="date" class="form-control" name="departureDate" id="departureDate" value = {{$package->departureDate}} readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="arrivalDate" class="col-sm-2 col-form-label">Set your Arrival Date</label>
                                <div class="col-sm-10">
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="date" class="form-control" name="arrivalDate" id="arrivalDate" value = {{$package->arrivalDate}} readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="daysMakkah" class="col-sm-2 col-form-label">No of Days in Makkah</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="daysMakkah" name="daysMakkah" value = {{$package->makkahDays}} readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="daysMedina" class="col-sm-2 col-form-label">No of Days in Medina</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="daysMedina" name="daysMedina" value = {{$package->medinaDays}} readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="packageBeds" class="col-sm-2 col-form-label">How many beds in the Package?</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="packageBeds" id="packageBeds" readonly>
                                        <option selected disabled>Package Beds</option>
                                        <option value="2">2 Bed</option>
                                        <option value="3">3 Bed</option>
                                        <option value="4">4 Bed</option>
                                        <option value="5">5 Bed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="price" name="price" value = {{$package->price}} readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="infantDiscount" class="col-sm-2 col-form-label">Discount Percentage for Infant</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="infantDiscount" name="infantDiscount" value = {{$package->infantDiscount}} readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="toddlerDiscount" class="col-sm-2 col-form-label">Discount Percentage for Toddler</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="toddlerDiscount" name="toddlerDiscount" value = {{$package->toddlerDiscount}} readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="overFiveDiscount" class="col-sm-2 col-form-label">Discount Percentage for Over 5</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="overFiveDiscount" name="overFiveDiscount" value = {{$package->overFiveDiscount}} readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">Tick the features offered in the Package?</div>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="visa" name="visa" readonly>
                                        <label class="form-check-label" for="gridCheck1">
                                            Visa
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="food" name="food" readonly>
                                        <label class="form-check-label" for="gridCheck1">
                                            Food
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="draft" name="draft" readonly>
                                        <label class="form-check-label" for="gridCheck1">
                                            Draft
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="qurbani" name="qurbani" readonly>
                                        <label class="form-check-label" for="gridCheck1">
                                            Qurbani
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="transfers" name="transfers" readonly>
                                        <label class="form-check-label" for="gridCheck1">
                                            Transfers
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="ziyaarah" name="ziyaarah" readonly>
                                        <label class="form-check-label" for="gridCheck1">
                                            Ziyaarah
                                        </label>
                                    </div>
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
                    </form>
                </div>
            </div>
        </div>
        <a href="{{ route('packages.edit', $package) }}" class="btn btn-success">Edit</a>
        <form action="{{route('packages.destroy', $package)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" name="deleteBtn" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection



