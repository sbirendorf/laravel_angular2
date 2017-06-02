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
| view all the routers list run: php artisan route:list
| make new route php artisan make:controller ProportiesController --resource
*/

Route::get('/', function () {
	// return view('react');
    return view('welcome');
});

/*
	PUBLIC END POINT // No Authentication Require
	All the end point that dont need authentication will be here
*/

Route::get('api/public/properties/{state}/{county}','PublicPropertiesController@show');

//Route::get('api/public/property/history/{id}/{state}/{county}','PublicPropertiesController@history');



/*
	END OF PUBLIC END POINT // No Authentication Require
*/

