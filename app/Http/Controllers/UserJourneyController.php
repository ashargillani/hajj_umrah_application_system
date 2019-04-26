<?php

namespace App\Http\Controllers;

use App\UserJourney;
use Illuminate\Http\Request;

class UserJourneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = \Auth::user();
        $userJourney = new UserJourney();
        $userJourney->no_of_people_bool = $request->input('noOfPeopleBool');
        $userJourney->no_of_people = $request->input('noOfPeople');
        $userJourney->no_of_adults = $request->input('noOfAdults');
        $userJourney->children_travelling = $request->input('childrenTravelling');
        $userJourney->children_state = $request->input('childrenState');
        $userJourney->package_class = $request->input('packageClass');
        $userJourney->package_type = $request->input('packageType');
        $userJourney->route = $request->input('route');
        $userJourney->selected_route = $request->input('selectedRoute');
        $userJourney->user_experience = $request->input('userExperience');
        $userJourney->total_days = $request->input('total_days');
        $userJourney->prefferred_budget = $request->input('preferredBudget');
        $userJourney->wheelchair_access = $request->input('wheelchairAccessReason');
        $userJourney->visitTimeline = $request->input('visitTimeline');
        $userJourney->departure_date = $request->input('preferredDepartureDate');
        $userJourney->arrival_date = $request->input('preferredArrivalDate');
        $userJourney->travelling_with = $request->input('travellingWith');
        $userJourney->share_room_bool = $request->input('shareRoom');
        $userJourney->share_room = $request->input('bedroomSharing');
        $userJourney->no_of_rooms = $request->input('noOfRoom');
        $userJourney->people_in_rooms = $request->input('peopleStayingEachRoom');
        $userJourney->hotel_stars = $request->input('hotelStars');
        $userJourney->flight_type = $request->input('typeOfFlight');
        $userJourney->user_id = $user->id;

        $userJourney->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserJourney  $userJourney
     * @return \Illuminate\Http\Response
     */
    public function show(UserJourney $userJourney)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserJourney  $userJourney
     * @return \Illuminate\Http\Response
     */
    public function edit(UserJourney $userJourney)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserJourney  $userJourney
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserJourney $userJourney)
    {
        $userJourney->no_of_people_bool = $request->input('noOfPeopleBool');
        $userJourney->no_of_people = $request->input('noOfPeople');
        $userJourney->no_of_adults = $request->input('noOfAdults');
        $userJourney->children_travelling = $request->input('childrenTravelling');
        $userJourney->children_state = $request->input('childrenState');
        $userJourney->package_class = $request->input('packageClass');
        $userJourney->package_type = $request->input('packageType');
        $userJourney->route = $request->input('route');
        $userJourney->selected_route = $request->input('selectedRoute');
        $userJourney->user_experience = $request->input('userExperience');
        $userJourney->total_days = $request->input('total_days');
        $userJourney->prefferred_budget = $request->input('preferredBudget');
        $userJourney->wheelchair_access = $request->input('wheelchairAccessReason');
        $userJourney->visitTimeline = $request->input('visitTimeline');
        $userJourney->departure_date = $request->input('preferredDepartureDate');
        $userJourney->arrival_date = $request->input('preferredArrivalDate');
        $userJourney->travelling_with = $request->input('travellingWith');
        $userJourney->share_room_bool = $request->input('shareRoom');
        $userJourney->share_room = $request->input('bedroomSharing');
        $userJourney->no_of_rooms = $request->input('noOfRoom');
        $userJourney->people_in_rooms = $request->input('peopleStayingEachRoom');
        $userJourney->hotel_stars = $request->input('hotelStars');
        $userJourney->flight_type = $request->input('typeOfFlight');

        $userJourney->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserJourney  $userJourney
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserJourney $userJourney)
    {
        //
    }

    public function createJourney()
    {
        return view('journey.journey_page');
    }

}
