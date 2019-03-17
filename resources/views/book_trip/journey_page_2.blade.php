@extends('layout.master')
@section('header-additional-links')
    <link href="{{ asset('css/breadcrumbs.css') }}" rel="stylesheet">
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
                            <li><a href="">Your Booking</a></li>
                            <li><a class="current" href="">Your Quotes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="journey-page-form form-text-style">
                <form>
                    <fieldset>
                        <div class="col-sm-10 custom-hr"></div>
                        <legend>Your Trip Details :</legend>
                        <div class="form-group row">
                            <div class="col-sm-5">Do you know the number of people travelling? Tick Yes or NO</div>
                            <div class="col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="noOfAdults" class="col-sm-5 col-form-label">Number of adults travelling</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="noOfAdults" name="noOfAdults" placeholder="5">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-5">Are their any children travelling? Tick Yes or NO</div>
                            <div class="col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" name="childrenTravelling" id="childrenTravelling">
                                    <label class="form-check-label" for="childrenTravelling">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" name="childrenTravelling" id="childrenTravelling">
                                    <label class="form-check-label" for="childrenTravelling">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="childrenState" class="col-sm-5 col-form-label">Please choose from the list:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="childrenState" id="childrenState">
                                    <option selected disabled>None</option>
                                    <option>Toddler</option>
                                    <option>Infant</option>
                                    <option>Over 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="noOfPeople" class="col-sm-5 col-form-label">Number of people travelling in total</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="noOfPeople" name="noOfPeople" placeholder="5">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Package Details:</legend>
                        <div class="col-sm-10 custom-hr"></div>
                        <div class="form-group row">
                            <label for="packageType" class="col-sm-5 col-form-label">Please choose from the list:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="packageType" id="packageType">
                                    <option selected disabled>Choose Package</option>
                                    <option>Premium - Economical</option>
                                    <option>Premium - Valuable</option>
                                    <option>Deluxe - Reasonably priced</option>
                                    <option>Platinum - Executive Price</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="shiftingPackage" class="col-sm-5 col-form-label">Is this a shifting or non-shifting package ? Please choose from the list</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="shiftingPackage" id="shiftingPackage">
                                    <option selected disabled>Select</option>
                                    <option value="shifting">S - Moving around</option>
                                    <option value="non-shifting">NS - Set to one location</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-5">Where would you like to go first ? Tick the checkbox</div>
                            <div class="col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" value="Makkah" name="firstRoute" id="firstRoute" />
                                    <label class="form-check-label" for="firstRoute">
                                        Makkah
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" value="Medina" name="firstRoute" id="firstRoute">
                                    <label class="form-check-label" for="firstRoute">
                                        Medina
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="selectedRoute" class="col-sm-5 col-form-label">Preffered Route:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="selectedRoute" id="selectedRoute">
                                    <option selected disabled>Choose your route :</option>
                                    <option>Mekkah- Al-Jamun - Khulais - Medina</option>
                                    <option>Mekkah- Al-Jamun - Alyutamah - Medina</option>
                                    <option>Medina - Alyutamah - Al-Jamun - Mekkah</option>
                                    <option>Medina - Khulais - Al-Jamun - Mekkah</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="userExperience" class="col-sm-5 col-form-label">Is this your first time ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="userExperience" id="userExperience">
                                    <option selected disabled>Choose an option</option>
                                    <option>Yes, first-time</option>
                                    <option>No, I've been before</option>
                                    <option>No, experienced</option>
                                    <option>No, veteran</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="visitDuration" class="col-sm-5 col-form-label">How long are you planning to stay ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="visitDuration" id="visitDuration">
                                    <option selected disabled>Set your stay duration</option>
                                    <option value="14">14 days or less</option>
                                    <option value="21">21 days or less</option>
                                    <option value="26">26 days or less</option>
                                    <option value="30">30 days or less</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="preferredBudget" class="col-sm-5 col-form-label">What is your budget ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="preferredBudget" id="preferredBudget">
                                    <option selected disabled>What is your budget ?</option>
                                    <option value="4000">4000</option>
                                    <option value="4500">4500</option>
                                    <option value="5000">5000</option>
                                    <option value="6000">6000</option>
                                    <option value="7000">7000</option>
                                    <option value="8000">8000 or above</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="wheelchairAccessReason" class="col-sm-5 col-form-label">Do you or anyone require wheelchair access ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="wheelchairAccessReason" id="wheelchairAccessReason">
                                    <option selected disabled>Please choose</option>
                                    <option value="Yes for me">Yes, it's for me</option>
                                    <option value="Yes for someone">Yes, it's for someone else</option>
                                    <option value="No">No, thankyou</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary pull-right">Proceed <i class="fa-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection