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
        //
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
        //
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

    public function storeJourney(Request $request)
    {
        //
    }
}
