@extends('layout.master')
@section('header-additional-links')
    <link href="{{ asset('css/breadcrumbs.css') }}" rel="stylesheet">
@endsection
@section('page-content')
    <div class="container-fluid margin-left-right-10">
        <div class="row">
            <div class="full-width-breadcrumbs margin-top-bottom-10">
                <div class="col col-sm-12">
                    <ul id="breadcrumbs-one">
                        <li><a href="">Your Trip</a></li>
                        <li><a href="">Your Details</a></li>
                        <li><a href="">Your Booking</a></li>
                        <li><a class="current" href="">Your Quotes</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="new-package-page-form">
            <form action="{{ route('packages.create') }}" method="POST">
                {{ csrf_field() }}
                <fieldset>
                    <legend>Your Package Details :</legend>
                    <div class="form-group row">
                        <label for="packageClass" class="col-sm-4 col-form-label">Package Class:</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="packageClass" id="packageClass">
                                <option selected disabled>None</option>
                                <option value="Economy">Economy</option>
                                <option value="Deluxe">Deluxe</option>
                                <option value="Platinum">Platinum</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="totalDays" class="col-sm-4 col-form-label">How long are you planning to stay?</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="totalDays" id="totalDays">
                                <option selected disabled>Set your stay duration</option>
                                <option value="14">14 days or less</option>
                                <option value="21">21 days or less</option>
                                <option value="26">26 days or less</option>
                                <option value="30">30 days or less</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="route" class="col-sm-4 col-form-label">What is your route?</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="route" id="route">
                                <option selected disabled>Set your route</option>
                                <option value="Makkah/Medina">Makkah/Medina</option>
                                <option value="Medina/Makkah">Medina/Makkah</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="packageStars" class="col-sm-4 col-form-label">What are the stars of the package?</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="packageStars" id="packageStars">
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
                        <label for="packageType" class="col-sm-4 col-form-label">Is this a shifting or non-shifting package?</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="packageType" id="packageType">
                                <option selected disabled>Select</option>
                                <option value="Shifting">Shifting - Moving around</option>
                                <option value="Non-Shifting">Non-Shifting - Set to one location</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="departureDate" class="col-sm-4 col-form-label">Set your Departure Date</label>
                        <div class="col-sm-4">
                            <div class="input-group date" data-provide="datepicker">
                                <input type="date" class="form-control" name="departureDate" id="departureDate">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="arrivalDate" class="col-sm-4 col-form-label">Set your Arrival Date</label>
                        <div class="col-sm-4">
                            <div class="input-group date" data-provide="datepicker">
                                <input type="date" class="form-control" name="arrivalDate" id="arrivalDate">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="daysMakkah" class="col-sm-4 col-form-label">No of Days in Makkah</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="daysMakkah" name="daysMakkah" placeholder="15">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="daysMedina" class="col-sm-4 col-form-label">No of Days in Medina</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="daysMedina" name="daysMedina" placeholder="5">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="flights" class="col-sm-4 col-form-label">Flight</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="flights" name="flights" placeholder="Saudi Airline">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="packageBeds" class="col-sm-4 col-form-label">How many beds in the Package?</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="packageBeds" id="packageBeds">
                                <option selected disabled>Package Beds</option>
                                <option value="2">2 Bed</option>
                                <option value="3">3 Bed</option>
                                <option value="4">4 Bed</option>
                                <option value="5">5 Bed</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-sm-4 col-form-label">Price</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="price" name="price" placeholder="2000">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="infantDiscount" class="col-sm-4 col-form-label">Discount Percentage for Infant</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="infantDiscount" name="infantDiscount" placeholder="30">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="toddlerDiscount" class="col-sm-4 col-form-label">Discount Percentage for Toddler</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="toddlerDiscount" name="toddlerDiscount" placeholder="30">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="overFiveDiscount" class="col-sm-4 col-form-label">Discount Percentage for Over 5</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="overFiveDiscount" name="overFiveDiscount" placeholder="30">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">Tick the features offered in the Package?</div>
                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="visa" name="visa">
                                <label class="form-check-label" for="gridCheck1">
                                    Visa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="food" name="food">
                                <label class="form-check-label" for="gridCheck1">
                                    Food
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="draft" name="draft">
                                <label class="form-check-label" for="gridCheck1">
                                    Draft
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="qurbani" name="qurbani">
                                <label class="form-check-label" for="gridCheck1">
                                    Qurbani
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="transfers" name="transfers">
                                <label class="form-check-label" for="gridCheck1">
                                    Transfers
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="ziyaarah" name="ziyaarah">
                                <label class="form-check-label" for="gridCheck1">
                                    Ziyaarah
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" name="submitBtn" class="btn btn-success" style="float:right;">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection