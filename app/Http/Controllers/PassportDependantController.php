<?php

namespace App\Http\Controllers;

use App\PassportDependant;
use Illuminate\Http\Request;

class PassportDependantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passportDependants = PassportDependant::all();
        return view('passportDependants.index')->with('passportDependants', $passportDependants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('passportDependants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $passportDependant = new PassportDependant();
        $passportDependant->full_name = $request->input('fullName');
        $passportDependant->sex = $request->input('sex');
        $passportDependant->date_of_birth = $request->input('dateOfBirth');
        $passportDependant->relationship = $request->input('relationship');
        $passportDependant->save();

        return redirect('/passportDependants')->with('success', 'Passport Dependant Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PassportDependant  $passportDependant
     * @return \Illuminate\Http\Response
     */
    public function show(PassportDependant $passportDependant)
    {
        return view('passportDependants.show')->with('passportDependant', $passportDependant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PassportDependant  $passportDependant
     * @return \Illuminate\Http\Response
     */
    public function edit(PassportDependant $passportDependant)
    {
        return view('passportDependants.edit')->with('passportDependant', $passportDependant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PassportDependant  $passportDependant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PassportDependant $passportDependant)
    {
        $passportDependant->full_name = $request->input('fullName');
        $passportDependant->sex = $request->input('sex');
        $passportDependant->date_of_birth = $request->input('dateOfBirth');
        $passportDependant->relationship = $request->input('relationship');
        $passportDependant->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PassportDependant  $passportDependant
     * @return \Illuminate\Http\Response
     */
    public function destroy(PassportDependant $passportDependant)
    {
        //
    }
}
