<?php

use Illuminate\Http\Request;

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});

Route::get('getProviders', 'ProviderController@getAllProviders');

Route::get('getReserves/{id}', 'ReserveController@getAllReserves');

Route::get('getUsersReserves/{provider_id}', 'ReserveController@getAllUsersReserve');

Route::post('reserve', 'ReserveController@reserve');
