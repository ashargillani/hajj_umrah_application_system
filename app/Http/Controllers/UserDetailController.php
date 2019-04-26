<?php

namespace App\Http\Controllers;

use App\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
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
        $userDetail = new UserDetail();
        $userDetail->title = $request->input('personTitle');
        $userDetail->first_name = $request->input('firstName');
        $userDetail->last_name = $request->input('lastName');
        $userDetail->dob = $request->input('dateOfBirth');
        $userDetail->address = $request->input('address');
        $userDetail->relationship_status = $request->input('relationshipStatus');
        $userDetail->post_code = $request->input('postCode');
        $userDetail->ethnicity = $request->input('ethnicity');
        $userDetail->passport = $request->input('otherPassportCountry');
        $userDetail->valid_passport = $request->input('passportValidity');
        $userDetail->health_conditions_bool = $request->input('healthConditionsBool');
        $userDetail->health_conditions = $request->input('healthConditions');
        $userDetail->require_assistance = $request->input('agentAssistance');
        $userDetail->visited_saudi = $request->input('beenToSaudia');
        $userDetail->additional_passenger = $request->input('additionalPassengersTravelling');
        $userDetail->user_id = $user->id;

        $userDetail->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function show(UserDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDetail $userDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserDetail $userDetail)
    {
        $userDetail->title = $request->input('personTitle');
        $userDetail->first_name = $request->input('firstName');
        $userDetail->last_name = $request->input('lastName');
        $userDetail->dob = $request->input('dateOfBirth');
        $userDetail->address = $request->input('address');
        $userDetail->relationship_status = $request->input('relationshipStatus');
        $userDetail->post_code = $request->input('postCode');
        $userDetail->ethnicity = $request->input('ethnicity');
        $userDetail->passport = $request->input('otherPassportCountry');
        $userDetail->valid_passport = $request->input('passportValidity');
        $userDetail->health_conditions_bool = $request->input('healthConditionsBool');
        $userDetail->health_conditions = $request->input('healthConditions');
        $userDetail->require_assistance = $request->input('agentAssistance');
        $userDetail->visited_saudi = $request->input('beenToSaudia');
        $userDetail->additional_passenger = $request->input('additionalPassengersTravelling');

        $userDetail->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDetail $userDetail)
    {
        //
    }
}
