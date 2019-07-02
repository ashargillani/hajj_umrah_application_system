<?php

namespace App\Http\Controllers;

use App\Visa;
use Illuminate\Http\Request;

class VisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visas = Visa::all();
        return view('visas.index')->with('visas', $visas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $visa = new Visa();
        $visa->full_name = $request->input('fullName');
        $visa->family_name = $request->input('familyName');
        $visa->mother_name = $request->input('motherName');
        $visa->date_of_birth = $request->input('dateOfBirth');
        $visa->place_of_birth = $request->input('placeOfBirth');
        $visa->previous_nationality = $request->input('previousNationality');
        $visa->present_nationality = $request->input('presentNationality');
        $visa->sex = $request->input('sex');
        $visa->profession = $request->input('profession');
        $visa->marital_status = $request->input('maritalStatus');
        $visa->relegion = $request->input('relegion');
        $visa->save();

        return redirect('/visas')->with('success', 'Visa Application Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Visa  $visa
     * @return \Illuminate\Http\Response
     */
    public function show(Visa $visa)
    {
        return view('visas.show')->with('visa', $visa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visa  $visa
     * @return \Illuminate\Http\Response
     */
    public function edit(Visa $visa)
    {
        return view('visas.edit')->with('visa', $visa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visa  $visa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visa $visa)
    {
        $visa->full_name = $request->input('fullName');
        $visa->family_name = $request->input('familyName');
        $visa->mother_name = $request->input('motherName');
        $visa->date_of_birth = $request->input('dateOfBirth');
        $visa->place_of_birth = $request->input('placeOfBirth');
        $visa->previous_nationality = $request->input('previousNationality');
        $visa->present_nationality = $request->input('presentNationality');
        $visa->sex = $request->input('sex');
        $visa->profession = $request->input('profession');
        $visa->marital_status = $request->input('maritalStatus');
        $visa->relegion = $request->input('relegion');
        $visa->permanent_address_UK = $request->input('permanentAddressUK');
        $visa->telephone_number_UK = $request->input('telephoneNumberUK');
        $visa->passport_number = $request->input('passportNumber');
        $visa->place_of_issue = $request->input('placeOfIssue');
        $visa->date_of_issue = $request->input('dateOfIssue');
        $visa->expiry_date = $request->input('expiryDate');
        $visa->dependants = $request->input('dependants');
        $visa->date_of_arrival_saudi_arabia = $request->input('dateOfArrivalSaudiArabia');
        $visa->contact_address_saudi_arabia = $request->input('contactAddressSaudiArabia');
        $visa->airline_name = $request->input('airlineName');
        $visa->airline_flight_no = $request->input('airlineFlightNo');
        $visa->airline_ticket_no = $request->input('airlineTicketNo');
        $visa->name_of_mehram = $request->input('nameOfMehram');
        $visa->relationship_with_mehram = $request->input('relationshipWithMehram');
        $visa->carer_of_child = $request->input('carerOfChild');

        $visa->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visa  $visa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visa $visa)
    {
        $visa->delete();
        return redirect('/visas')->with('success', 'Visa Application Deleted');
    }
}
