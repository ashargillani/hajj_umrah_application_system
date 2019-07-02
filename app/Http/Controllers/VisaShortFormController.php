<?php

namespace App\Http\Controllers;

use App\VisaShortForm;
use Illuminate\Http\Request;

class VisaShortFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visaShortForms = VisaShortForm::all();
        return view('visaShortForms.index')->with('visaShortForms', $visaShortForms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visaShortForms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $visaShortForm = new VisaShortForm();
        $visaShortForm->no_of_people_travelling = $request->input('noOfPeopleTravelling');
        $visaShortForm->mehram = $request->input('mehram');
        $visaShortForm->family_name = $request->input('familyName');
        $visaShortForm->mother_name = $request->input('motherName');
        $visaShortForm->previous_nationality = $request->input('previousNationality');
        $visaShortForm->present_nationality = $request->input('presentNationality');
        $visaShortForm->profession = $request->input('profession');
        $visaShortForm->marital_status = $request->input('maritalStatus');
        $visaShortForm->relegion = $request->input('relegion');
        $visaShortForm->dependants = $request->input('dependants');
        $visaShortForm->telephone_number = $request->input('telephoneNumber');
        $visaShortForm->save();

        return redirect('/visas')->with('success', 'Visa Short Form Application Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VisaShortForm  $visaShortForm
     * @return \Illuminate\Http\Response
     */
    public function show(VisaShortForm $visaShortForm)
    {
        return view('visaShortForms.show')->with('visaShortForm', $visaShortForm);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VisaShortForm  $visaShortForm
     * @return \Illuminate\Http\Response
     */
    public function edit(VisaShortForm $visaShortForm)
    {
        return view('visaShortForms.edit')->with('visaShortForm', $visaShortForm);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VisaShortForm  $visaShortForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VisaShortForm $visaShortForm)
    {
        $visaShortForm->no_of_people_travelling = $request->input('noOfPeopleTravelling');
        $visaShortForm->mehram = $request->input('mehram');
        $visaShortForm->family_name = $request->input('familyName');
        $visaShortForm->mother_name = $request->input('motherName');
        $visaShortForm->previous_nationality = $request->input('previousNationality');
        $visaShortForm->present_nationality = $request->input('presentNationality');
        $visaShortForm->profession = $request->input('profession');
        $visaShortForm->marital_status = $request->input('maritalStatus');
        $visaShortForm->relegion = $request->input('relegion');
        $visaShortForm->dependants = $request->input('dependants');
        $visaShortForm->telephone_number = $request->input('telephoneNumber');
        $visaShortForm->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VisaShortForm  $visaShortForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(VisaShortForm $visaShortForm)
    {
        $visaShortForm->delete();
        return redirect('/visaShortForms')->with('success', 'Visa Short Form Application Deleted');
    }
}
