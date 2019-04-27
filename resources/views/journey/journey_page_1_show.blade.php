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
                    <input type="hidden" id="userinfo_page" value="userinfo_page_one" />
                    <fieldset>
                        <div class="col-sm-10 custom-hr"></div>
                        <legend>Your Trip Details :</legend>
                        <div class="form-group row">
                            <div class="col-sm-5">Do you know the number of people travelling? Tick Yes or NO</div>
                            <div class="col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" name="noOfPeopleBool" id="form_field_gridCheck1" value = {{$journey->no_of_people_bool}} readonly>
                                    <label class="form-check-label" for="gridCheck1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" name="noOfPeopleBool" id="form_field_gridCheck1" value = {{$journey->no_of_people_bool}} readonly>
                                    <label class="form-check-label" for="gridCheck1">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_noOfPeople" class="col-sm-5 col-form-label">Number of people travelling in total</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="form_field_noOfPeople" name="noOfPeople" placeholder="5" value = {{$journey->no_of_people}} readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="noOfAdults" class="col-sm-5 col-form-label">Number of adults travelling</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="form_field_noOfAdults" name="noOfAdults" placeholder="5" value = {{$journey->no_of_adults}} readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-5">Are their any children travelling? Tick Yes or NO</div>
                            <div class="col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" name="childrenTravelling" id="form_field_childrenTravelling" value = {{$journey->children_travelling}} readonly>
                                    <label class="form-check-label" for="form_field_childrenTravelling">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" name="childrenTravelling" id="form_field_childrenTravelling" value = {{$journey->children_travelling}} readonly>
                                    <label class="form-check-label" for="form_field_childrenTravelling">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_childrenState" class="col-sm-5 col-form-label">Please choose from the list:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="childrenState" id="form_field_childrenState" value = {{$journey->children_state}} readonly>
                                    <option selected disabled>None</option>
                                    <option>Toddler</option>
                                    <option>Infant</option>
                                    <option>Over 5</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Package Details:</legend>
                        <div class="col-sm-10 custom-hr"></div>
                        <div class="form-group row">
                            <label for="form_field_packageType" class="col-sm-5 col-form-label">Please choose from the list:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="packageClass" id="form_field_packageClass" value = {{$journey->package_class}} readonly>
                                    <option selected disabled>Choose Package</option>
                                    <option value = "Economy">Premium - Economical</option>
                                    <option value = "Premium">Premium - Valuable</option>
                                    <option value = "Deluxe">Deluxe - Reasonably priced</option>
                                    <option value = "Premium">Platinum - Executive Price</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_shiftingPackage" class="col-sm-5 col-form-label">Is this a shifting or non-shifting package ? Please choose from the list</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="packageType" id="form_field_packageType" value = {{$journey->package_type}} readonly>
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
                                    <input class="form-check-input custom-checkbox" type="checkbox" value="Makkah/Medina" name="route" id="form_field_route" value = {{$journey->route}} readonly>
                                    <label class="form-check-label" for="form_field_firstRoute">
                                        Makkah
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" value="Medina/Makkah" name="route" id="form_field_route" value = {{$journey->route}} readonly>
                                    <label class="form-check-label" for="form_field_firstRoute">
                                        Medina
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_selectedRoute" class="col-sm-5 col-form-label">Preffered Route:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="selectedRoute" id="form_field_selectedRoute" value = {{$journey->selected_route}} readonly>
                                    <option selected disabled>Choose your route :</option>
                                    <option>Mekkah- Al-Jamun - Khulais - Medina</option>
                                    <option>Mekkah- Al-Jamun - Alyutamah - Medina</option>
                                    <option>Medina - Alyutamah - Al-Jamun - Mekkah</option>
                                    <option>Medina - Khulais - Al-Jamun - Mekkah</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_userExperience" class="col-sm-5 col-form-label">Is this your first time ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="userExperience" id="form_field_userExperience" value = {{$journey->user_experience}} readonly>
                                    <option selected disabled>Choose an option</option>
                                    <option>Yes, first-time</option>
                                    <option>No, I've been before</option>
                                    <option>No, experienced</option>
                                    <option>No, veteran</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_visitDuration" class="col-sm-5 col-form-label">How long are you planning to stay ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="total_days" id="form_field_total_days" value = {{$journey->total_days}} readonly>
                                    <option selected disabled>Set your stay duration</option>
                                    <option value="14">14 days or less</option>
                                    <option value="21">21 days or less</option>
                                    <option value="26">26 days or less</option>
                                    <option value="30">30 days or less</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_preferredBudget" class="col-sm-5 col-form-label">What is your budget ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="preferredBudget" id="form_field_preferredBudget" value = {{$journey->prefferred_budget}} readonly>
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
                            <label for="form_field_wheelchairAccessReason" class="col-sm-5 col-form-label">Do you or anyone require wheelchair access ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="wheelchairAccessReason" id="form_field_wheelchairAccessReason" value = {{$journey->wheelchair_access}} readonly>
                                    <option selected disabled>Please choose</option>
                                    <option value="Yes for me">Yes, it's for me</option>
                                    <option value="Yes for someone">Yes, it's for someone else</option>
                                    <option value="No">No, thankyou</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Timeline:</legend>
                        <div class="col-sm-10 custom-hr"></div>
                        <div class="form-group row">
                            <label for="form_field_visitTimeline" class="col-sm-5 col-form-label">When would you like to go ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="visitTimeline" id="form_field_visitTimeline" value = {{$journey->visitTimeline}} readonly>
                                    <option selected disabled>Time of your trip</option>
                                    <option>I want to go in July 2019</option>
                                    <option>I want to go in August 2019</option>
                                    <option>I want to go for Hajj 2019</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_preferredDepartureDate" class="col-sm-5 col-form-label">What is your preferred date of Departure and Arrival ?</label>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_preferredDepartureDate" class="col-sm-5 col-form-label">Departure Date :</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="date" name="preferredDepartureDate" id="form_field_preferredDepartureDate" value = {{$journey->departure_date}} readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_preferredArrivalDate" class="col-sm-5 col-form-label">Arrival Date :</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="date" name="preferredArrivalDate" id="form_field_preferredArrivalDate" value = {{$journey->arrival_date}} readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_travellingWith" class="col-sm-5 col-form-label">Who are you going with)(grid) ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="travellingWith" id="form_field_travellingWith" value = {{$journey->travelling_with}} readonly>
                                    <option selected disabled>Choose from Grid</option>
                                    <option>Spouse</option>
                                    <option>Spouse + Children</option>
                                    <option>Mother + Father</option>
                                    <option>Mother</option>
                                    <option>Father</option>
                                    <option>Both (Mother + Father)</option>
                                    <option>Father + Immediate Family</option>
                                    <option>Rlatives</option>
                                    <option>Friends</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-5">Do you want to share a room ?</div>
                            <div class="col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" value="1" name="shareRoom" id="form_field_shareRoom" value = {{$journey->share_room_bool}} readonly>
                                    <label class="form-check-label" for="form_field_shareRoom">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" value="0" name="shareRoom" id="form_field_shareRoom" value = {{$journey->share_room_bool}} readonly>
                                    <label class="form-check-label" for="form_field_shareRoom">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_bedroomSharing" class="col-sm-5 col-form-label">Bedroom Sharing:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="bedroomSharing" id="form_field_bedroomSharing" value = {{$journey->share_room}} readonly>
                                    <option selected disabled>Please choose</option>
                                    <option value="3">3 sharing</option>
                                    <option value="4">4 sharing</option>
                                    <option value="5">5 sharing</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_noOfRoom" class="col-sm-5 col-form-label">The number of rooms you require:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="noOfRoom" id="form_field_noOfRoom" value = {{$journey->no_of_rooms}} readonly>
                                    <option value="1" selected>1 Room</option>
                                    <option value="1">1 Room</option>
                                    <option value="2">2 Room</option>
                                    <option value="3">3 Room</option>
                                    <option value="4">4 Room</option>
                                    <option value="5">5 Room</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_peopleStayingEachRoom" class="col-sm-5 col-form-label">How many people will be staying in each room ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="peopleStayingEachRoom" id="form_field_peopleStayingEachRoom" value = {{$journey->people_in_rooms}} readonly>
                                    <option value="1" selected>1 Room</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_hotelStars" class="col-sm-5 col-form-label">What star hotels are you looking for ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="hotelStars" id="form_field_hotelStars" value = {{$journey->hotel_stars}} readonly>
                                    <option value="1" selected>2 Star</option>
                                    <option value="2">2 Star</option>
                                    <option value="3">3 Star</option>
                                    <option value="4">4 Star</option>
                                    <option value="5">5 Star</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_typeOfFlight" class="col-sm-5 col-form-label">What type of flight are you looking for ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="typeOfFlight" id="form_field_typeOfFlight" value = {{$journey->flight_type}} readonly>
                                    <option value="1" selected>Direct</option>
                                    <option value="2">Indirect</option>
                                    <option value="3">Get me the best package</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('body-additional-js-links')
    <script src="{{ asset('js/formData.js') }}"></script>
@endsection