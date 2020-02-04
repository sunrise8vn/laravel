<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/cp/discover-car/getListCars','DiscoverCarsController@getListCars');
Route::post('/cp/discover-car/delete','DiscoverCarsController@postDelete');

Route::post('/Contact/PostContact','ContactController@postCreate');
Route::post('/Contact/PostContactProduct','ContactDetailProductController@postCreate');
Route::post('/ContactStaff/PostContact','ContactStaffController@postCreate');

Route::post('/cp/car-library/delete','CarLibraryController@getDelete');

Route::post('/cp/car-exterior/delete','CarExteriorsController@getDelete');

Route::post('/cp/car-furnitures/delete','CarFurnituresController@getDelete');

Route::post('/cp/car-color/delete','CarColorController@getDelete');



