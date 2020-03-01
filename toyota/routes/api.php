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


Route::post('/Contact/PostContact','ContactController@postCreate');
Route::post('/Contact/PostContactProduct','ContactDetailProductController@postCreate');
Route::post('/ContactStaff/PostContact','ContactStaffController@postCreate');

Route::get('/service/getAccessoriesGroup','Service\ServiceController@getAccessoriesGroup')->name('service.getAccessoriesGroup');
Route::get('/service/getAccessories','Service\ServiceController@getAccessories')->name('service.getAccessories');

Route::get('/car-color/getListColor','CarColorController@getListColor')->name('car-color.getListColor');
Route::get('/car-color/getFirstColor','CarColorController@getFirstColor')->name('car-color.getFirstColor');

Route::post('/session/storeFinancial', 'SessionController@storeFinancial');


Route::post('/cp/discover-car/getListCars','DiscoverCarsController@getListCars');
Route::post('/cp/discover-car/delete','DiscoverCarsController@postDelete');

Route::get('/cp/news/delete','NewsController@getDelete')->name('news.getDelete');

Route::post('/cp/car-library/delete','CarLibraryController@getDelete');

Route::post('/cp/car-exterior/delete','CarExteriorsController@getDelete');

Route::post('/cp/car-furnitures/delete','CarFurnituresController@getDelete');

Route::post('/cp/car-color/delete','CarColorController@getDelete');

Route::post('/cp/OtherInfoCar/postCreate','OtherInfoCarController@postCreate');

Route::post('/cp/OtherInfoCar/delete','OtherInfoCarController@getDelete');

Route::get('/cp/OtherInfoCar/getAll/{car_id}','OtherInfoCarController@getAll');

Route::get('/cp/OtherInfoCar/getListOtherInfo','OtherInfoCarController@getListOtherInfo');

Route::get('/NewCar/getListNewCar','NewCarController@getListNewCar');
Route::get('/FinancialSupport/getListCar','FinancialSupportController@getListCar');

Route::get('/cp/service/warranty-policy/delete','Service\WarrantyPolicyController@getDelete')->name('service.warranty-policy.getDelete');
Route::get('/cp/service/maintenance-service/delete','Service\MaintenanceServiceController@getDelete')->name('service.maintenance-service.getDelete');
Route::get('/cp/service/repair-service/delete','Service\RepairServiceController@getDelete')->name('service.repair-service.getDelete');
Route::get('/cp/service/free-test-program/delete','Service\FreeTestProgramController@getDelete')->name('service.free-test-program.getDelete');
Route::get('/cp/service/summon-program/delete','Service\SummonProgramController@getDelete')->name('service.summon-program.getDelete');

Route::get('/cp/service/genuine-accessary/delete','Service\GenuineAccessaryController@getDelete')->name('service.genuine-accessary.getDelete');

Route::get('/cp/service/genuine-accessary/detail/getListInfo','Service\GenuineAccessaryDetailController@getListInfo')->name('service.genuine-accessary-detail.getListInfo');

Route::get('/cp/service/genuine-accessary/detail/delete','Service\GenuineAccessaryDetailController@getDelete')->name('service.genuine-accessary-detail.getDelete');

Route::get('/cost-estimates/getAccessoriesGroup','CostEstimatesController@getAccessoriesGroup')->name('cost-estimates.getAccessoriesGroup');
Route::get('/cost-estimates/getAccessories','CostEstimatesController@getAccessories')->name('cost-estimates.getAccessories');




