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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', function () {
    return view('home_main');
})->name('home');

Route::get('/journey-page', function () {
    return view('book_trip.journey_page');
})->name('journey_page');

Route::get('/journey-page-2', function () {
    return view('book_trip.journey_page_2');
})->name('journey_page_2');

Route::get('/page-test', function () {
    return view('provider.layout.provider-main');
});

Auth::routes();

//Route::get('/login', 'HomeController@index')->name('login');

//Route::get('/home', 'HomeController@index')->name('home');
//////////////////////////////////////////////////////////// Provider
Route::resource('provider/packages', 'PackageController');
Route::resource('provider/hotels', 'PackageHotelController');
Route::resource('provider/flights', 'FlightController');

Route::get('admin/index-provider', [
    'as' => 'provider.index',
    'uses' => 'UserController@indexProvider'
]);
Route::get('admin/create-provider', [
    'as' => 'provider.create',
    'uses' => 'UserController@createProvider'
]);
Route::get('admin/show-provider/{user}', [
    'as' => 'provider.show',
    'uses' => 'UserController@showProvider'
]);
Route::post('admin/store-provider', [
    'as' => 'provider.store',
    'uses' => 'UserController@storeProvider'
]);
Route::delete('admin/delete-provider/{user}', [
    'as' => 'provider.delete',
    'uses' => 'UserController@deleteProvider'
]);
Route::get('admin/edit-provider/{user}/edit', [
    'as' => 'provider.edit',
    'uses' => 'UserController@editProvider'
]);
Route::put('admin/update-provider/{user}', [
    'as' => 'provider.update',
    'uses' => 'UserController@updateProvider'
]);

Route::get('provider/profile-edit', [
    'as' => 'provider.profile_edit',
    'uses' => 'ProviderController@editProvider'
]);
Route::put('provider/profile-update/{user}', [
    'as' => 'provider.profile_update',
    'uses' => 'ProviderController@updateProvider'
]);

