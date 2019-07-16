<?php

namespace App\Http\Controllers;

use App\Package;
use App\Provider;
use App\Flight;
use App\PackageHotel;
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
        $flights = Flight::all();
        $hotels = PackageHotel::all();
        $data = [
            'flights'  => $flights,
            'hotels'   => $hotels
        ];
        $user = \Auth::user();
        if ($user->hasRole('provider')) {
            return view('provider.packages.create')->with('data', $data);
        } else {
            $packages = Package::all();
            return view('provider.packages.index')->with('packages', $packages);
        }
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
        $provider = Provider::where('userId', $user->id)->first();
        $package = new Package();
        $package->class = $request->input('packageClass');
        $package->totalDays = $request->input('totalDays');
        $package->type = $request->input('packageType');
        $package->route = $request->input('route');
        $package->packageStars = $request->input('packageStars');
        $package->package_details = $request->input('packageDetails');
        $package->departureDate = $request->input('departureDate');
        $package->arrivalDate = $request->input('arrivalDate');
        $package->makkahDays = $request->input('daysMakkah');
        $package->medinaDays = $request->input('daysMedina');
        $package->roomType = $request->input('roomType');
        //$package->packageBeds = $request->input('packageBeds');
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
        $package->hotelId = $request->input('hotelId');
        $package->provider = $provider;
        $package->flightId = $request->input('flightId');

        $package->save();

        $pictureController = new PictureController();
        $pictureController->storePackage($request, $package);

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
        $user = \Auth::user();
        $flights = Flight::all();
        $hotels = PackageHotel::all();
        if ($user->hasRole('provider')) {
            return view('provider.packages.edit')->with([
                'package' => $package,
                'flights' => $flights,
                'hotels' => $hotels
            ]);
        } else {
            $packages = Package::all();
            return view('provider.packages.index')->with('packages', $packages);
        }
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
        $package->type = $request->input('packageType');
        $package->route = $request->input('route');
        $package->packageStars = $request->input('packageStars');
        $package->package_details = $request->input('packageDetails');
        $package->departureDate = $request->input('departureDate');
        $package->arrivalDate = $request->input('arrivalDate');
        $package->makkahDays = $request->input('daysMakkah');
        $package->medinaDays = $request->input('daysMedina');
        $package->roomType = $request->input('roomType');
        //$package->packageBeds = $request->input('packageBeds');
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
        $package->hotelId = $request->input('hotelId');
        $package->flightId = $request->input('flightId');
        $user = \Auth::user();

        $provider = $user->provider;
        $package->providerId = $provider->id;

        $package->save();

        $pictureController = new PictureController();
        $pictureController->storePackage($request, $package);

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
        $user = \Auth::user();
        if($user->hasRole('provider')) {
            $package->delete();

            return redirect('/provider/packages')->with('success', 'Package Deleted');
        } else {
            $packages = Package::all();

            return view('provider.packages.index')->with('packages', $packages);
        }
    }

    public function suggestedPackages(Request $request)
    {
        $package = Package::where('totalDays',$request->input('total_days'));
        if (!empty($package)) {
            $package1 = $package->where('price', '>=', $request->input('preferredBudget') + 200)->where('price', '<=', $request->input('preferredBudget') - 200);
            if (!empty($package1)) {
                $package2 = $package1->where('class', $request->input('packageClass'));
                if (!empty($package2)) {
                    $package3 = $package2->where('type', $request->input('packageType'));
                    if(!empty($package3)){
                        $package = $package3;
                        return $package->get();
                    }else{
                        $package = $package2;
                        return $package->get();
                    }
                }else{
                    $package = $package1;
                    return $package->get();
                }
            }else{
                return $package->get();
            }
        }else{
            return $package->get();
        }
    }
}
