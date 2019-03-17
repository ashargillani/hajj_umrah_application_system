<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function newPackage(){
        return view('provider/new_package');
    }
}
