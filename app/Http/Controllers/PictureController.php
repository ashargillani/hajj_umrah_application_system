<?php

namespace App\Http\Controllers;

use App\PackageHotel;
use App\Package;
use App\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
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


    public function storeHotel(Request $request, PackageHotel $hotel)
    {
        if($request->has('filename'))
        {
            $allowedfileExtension=['svg','jpg','png','jpeg'];
            $files = $request->file('filename');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension,$allowedfileExtension);
                if($check)
                {
                    $file->move(public_path('images/hotels'), $filename);
                    $picture = new Picture();
                    $picture->filename = $filename;
                    $picture->hotelId = $hotel->id;
                    $picture->save();
                }
                else
                {
                    echo '<div class="alert alert-warning"><strong>Warning!</strong> Wrong Format!!!</div>';
                }
            }
        }
    }

    public function storePackage(Request $request, Package $package)
    {
        if($request->has('filename'))
        {
            $allowedfileExtension=['svg','jpg','png','jpeg'];
            $files = $request->file('filename');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension,$allowedfileExtension);
                if($check)
                {
                    $file->move(public_path('images/packages'), $filename);
                    $picture = new Picture();
                    $picture->filename = $filename;
                    $picture->packageId = $package->id;
                    $picture->save();
                }
                else
                {
                    echo '<div class="alert alert-warning"><strong>Warning!</strong> Wrong Format!!!</div>';
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show(Picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function edit(Picture $picture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Picture $picture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Picture $picture)
    {
        //
    }
}
