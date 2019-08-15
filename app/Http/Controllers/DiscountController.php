<?php

namespace App\Http\Controllers;

use App\Discount;
use App\Package;
use App\Provider;
use http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        $packages = Package::select('packages.*')
            ->join('providers', 'packages.providerId', '=', 'providers.id')
            ->join('users', 'providers.userId', '=', 'users.id')
            ->where('users.id', '=', $user->id)
            ->get();

        return view('provider.discounts.index', [
            'packages' => $packages
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
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(Discount $discount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $discount = null)
    {

        if (!isset($discount) || $discount === '') {
            $discount = new Discount();
        } else {
            $discount = Discount::where('id', $discount)->first();
        }

        $discount->description = $request->description;
        $discount->package_id = $request->package_id;
        $discount->amount = $request->amount;
        $discount->save();

        return \response()->json(['ok' => 'ok', 'success' => 'Updated/Created Successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discount $discount)
    {
        //
    }
}
