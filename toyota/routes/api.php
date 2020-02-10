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

Route::get('/cp/news/delete','NewsController@getDelete')->name('news.getDelete');

Route::post('/cp/car-library/delete','CarLibraryController@getDelete');

Route::post('/cp/car-exterior/delete','CarExteriorsController@getDelete');

Route::post('/cp/car-furnitures/delete','CarFurnituresController@getDelete');

Route::post('/cp/car-color/delete','CarColorController@getDelete');

Route::post('/cp/OtherInfoCar/postCreate','OtherInfoCarController@postCreate');

Route::post('/cp/OtherInfoCar/delete','OtherInfoCarController@getDelete');

Route::get('/cp/OtherInfoCar/getAll/{car_id}','OtherInfoCarController@getAll');

Route::get('/NewCar/getListNewCar','NewCarController@getListNewCar');

Route::get('/cp/service/warranty-policy/delete','Service\WarrantyPolicyController@getDelete')->name('service.warranty-policy.getDelete');
Route::get('/cp/service/maintenance-service/delete','Service\MaintenanceServiceController@getDelete')->name('service.maintenance-service.getDelete');
Route::get('/cp/service/repair-service/delete','Service\RepairServiceController@getDelete')->name('service.repair-service.getDelete');
Route::get('/cp/service/free-test-program/delete','Service\FreeTestProgramController@getDelete')->name('service.free-test-program.getDelete');
Route::get('/cp/service/summon-program/delete','Service\SummonProgramController@getDelete')->name('service.summon-program.getDelete');

Route::get('/cp/service/genuine-accessary/delete','Service\GenuineAccessaryController@getDelete')->name('service.genuine-accessary.getDelete');

Route::get('/cp/service/genuine-accessary/detail/getListInfo','Service\GenuineAccessaryDetailController@getListInfo')->name('service.genuine-accessary-detail.getListInfo');

Route::get('/cp/service/genuine-accessary/detail/delete','Service\GenuineAccessaryDetailController@getDelete')->name('service.genuine-accessary-detail.getDelete');




