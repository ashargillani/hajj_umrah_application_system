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
    return view('journey.journey_page_1');
})->name('journey_page');

Route::get('/journey-page-2', function () {
    return view('journey.journey_page_2');
})->name('journey_page_2');

Route::get('/page-test', function () {
    return view('provider.layout.provider-main');
});

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('index-provider', [
        'as' => 'provider.index',
        'uses' => 'UserController@indexProvider'
    ]);

    Route::get('create-provider', [
        'as' => 'provider.create',
        'uses' => 'UserController@createProvider'
    ]);

    Route::get('show-provider/{user}', [
        'as' => 'provider.show',
        'uses' => 'UserController@showProvider'
    ]);

    Route::post('store-provider', [
        'as' => 'provider.store',
        'uses' => 'UserController@storeProvider'
    ]);

    Route::delete('delete-provider/{user}', [
        'as' => 'provider.delete',
        'uses' => 'UserController@deleteProvider'
    ]);

    Route::get('edit-provider/{user}/edit', [
        'as' => 'provider.edit',
        'uses' => 'UserController@editProvider'
    ]);

    Route::put('update-provider/{user}', [
        'as' => 'provider.update',
        'uses' => 'UserController@updateProvider'
    ]);
});

Route::prefix('provider')->middleware('auth')->group(function () {

    Route::get('profile-edit', [
        'as' => 'provider.profile_edit',
        'uses' => 'ProviderController@editProvider'
    ]);

    Route::put('profile-update/{user}', [
        'as' => 'provider.profile_update',
        'uses' => 'ProviderController@updateProvider'
    ]);

    Route::resource('packages', 'PackageController');
    Route::resource('hotels', 'PackageHotelController');
    Route::resource('flights', 'FlightController');
    Route::get('dashboard', [
        'as' => 'provider.dashboard',
        'uses' => 'ProviderController@index'
    ]);
});

//////////////////////////////////////////////////////////// Image
Route::get('create-picture', [
    'as' => 'picture.create',
    'uses' => 'PictureController@createProvider'
]);

Route::post('store-picture', [
    'as' => 'picture.store',
    'uses' => 'PictureController@storeProvider'
]);

Route::post('user-logout', [
    'as' => 'user.logout',
    'uses' => 'UserController@logout'
]);

Route::get('create-journey', [
    'as' => 'journey.create',
    'uses' => 'UserJourneyController@createJourney'
]);

Route::post('store-journey', [
    'as' => 'journey.store',
    'uses' => 'UserJourneyController@store'
]);

Route::post('store-journey-user', [
    'as' => 'journey.store-user',
    'uses' => 'UserJourneyController@storeJourneyUser'
]);

Route::get('journeys', [
    'as' => 'journey.index',
    'uses' => 'UserJourneyController@indexJourney'
]);

Route::get('journey-page-1-details', [
    'as' => 'journey.page1.details',
    'uses' => 'UserJourneyController@showJourneyPage1'
]);

////////////////////////////////////////////////////////Email


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('send-basic-email', [
        'as' => 'mail.basic',
        'uses' => 'MailController@basic_email'
    ]);
    Route::get('send-html-email', [
        'as' => 'mail.html',
        'uses' => 'MailController@html_email'
    ]);
    Route::get('send-attachment-email', [
        'as' => 'mail.attachment',
        'uses' => 'MailController@attachment_email'
    ]);
    Route::resource('mails', 'MailController');
});