<?php

namespace App\Http\Controllers;

use App\PackageHotel;
use Illuminate\Http\Request;

class PackageHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = PackageHotel::all();
        return view('provider.hotels.index')->with('hotels', $hotels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provider.hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request,[
            'hotelName' => 'required',
            'hotelAddress' => 'required',
            'hotelStars' => 'required'
        ]);*/

        $packageHotel = new PackageHotel();
        $packageHotel->name = $request->input('hotelName');
        $packageHotel->address = $request->input('hotelAddress');
        $packageHotel->stars = $request->input('hotelStars');
        $packageHotel->save();

        return redirect('/provider/hotels')->with('success', 'Hotel Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PackageHotel  $packageHotel
     * @return \Illuminate\Http\Response
     */
    public function show(PackageHotel $hotel)
    {
        return view('provider.hotels.show')->with('hotel', $hotel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PackageHotel  $packageHotel
     * @return \Illuminate\Http\Response
     */
    public function edit(PackageHotel $hotel)
    {
        return view('provider.hotels.edit')->with('hotel', $hotel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PackageHotel  $packageHotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PackageHotel $hotel)
    {
        $hotel->name = $request->input('hotelName');
        $hotel->address = $request->input('hotelAddress');
        $hotel->stars = $request->input('hotelStars');
        $hotel->save();

        return redirect('/provider/hotels')->with('success', 'Hotel Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PackageHotel  $packageHotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PackageHotel $hotel)
    {
        $hotel->delete();
        return redirect('/provider/hotels')->with('success', 'Hotel Deleted');
    }
}
