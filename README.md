# Laravel 6 Basic APIs with new Package

## Introduction

> Laravel 6 basic API like login User, Add User, Get ALl Users, User Details, User Roles"

## Code Samples

> Route::post('api/login', 'QauthController@login');

    Route::middleware('auth:api')->group(function () {
        Route::post('api/adduser', 'QauthController@adduser');
        Route::get('api/getallusers', 'QauthController@getalluser');
        Route::get('api/user', 'QauthController@details');
        Route::get('api/getallroles', 'QauthController@getallroles');
    });

## Installation

> Composer Install will install all dependencies that are present in composer.json and will install the package inside packages by which All the APIs you can use as a base package and can be used in Any Laraval Application.
