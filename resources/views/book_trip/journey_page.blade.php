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
                                    <input class="form-check-input custom-checkbox" type="checkbox" id="form_field_gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" id="form_field_gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="noOfAdults" class="col-sm-5 col-form-label">Number of adults travelling</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="form_field_noOfAdults" name="noOfAdults" placeholder="5">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-5">Are their any children travelling? Tick Yes or NO</div>
                            <div class="col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" name="childrenTravelling" id="form_field_childrenTravelling">
                                    <label class="form-check-label" for="form_field_childrenTravelling">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" name="childrenTravelling" id="form_field_childrenTravelling">
                                    <label class="form-check-label" for="form_field_childrenTravelling">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_childrenState" class="col-sm-5 col-form-label">Please choose from the list:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="childrenState" id="form_field_childrenState">
                                    <option selected disabled>None</option>
                                    <option>Toddler</option>
                                    <option>Infant</option>
                                    <option>Over 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_noOfPeople" class="col-sm-5 col-form-label">Number of people travelling in total</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="form_field_noOfPeople" name="noOfPeople" placeholder="5">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Package Details:</legend>
                        <div class="col-sm-10 custom-hr"></div>
                        <div class="form-group row">
                            <label for="form_field_packageType" class="col-sm-5 col-form-label">Please choose from the list:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="packageType" id="form_field_packageType">
                                    <option selected disabled>Choose Package</option>
                                    <option>Premium - Economical</option>
                                    <option>Premium - Valuable</option>
                                    <option>Deluxe - Reasonably priced</option>
                                    <option>Platinum - Executive Price</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_shiftingPackage" class="col-sm-5 col-form-label">Is this a shifting or non-shifting package ? Please choose from the list</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="shiftingPackage" id="form_field_shiftingPackage">
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
                                    <input class="form-check-input custom-checkbox" type="checkbox" value="Makkah" name="firstRoute" id="form_field_firstRoute" />
                                    <label class="form-check-label" for="form_field_firstRoute">
                                        Makkah
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" value="Medina" name="firstRoute" id="form_field_firstRoute">
                                    <label class="form-check-label" for="form_field_firstRoute">
                                        Medina
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_selectedRoute" class="col-sm-5 col-form-label">Preffered Route:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="selectedRoute" id="form_field_selectedRoute">
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
                                <select class="form-control" name="userExperience" id="form_field_userExperience">
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
                                <select class="form-control" name="visitDuration" id="form_field_visitDuration">
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
                                <select class="form-control" name="preferredBudget" id="form_field_preferredBudget">
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
                                <select class="form-control" name="wheelchairAccessReason" id="form_field_wheelchairAccessReason">
                                    <option selected disabled>Please choose</option>
                                    <option value="Yes for me">Yes, it's for me</option>
                                    <option value="Yes for someone">Yes, it's for someone else</option>
                                    <option value="No">No, thankyou</option>
                                </select>
                            </div>
                        </div>
                            <legend>Timeline:</legend>
                            <div class="col-sm-10 custom-hr"></div>
                            <div class="form-group row">
                                <label for="form_field_visitTimeline" class="col-sm-5 col-form-label">When would you like to go ?</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="visitTimeline" id="form_field_visitTimeline">
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
                                    <input class="form-control" type="date" name="preferredDepartureDate" id="form_field_preferredDepartureDate" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_field_preferredArrivalDate" class="col-sm-5 col-form-label">Departure Date :</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="date" name="preferredArrivalDate" id="form_field_preferredArrivalDate" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_field_travellingWith" class="col-sm-5 col-form-label">Who are you going with)(grid) ?</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="visitTimeline" id="form_field_travellingWith">
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
                                        <input class="form-check-input custom-checkbox" type="checkbox" value="Makkah" name="shareRoom" id="form_field_shareRoom" />
                                        <label class="form-check-label" for="form_field_shareRoom">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input custom-checkbox" type="checkbox" value="Medina" name="shareRoom" id="form_field_shareRoom">
                                        <label class="form-check-label" for="form_field_shareRoom">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_field_bedroomSharing" class="col-sm-5 col-form-label">Bedroom Sharing:</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="bedroomSharing" id="form_field_bedroomSharing">
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
                                    <select class="form-control" name="noOfRoom" id="form_field_noOfRoom">
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
                                    <select class="form-control" name="noOfRoom" id="form_field_peopleStayingEachRoom">
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
                                    <select class="form-control" name="noOfRoom" id="form_field_hotelStars">
                                        <option value="1" selected>2 Star</option>
                                        <option value="1">3 Star</option>
                                        <option value="2">4 Star</option>
                                        <option value="3">5 Star</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_field_typeOfFlight" class="col-sm-5 col-form-label">What type of flight are you looking for ?</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="noOfRoom" id="form_field_typeOfFlight">
                                        <option value="1" selected>Direct</option>
                                        <option value="1">Indirect</option>
                                        <option value="2">Get me the best package</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row">
                            <label for="form_field_selectedRoute" class="col-sm-5 col-form-label">Preffered Route:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="selectedRoute" id="form_field_selectedRoute">
                                    <option selected disabled>Choose your route :</option>
                                    <option>Mekkah- Al-Jamun - Khulais - Medina</option>
                                    <option>Mekkah- Al-Jamun - Alyutamah - Medina</option>
                                    <option>Medina - Alyutamah - Al-Jamun - Mekkah</option>
                                    <option>Medina - Khulais - Al-Jamun - Mekkah</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-5">Where would you like to go first ? Tick the checkbox</div>
                            <div class="col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" value="Makkah" name="firstRoute" id="form_field_firstRoute" />
                                    <label class="form-check-label" for="form_field_firstRoute">
                                        Makkah
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" value="Medina" name="firstRoute" id="form_field_firstRoute">
                                    <label class="form-check-label" for="form_field_firstRoute">
                                        Medina
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_prefferedRoute" class="col-sm-5 col-form-label">Preffered Route:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="selectedRoute" id="form_field_prefferedRoute">
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
                                <select class="form-control" name="userExperience" id="form_field_userExperience">
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
                                <select class="form-control" name="visitDuration" id="form_field_visitDuration">
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
                                <select class="form-control" name="preferredBudget" id="form_field_preferredBudget">
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
                                <select class="form-control" name="wheelchairAccessReason" id="form_field_wheelchairAccessReason">
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
                                <select class="form-control" name="visitTimeline" id="form_field_visitTimeline">
                                    <option selected disabled>Time of your trip</option>
                                    <option>I want to go in July 2019</option>
                                    <option>I want to go in August 2019</option>
                                    <option>I want to go for Hajj 2019</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_prefferedDepartureDate" class="col-sm-5 col-form-label">What is your preferred date of Departure and Arrival ?</label>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_preferredDepartureDate" class="col-sm-5 col-form-label">Departure Date :</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="date" name="preferredDepartureDate" id="form_field_preferredDepartureDate" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_preferredArrivalDate" class="col-sm-5 col-form-label">Arrival Date :</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="date" name="preferredArrivalDate" id="form_field_preferredArrivalDate" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_visitWith" class="col-sm-5 col-form-label">Who are you going with)(grid) ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="visitTimeline" id="form_field_visitWith">
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
                                    <input class="form-check-input custom-checkbox" type="checkbox" value="Makkah" name="shareRoom" id="form_field_shareRoom" />
                                    <label class="form-check-label" for="form_field_shareRoom">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" value="Medina" name="shareRoom" id="form_field_shareRoom">
                                    <label class="form-check-label" for="form_field_shareRoom">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_bedroomSharing" class="col-sm-5 col-form-label">Bedroom Sharing:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="bedroomSharing" id="form_field_bedroomSharing">
                                    <option selected disabled>Please choose</option>
                                    <option value="3">3 sharing</option>
                                    <option value="4">4 sharing</option>
                                    <option value="5">5 sharing</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_noOfRoomsRequired" class="col-sm-5 col-form-label">The number of rooms you require:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="noOfRoom" id="form_field_noOfRoomsRequired">
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
                            <label for="form_field_peopleInEachRoom" class="col-sm-5 col-form-label">How many people will be staying in each room ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="noOfRoom" id="form_field_peopleInEachRoom">
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
                            <label for="noOfRoom" class="col-sm-5 col-form-label">What star hotels are you looking for ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="noOfRoom" id="noOfRoom">
                                    <option value="1" selected>2 Star</option>
                                    <option value="1">3 Star</option>
                                    <option value="2">4 Star</option>
                                    <option value="3">5 Star</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="noOfRoom" class="col-sm-5 col-form-label">What type of flight are you looking for ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="noOfRoom" id="noOfRoom">
                                    <option value="1" selected>Direct</option>
                                    <option value="1">Indirect</option>
                                    <option value="2">Get me the best package</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary pull-right" onclick="location.href = '{{ route('journey_page_2') }}'">Proceed <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection