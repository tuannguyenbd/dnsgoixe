<?php

use Illuminate\Support\Facades\Route;


Route::controller(\Modules\BusinessManagement\Http\Controllers\Api\New\ConfigurationController::class)->group(function () {
    Route::get('/configurations', 'getConfiguration');
    Route::get('/get-external-configurations', 'getExternalConfiguration');
    Route::post('/store-configurations', 'updateConfiguration');
});

Route::group(['prefix' => 'location', 'middleware' => ['auth:api', 'maintenance_mode']], function () {
    Route::controller(\Modules\BusinessManagement\Http\Controllers\Api\New\Customer\ConfigController::class)->group(function () {
        Route::post('save', 'userLastLocation');
    });
});

#new route
Route::group(['prefix' => 'customer'], function () {
    Route::controller(\Modules\BusinessManagement\Http\Controllers\Api\New\Customer\ConfigController::class)->group(function () {
        Route::get('configuration', 'configuration');
        Route::get('pages/{page_name}', 'pages');
        Route::group(['prefix' => 'config'], function () {
            Route::get('get-zone-id', 'getZone');
            Route::get('place-api-autocomplete', 'placeApiAutocomplete');
            Route::get('distance-api', 'distanceApi');
            Route::get('place-api-details', 'placeApiDetails');
            Route::get('geocode-api', 'geocodeApi');
            Route::post('get-routes', 'getRoutes');
            Route::get('get-payment-methods', 'getPaymentMethods');
            Route::get('cancellation-reason-list', 'cancellationReasonList');
            Route::get('parcel-cancellation-reason-list', 'parcelCancellationReasonList');
        });
    });
});

Route::group(['prefix' => 'driver'], function () {
    Route::controller(\Modules\BusinessManagement\Http\Controllers\Api\New\Driver\ConfigController::class)->group(function () {
        Route::get('configuration', 'configuration');
        Route::group(['prefix' => 'config'], function () {
            // These config will found in Customer Config
            Route::get('get-zone-id', 'getZone');
            Route::get('place-api-autocomplete', 'placeApiAutocomplete');
            Route::get('distance-api', 'distanceApi');
            Route::get('place-api-details', 'placeApiDetails');
            Route::get('geocode-api', 'geocodeApi');
            Route::get('cancellation-reason-list', 'cancellationReasonList');
            Route::get('parcel-cancellation-reason-list', 'parcelCancellationReasonList');
        });
        Route::group(['middleware' => ['auth:api', 'maintenance_mode']], function () {
            Route::post('get-routes', 'getRoutes');
        });
    });
});
