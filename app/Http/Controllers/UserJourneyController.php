<?php

namespace App\Http\Controllers;

use App\User;
use App\UserJourney;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\Role;

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
        $userJourney = new UserJourney();
        $userJourney->no_of_people_bool = $request->input('noOfPeopleBool');
        $userJourney->no_of_people = $request->input('noOfPeople');
        $userJourney->no_of_adults = $request->input('noOfAdults');
        $userJourney->children_travelling = $request->input('childrenTravelling');
        $userJourney->children_number_and_state = $request->input('childrenState');
        $userJourney->number_of_children_travelling = $request->input('numberOfChildren');
        $userJourney->package_class = $request->input('packageClass');
        $userJourney->package_type = $request->input('packageType');
        $userJourney->route = $request->input('route');
        $userJourney->selected_route = $request->input('selectedRoute');
        $userJourney->user_experience = $request->input('userExperience');
        $userJourney->total_days = $request->input('total_days');
        $userJourney->prefferred_budget = $request->input('preferredBudget');
        $userJourney->wheelchair_access = $request->input('wheelchairAccessReason');
        $userJourney->visit_timeline = $request->input('visitTimeline');
        $userJourney->departure_date = $request->input('preferredDepartureDate');
        $userJourney->arrival_date = $request->input('preferredArrivalDate');
        $userJourney->travelling_with = $request->input('travellingWith');
        $userJourney->share_room_bool = $request->input('shareRoom');
        $userJourney->share_room = $request->input('bedroomSharing');
        $userJourney->no_of_rooms = $request->input('noOfRoom');
        $userJourney->people_in_rooms = $request->input('peopleStayingEachRoom');
        $userJourney->hotel_stars = $request->input('hotelStars');
        $userJourney->flight_type = $request->input('typeOfFlight');
        $userJourney->user_id = $request->input('userId');

        $userJourney->save();

        return redirect()->route('journey_page_2');
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
        $userJourney->children_number_and_state = $request->input('childrenState');
        $userJourney->number_of_children_travelling = $request->input('numberOfChildren');
        $userJourney->package_class = $request->input('packageClass');
        $userJourney->package_type = $request->input('packageType');
        $userJourney->route = $request->input('route');
        $userJourney->selected_route = $request->input('selectedRoute');
        $userJourney->user_experience = $request->input('userExperience');
        $userJourney->total_days = $request->input('total_days');
        $userJourney->prefferred_budget = $request->input('preferredBudget');
        $userJourney->wheelchair_access = $request->input('wheelchairAccessReason');
        $userJourney->visit_timeline = $request->input('visitTimeline');
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

    public function indexJourney()
    {
        $journeys = UserJourney::all();
        return view('journey.journey_index')->with('journeys', $journeys);
    }

    public function showJourneyPage1(UserJourney $journey)
    {
        return view('journey.journey_page_1_show')->with('journey', $journey);
    }

    public function storeJourneyUser (Request $request) {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            $user = new User();
            $user->name = $request->firstName . ' ' . $request->lastName;
            $user->email = $request->email;
            $user->password = bcrypt('123456');
            $userRole = Role::where('name', 'user')->first();
            $user->role_id = $userRole->id;
            $user->save();
            DB::insert('INSERT INTO user_roles (user_id, role_id) VALUES (?, ?)', [$user->id, $userRole->id]);
        }

        return ['userId' => $user->id];
    }
}
