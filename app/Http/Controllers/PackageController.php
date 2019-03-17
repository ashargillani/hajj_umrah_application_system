<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        return view('provider.packages.index')->with('packages', $packages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provider.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $package = new Package();
        $package->class = $request->input('packageClass');
        $package->totalDays = $request->input('totalDays');
        $package->route = $request->input('route');
        $package->packageStars = $request->input('packageStars');
        $package->type = $request->input('packageType');
        $package->departureDate = $request->input('departureDate');
        $package->arrivalDate = $request->input('arrivalDate');
        $package->makkahDays = $request->input('daysMakkah');
        $package->medinaDays = $request->input('daysMedina');
        $package->flights = $request->input('flights');
        $package->packageBeds = $request->input('packageBeds');
        $package->price = $request->input('price');
        $package->infantDiscount = $request->input('infantDiscount');
        $package->toddlerDiscount = $request->input('toddlerDiscount');
        $package->overFiveDiscount = $request->input('overFiveDiscount');
        $package->visa = ($request->get('visa') === 'on');
        $package->draft = ($request->get('draft') === 'on');
        $package->food = ($request->get('food') === 'on');
        $package->qurbani = ($request->get('qurbani') === 'on');
        $package->transfers = ($request->get('transfers') === 'on');
        $package->ziyaarah = ($request->get('ziyaarah') === 'on');
        $package->hotelId = 1;
        $package->providerId = 1;

        $package->save();

        return redirect('/provider/packages')->with('success', 'Package Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return view('provider.packages.show')->with('package', $package);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        return view('provider.packages.edit')->with('package', $package);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $package->class = $request->input('packageClass');
        $package->totalDays = $request->input('totalDays');
        $package->route = $request->input('route');
        $package->packageStars = $request->input('packageStars');
        $package->type = $request->input('packageType');
        $package->departureDate = $request->input('departureDate');
        $package->arrivalDate = $request->input('arrivalDate');
        $package->makkahDays = $request->input('daysMakkah');
        $package->medinaDays = $request->input('daysMedina');
        $package->flights = $request->input('flights');
        $package->packageBeds = $request->input('packageBeds');
        $package->price = $request->input('price');
        $package->infantDiscount = $request->input('infantDiscount');
        $package->toddlerDiscount = $request->input('toddlerDiscount');
        $package->overFiveDiscount = $request->input('overFiveDiscount');
        $package->visa = ($request->get('visa') === 'on');
        $package->draft = ($request->get('draft') === 'on');
        $package->food = ($request->get('food') === 'on');
        $package->qurbani = ($request->get('qurbani') === 'on');
        $package->transfers = ($request->get('transfers') === 'on');
        $package->ziyaarah = ($request->get('ziyaarah') === 'on');
        $package->hotelId = 1;
        $package->providerId = 1;

        $package->save();

        return redirect('/provider/packages')->with('success', 'Package Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect('/provider/packages')->with('success', 'Package Deleted');
    }
}
