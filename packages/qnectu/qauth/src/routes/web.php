<?php
Route::group(['namespace' => 'qnectu\Qauth\Http\Controllers'], function(){
    Route::get('qauth', 'QauthController@index');
    Route::post('api/login', 'QauthController@login');

    Route::middleware('auth:api')->group(function () {
        Route::post('api/adduser', 'QauthController@adduser');
        Route::get('api/getallusers', 'QauthController@getalluser');
        Route::get('api/user', 'QauthController@details');
        Route::get('api/getallroles', 'QauthController@getallroles');
    });
});
