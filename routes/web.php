<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home_main');
});

Route::get('/journey-page', function () {
    return view('book_trip.journey_page');
})->name('journey_page');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
//////////////////////////////////////////////////////////// Provider
Route::resource('provider/packages', 'PackageController');
Route::resource('provider/hotels', 'PackageHotelController');
