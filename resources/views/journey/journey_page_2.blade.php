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
                            <li><a class="current" href="">Your Details</a></li>
                            <li><a href="">Your Booking</a></li>
                            <li><a href="">Your Quotes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="journey-page-form form-text-style">
                <form name="journeyPageTwo" method="post" action="{{ route('journey.store') }}">
                    {{ csrf_field() }}
                    <input type="hidden" id="userinfo_page" value="userinfo_page_two" />
                    <fieldset>
                        <div class="col-sm-10 custom-hr"></div>
                        <legend>Your Details :</legend>
                        <div class="form-group row">
                            <label for="form_field_personTitle" class="col-sm-5 col-form-label">Your title:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="personTitle" id="form_field_personTitle">
                                    <option selected disabled>Please choose</option>
                                    <option>Mr.</option>
                                    <option>Mrs.</option>
                                    <option>Ms.</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_firstName" class="col-sm-5 col-form-label">First Name: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_firstName" name="firstName" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_lastName" class="col-sm-5 col-form-label">Last Name: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_lastName" name="lastName" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_dateOfBirth" class="col-sm-5 col-form-label">Date of Birth: </label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="form_field_dateOfBirth" name="dateOfBirth" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_address" class="col-sm-5 col-form-label">Address: </label>
                            <div class="col-sm-6">
                                <textarea class="form-control" id="form_field_address" name="address" placeholder="Address"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_email" class="col-sm-5 col-form-label">Email: </label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="form_field_email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_password" class="col-sm-5 col-form-label">Password : </label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="form_field_password" name="password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_confirm_password" class="col-sm-5 col-form-label">Password : </label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="form_field_confirm_password" name="password" required>
                                <label class="invalid-password" style="display: none;">* The passwords doesn't match</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_relationshipStatus" class="col-sm-5 col-form-label">Your Relationship Status:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="relationshipStatus" id="form_field_relationshipStatus" required>
                                    <option selected disabled>Please select:</option>
                                    <option>Married</option>
                                    <option>Divorced</option>
                                    <option>Widowed</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-5">Would you like to travel in group from your city ? Yes or NO</div>
                            <div class="col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="radio" id="form_field_travellingInGroup" name="travellingInGroup" required>
                                    <label class="form-check-label" for="form_field_travellingInGroup">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="radio" id="form_field_travellingInGroup" name="travellingInGroup">
                                    <label class="form-check-label" for="form_field_travellingInGroup">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_postCode" class="col-sm-5 col-form-label">What is your post-code ? So we can find the deals closer to you</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="form_field_postCode" name="postCode" placeholder="22010" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_milesForRightPackage" class="col-sm-5 col-form-label">How many miles are you willing to travel for the right package ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="milesForRightPackage" id="form_field_milesForRightPackage" required>
                                    <option selected disabled>Please choose:</option>
                                    <option>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                    <option>40</option>
                                    <option>50</option>
                                    <option>60</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_ethnicity" class="col-sm-5 col-form-label">What is your ethnicity ? Please State: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_ethnicity" name="ethnicity" placeholder="Asian People">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_passportType" class="col-sm-5 col-form-label">What type of passport do you have ?</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="passportType" id="form_field_passportType" required>
                                    <option selected disabled>Passport Type: </option>
                                    <option>A valid british UK passport ?</option>
                                    <option>Other countries</option>
                                    <option>Please state</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_otherPassportCountry" class="col-sm-5 col-form-label">Please state the passport you have:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_otherPassportCountry" name="otherPassportCountry" placeholder="Pakistan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-5">Do you have a Valid Passport for atleast 6 months after the date of travel ? Please mark Yes or No ( If no, please apply for a new passport, you can still reserve a place by making payment )</div>
                            <div class="col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" id="form_field_passportValidity" name="passportValidity">
                                    <label class="form-check-label" for="form_field_passportValidity">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" id="form_field_passportValidity" name="passportValidity">
                                    <label class="form-check-label" for="form_field_passportValidity">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-5">Do you have any health conditions that you need to make the travel agents aware of ?</div>
                            <div class="col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="radio" id="form_field_healthConditionsBool" name="healthConditionsBool">
                                    <label class="form-check-label" for="form_field_healthConditionsBool">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="radio" id="form_field_healthConditionsBool" name="healthConditionsBool">
                                    <label class="form-check-label" for="form_field_healthConditionsBool">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_field_healthConditions" class="col-sm-5 col-form-label">Health Conditions: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="form_field_healthConditions" name="healthConditions" placeholder="Health Conditions">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-5">Do you require any assistance whilst on your trip so we can advice the agent ?</div>
                            <div class="col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" id="form_field_agentAssistance" name="agentAssistance">
                                    <label class="form-check-label" for="form_field_agentAssistance">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" id="form_field_agentAssistance" name="agentAssistance">
                                    <label class="form-check-label" for="form_field_agentAssistance">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-5">You will need a health certificate ! (Please check the box)</div>
                            <div class="col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" id="form_field_healthCertificateRequired" name="healthCertificateRequired">
                                    <label class="form-check-label" for="form_field_healthCertificateRequired">
                                        Yes
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-5">You will need a Valid Passport ! (Please check the box)</div>
                            <div class="col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" id="form_field_validPassportRequired" name="validPassportRequired">
                                    <label class="form-check-label" for="form_field_validPassportRequired">
                                        Yes
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-5">If you have been to Saudi in the last 3 years there may be an additional fee the Saudi government charge as per regulation, the travel advisor can guide you further if this is the case!  ! (Please check the box)</div>
                            <div class="col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="checkbox" id="form_field_beenToSaudia" name="beenToSaudia">
                                    <label class="form-check-label" for="form_field_beenToSaudia">
                                        Yes
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-5">Are there any additional passengers travelling ?</div>
                            <div class="col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="radio" id="form_field_additionalPassengersTravelling" name="additionalPassengersTravelling" value="true">
                                    <label class="form-check-label" for="form_field_additionalPassengersTravelling">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input custom-checkbox" type="radio" id="form_field_additionalPassengersTravelling" name="additionalPassengersTravelling" value="false">
                                    <label class="form-check-label" for="form_field_additionalPassengersTravelling">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-5">Add Additional Passenger's Details</div>
                            <div class="col-sm-6">
                                <!-- Button trigger modal -->
                                <button type="button" id="additionalPassengerDetailsModal" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-plus"> </i>Add Details
                                </button>
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

            <!-- Modal -->
            <div class="modal modal-lg fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add additional Passengers</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="additional_passenger">
                            <form name="journeyPageTwo" method="post">
                                <fieldset>
                                    <div class="col-sm-10 custom-hr"></div>
                                    <legend class="additional-passenger-legend">Additional Passenger Details:</legend>
                                    <div class="form-group row">
                                        <label for="additionalPassengerTitle" class="col-sm-5 col-form-label">Your title:</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="additionalPassengerTitle" id="additionalPassengerTitle">
                                                <option selected disabled>Please choose</option>
                                                <option>Mr.</option>
                                                <option>Mrs.</option>
                                                <option>Ms.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="additionalPassengerFullName" class="col-sm-5 col-form-label">Full Name: </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="additionalPassengerFullName" name="additionalPassengerFullName" placeholder="Full Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="additionalPassengerDateOfBirth" class="col-sm-5 col-form-label">Date of Birth: </label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control" id="additionalPassengerDateOfBirth" name="additionalPassengerDateOfBirth" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="form_field_address" class="col-sm-5 col-form-label">Address: </label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" id="form_field_address" name="address" placeholder="Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="additionalPassengerPassportType" class="col-sm-5 col-form-label">What type of passport do you have ?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="additionalPassengerPassportType" id="additionalPassengerPassportType" required>
                                                <option selected disabled>Passport Type: </option>
                                                <option>A valid british UK passport ?</option>
                                                <option>Other countries</option>
                                                <option>Please state</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-5">Is the passport valid ? (Please check the box)</div>
                                        <div class="col-sm-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-checkbox" type="checkbox" id="additionalPassengerValidPassport" name="additionalPassengerValidPassport">
                                                <label class="form-check-label" for="additionalPassengerValidPassport">
                                                    Yes
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="additionalPassengerHealthConditions" class="col-sm-5 col-form-label">Suffer from any illness ? Any Health Conditions: (If yes, please state)</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="additionalPassengerHealthConditions" name="additionalPassengerHealthConditions" placeholder="Health Conditions">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-5">The passenger will need a health certificate ! (Please check the box)</div>
                                        <div class="col-sm-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-checkbox" type="checkbox" id="additionalPassengerHealthCertificateRequired" name="additionalPassengerHealthCertificateRequired">
                                                <label class="form-check-label" for="additionalPassengerHealthCertificateRequired">
                                                    Yes
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-5">If the passenger have been to Saudi in the last 3 years there may be an additional fee the Saudi government charge as per regulation, the travel advisor can guide you further if this is the case!  ! (Please check the box)</div>
                                        <div class="col-sm-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-checkbox" type="checkbox" id="additionalPassengerBeenToSaudia" name="additionalPassengerBeenToSaudia">
                                                <label class="form-check-label" for="additionalPassengerBeenToSaudia">
                                                    Yes
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
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
            let formOneData = JSON.parse(localStorage.getItem("userinfo_page_one"));
            $("#form_field_confirm_password").on("blur", function () {
                let passwordFieldValue = $("#form_field_password").val();
                let confirmPasswordFieldValue = $(this).val();
                if ( passwordFieldValue === confirmPasswordFieldValue){
                    $(".invalid-password").hide();
                } else {
                    $(".invalid-password").show();
                }
            });

            $("input[type=radio][name=additionalPassengersTravelling]").change(function () {
                let additionalPassengerModalButton = $('#additionalPassengerDetailsModal');
                if($(this).val() === "false") {
                    additionalPassengerModalButton.prop('disabled', true);
                    if (parseInt(formOneData.noOfAdults) > 0) {
                        alert("Invalid choice as you are not travelling alone !");
                        $("input[type=radio][name=additionalPassengersTravelling][value=true]").prop("checked", true).change();
                        additionalPassengerModalButton.prop('disabled', false);
                    }
                } else {
                    additionalPassengerModalButton.prop('disabled', false);
                }
            });

            $('#myModal').on('shown.bs.modal', function () {
                $('#myInput').trigger('focus')
            })
        });
    </script>
@endsection