<?php

namespace App\Http\Controllers;

use App\Flight;
use App\Package;
use App\PackageHotel;
use App\Provider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $provider = Provider::all();
        $providerCount = $provider->count();
        $packages = Package::all();
        $packagesCount = $packages->count();
        $flight = Flight::all();
        $flightCount = $flight->count();
        $hotels = PackageHotel::all();
        $hotelsCount = $hotels->count();

        return view('provider.dashboard')->with([
            'providerCount' => $providerCount,
            'packagesCount' => $packagesCount,
            'flightCount' => $flightCount,
            'hotelsCount' => $hotelsCount
        ]);
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
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provider $provider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        //
    }

    public function createProvider(User $user)
    {
        $provider = new Provider();
        $provider->userId = $user->id;
        $provider->save();
    }

    public function editProvider()
    {
        $user = \Auth::user();
        $provider = Provider::where('userId', '=', $user->id)->first();
        $data = [
            'user'  => $user,
            'provider'   => $provider
        ];
        return view('provider.provider_update')->with('data', $data);
    }

    public function updateProvider(User $user, Request $request)
    {
        $provider = Provider::where('userId', '=', $user->id)->first();
        if (Hash::check($request->input('oldPassword'), $user->password)){
            if ($request->input('newPassword') == $request->input('confirmPassword')) {
                $user->password = bcrypt($request->input('newPassword'));
                $user->save();
                $provider->city = $request->input('city');
                $provider->address = $request->input('address');
                $provider->organizationName = $request->input('orgName');
                $provider->phoneNumber = $request->input('phoneNumber');
                $provider->save();
                return redirect()->route('provider.index')->with('success', 'Provider Created');
            } else
            {
                return 'New Password and Confirm Password does not match.';
            }
        } else {
            return 'Incorrect Old Password.';
        }
    }


}
