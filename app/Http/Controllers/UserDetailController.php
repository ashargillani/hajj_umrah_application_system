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
        $userDetail->title = $request->input('');
        $userDetail->first_name = $request->input('');
        $userDetail->last_name = $request->input('');
        $userDetail->dob = $request->input('');
        $userDetail->address = $request->input('');
        $userDetail->relationship_status = $request->input('');
        $userDetail->post_code = $request->input('');
        $userDetail->ethnicity = $request->input('');
        $userDetail->passport = $request->input('');
        $userDetail->valid_passport = $request->input('');
        $userDetail->health_conditions_bool = $request->input('');
        $userDetail->health_conditions = $request->input('');
        $userDetail->require_assistance = $request->input('');
        $userDetail->visited_saudi = $request->input('');
        $userDetail->additional_passenger = $request->input('');
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
        $user = \Auth::user();
        $userDetail->title = $request->input('');
        $userDetail->first_name = $request->input('');
        $userDetail->last_name = $request->input('');
        $userDetail->dob = $request->input('');
        $userDetail->address = $request->input('');
        $userDetail->relationship_status = $request->input('');
        $userDetail->post_code = $request->input('');
        $userDetail->ethnicity = $request->input('');
        $userDetail->passport = $request->input('');
        $userDetail->valid_passport = $request->input('');
        $userDetail->health_conditions_bool = $request->input('');
        $userDetail->health_conditions = $request->input('');
        $userDetail->require_assistance = $request->input('');
        $userDetail->visited_saudi = $request->input('');
        $userDetail->additional_passenger = $request->input('');
        $userDetail->user_id = $user->id;

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
