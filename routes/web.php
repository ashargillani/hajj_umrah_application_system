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


Route::get('/visa-page-1', function () {
    return view('visas.visa_page_1');
})->name('visa-page-1');

Route::post('/visa-page-1', [
    'as' => 'visa.store',
    'uses' => 'VisaController@store'
]);

Route::get('/visa-page-2/{visa}/edit', function () {
    return view('visas.visa_page_2');
})->name('visa-page-2');

Route::put('/visa-page-2/{visa}', [
    'as' => 'visa.page2Store',
    'uses' => 'VisaController@page2Store'
]);


Route::get('/journey-page-3', [
    'as' => 'show.packages',
    'uses' => 'UserJourneyController@showSuggestedPackages'
])->name('journey_page_3');

Route::get('/page-test', function () {
    return view('provider.layout.provider-main');
});

Route::prefix('admin')->middleware('auth')->group(function() {
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
    Route::get('index-provider', [
        'as' => 'provider.index',
        'uses' => 'UserController@indexProvider'
    ]);

    Route::get('profile-edit', [
        'as' => 'provider.profile_edit',
        'uses' => 'ProviderController@editProvider'
    ]);

    Route::put('profile-update/{user}', [
        'as' => 'provider.profile_update',
        'uses' => 'ProviderController@updateProvider'
    ]);
    Route::get('discount', [
        'as' => 'discount.index',
        'uses' => 'DiscountController@index'
    ]);
    Route::post('discount/{discount?}', [
        'as' => 'discount.update_discount',
        'uses' => 'DiscountController@update'
    ]);
    Route::resource('packages', 'PackageController');
    Route::resource('hotels', 'PackageHotelController');
    Route::resource('flights', 'FlightController');
    Route::resource('message', 'ProviderMessagesController');
    Route::get('dashboard', [
        'as' => 'provider.dashboard',
        'uses' => 'ProviderController@index'
    ]);
    Route::get('provider-show-about-me', [
        'as' => 'provider.show-about-me',
        'uses' => 'ProviderController@showAboutMe'
    ]);
    Route::put('provider-store-about-me/{provider}', [
        'as' => 'provider.store-about-me',
        'uses' => 'ProviderController@storeAboutMe'
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

Route::get('journey-page-1-details/{journey}', [
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