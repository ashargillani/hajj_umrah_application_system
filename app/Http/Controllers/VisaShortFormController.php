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
        $visaShortForm->full_name = $request->input('fullName');
        $visaShortForm->family_name = $request->input('familyName');
        $visaShortForm->mother_name = $request->input('motherName');
        $visaShortForm->previous_nationality = $request->input('previousNationality');
        $visaShortForm->profession = $request->input('profession');
        $visaShortForm->permanent_address_UK = $request->input('permanentAddressUK');
        $visaShortForm->marital_status = $request->input('maritalStatus');
        $visaShortForm->religion = $request->input('religion');
        $visaShortForm->name_of_mehram = $request->input('nameOfMehram');
        $visaShortForm->relationship_with_mehram = $request->input('relationshipWithMehram');
        $visaShortForm->dependants = $request->input('dependants');
        $visaShortForm->telephone_number_UK = $request->input('telephoneNumberUK');
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
        $visaShortForm->full_name = $request->input('fullName');
        $visaShortForm->family_name = $request->input('familyName');
        $visaShortForm->mother_name = $request->input('motherName');
        $visaShortForm->previous_nationality = $request->input('previousNationality');
        $visaShortForm->profession = $request->input('profession');
        $visaShortForm->permanent_address_UK = $request->input('permanentAddressUK');
        $visaShortForm->marital_status = $request->input('maritalStatus');
        $visaShortForm->religion = $request->input('religion');
        $visaShortForm->name_of_mehram = $request->input('nameOfMehram');
        $visaShortForm->relationship_with_mehram = $request->input('relationshipWithMehram');
        $visaShortForm->dependants = $request->input('dependants');
        $visaShortForm->telephone_number_UK = $request->input('telephoneNumberUK');
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
