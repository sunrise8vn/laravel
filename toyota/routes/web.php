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

Route::get('/', 'HomeController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/gioi-thieu-dai-ly.html', 'IntroduceController@index');
Route::get('/so-do-trang.html', 'SiteMapController@index');
Route::get('/dieu-khoan-chinh-sach.html', 'PolicyTermsController@index');
Route::get('/chinh-sach-bao-mat-thong-tin-ca-nhan.html', 'PrivacyPolicyController@index');
Route::get('/tin-tuc/{permalink}.html','NewsController@getNewsDetail');
Route::get('/tin-tuc/{permalink}','NewsController@getAllNews');
Route::get('/nhan-vien/{permalink}.html','SalesmenController@getAll');
Route::get('/dich-vu.html','Service\ServiceController@index')->name('service');
Route::get('/dich-vu','Service\ServiceController@index');
Route::get('/xe/{permalink}.html','CarController@getCarDetail');
Route::get('/xe/{permalink}','CarController@getCarDetail');
Route::get('/tu-van-tai-chinh.html','ConsultantFinancialController@index');
Route::get('/tu-van-bao-hiem.html','ConsultantInsuranceController@index');
Route::get('/loi-khuyen-chuyen-gia.html','ExpertAdviceController@index');
Route::get('/loi-khuyen-chuyen-gia/{permalink}.html','ExpertAdviceController@getDetail');
// Route::get('/thu-vien/{permalink}.html','CarLibraryController@getDetail');

Route::get('/du-toan-chi-phi.html','CostEstimatesController@index');
Route::get('/dang-ky-lai-thu.html','RegisterTestDriveController@index');

Route::get('/{type}/{permalink}.html','CarController@getFunctions');
Route::get('/tinh-nang/{type}/{permalink}','CarController@getFunctionsMb');

Route::get('/so-sanh','CarCompareController@index');



Route::get('auth/facebook', 'FacebookAuthController@redirectToProvider')->name('facebook.login') ;
Route::get('auth/facebook/callback', 'FacebookAuthController@handleProviderCallback');

Route::get('/cp', 'CPController@index');
Route::get('/cp/login', 'LoginController@getLogin');
Route::post('/cp/login', 'LoginController@postLogin');
Route::get('/cp/logout', 'CPController@logout');

Route::group(['prefix'=>'cp', 'middleware'=>'CPLogin'], function(){

	Route::group(['prefix'=>'introduce'], function(){
		Route::get('edit','IntroduceController@getEdit');
		Route::post('edit/{id}','IntroduceController@postEdit');
		Route::get('delete/{id}','IntroduceController@getDelete');
	});

	Route::group(['prefix'=>'policy-terms'], function(){
		Route::get('edit','PolicyTermsController@getEdit');
		Route::post('edit/{id}','PolicyTermsController@postEdit');
		Route::get('delete/{id}','PolicyTermsController@getDelete');
	});

	Route::group(['prefix'=>'privacy-policy'], function(){
		Route::get('edit','PrivacyPolicyController@getEdit');
		Route::post('edit/{id}','PrivacyPolicyController@postEdit');
		Route::get('delete/{id}','PrivacyPolicyController@getDelete');
	});

	Route::group(['prefix'=>'slide'], function(){
		Route::get('','SlideController@getList');
		Route::get('create','SlideController@getCreate');
		Route::post('create','SlideController@postCreate');
		Route::get('edit/{id}','SlideController@getEdit');
		Route::post('edit/{id}','SlideController@postEdit');
		Route::get('delete/{id}','SlideController@getDelete');
	});

	Route::group(['prefix'=>'car-category'], function(){
		Route::get('','CarCategoryController@getList');
		Route::get('create','CarCategoryController@getCreate');
		Route::post('create','CarCategoryController@postCreate');
		Route::get('edit/{id}','CarCategoryController@getEdit');
		Route::post('edit/{id}','CarCategoryController@postEdit');
		Route::get('delete/{id}','CarCategoryController@getDelete');
	});

	Route::group(['prefix'=>'car'], function(){
		Route::get('','CarController@getList');
		Route::get('create','CarController@getCreate');
		Route::post('create','CarController@postCreate');
		Route::get('edit/{id}','CarController@getEdit');
		Route::post('edit/{id}','CarController@postEdit');
		Route::get('delete/{id}','CarController@getDelete');
	});

	Route::group(['prefix'=>'discover-car'], function(){
		Route::get('','DiscoverCarsController@getList');
		Route::get('create','DiscoverCarsController@getCreate');
		Route::post('create','DiscoverCarsController@postCreate');
		Route::get('edit/{id}','DiscoverCarsController@getEdit');
		Route::post('edit/{id}','DiscoverCarsController@postEdit');
		Route::get('delete/{id}','DiscoverCarsController@getDelete');
	});

	Route::group(['prefix'=>'car-color'], function(){
		Route::get('','CarColorController@getList');
		Route::get('create','CarColorController@getCreate');
		Route::post('create','CarColorController@postCreate');
		Route::get('edit/{id}','CarColorController@getEdit');
		Route::post('edit/{id}','CarColorController@postEdit');
		Route::get('delete/{id}','CarColorController@getDelete');
	});

	Route::group(['prefix'=>'car-library'], function(){
		Route::get('','CarLibraryController@getList');
		Route::get('view/{id}','CarLibraryController@view');
		Route::get('create','CarLibraryController@getCreate');
		Route::post('create','CarLibraryController@postCreate');
		Route::get('edit/{id}','CarLibraryController@getEdit');
		Route::post('edit/{id}','CarLibraryController@postEdit');
		// Route::get('delete/{id}','CarLibraryController@getDelete');
	});

	Route::group(['prefix'=>'car-exterior'], function(){
		Route::get('','CarExteriorsController@getList');
		Route::get('view/{id}','CarExteriorsController@view');
		Route::get('create','CarExteriorsController@getCreate');
		Route::post('create/{id}','CarExteriorsController@postCreate');
		Route::get('edit/{id}','CarExteriorsController@getEdit');
		// Route::post('edit','CarExteriorsController@postEdit');
		Route::post('edit','CarExteriorsController@postEdit')->name('exterior.edit');
		// Route::get('delete/{id}','CarExteriorsController@getDelete');
		// Route::post('/cp/car-exterior/delete','CarExteriorsController@getDelete');

		Route::group(['prefix'=>'group'], function(){
			Route::get('','CarExteriorsGroupController@getList');
			Route::get('create','CarExteriorsGroupController@getCreate');
			Route::post('create','CarExteriorsGroupController@postCreate');
			Route::get('edit/{id}','CarExteriorsGroupController@getEdit');
			Route::post('edit/{id}','CarExteriorsGroupController@postEdit');
		});
	});

	Route::group(['prefix'=>'car-furnitures'], function(){
		Route::get('','CarFurnituresController@getList');
		Route::get('view/{id}','CarFurnituresController@view');
		Route::get('create','CarFurnituresController@getCreate');
		Route::post('create/{id}','CarFurnituresController@postCreate');
		Route::get('edit/{id}','CarFurnituresController@getEdit');
		Route::post('edit','CarFurnituresController@postEdit')->name('furnitures.edit');
		// Route::get('delete/{id}','CarFurnituresController@getDelete');

		Route::group(['prefix'=>'group'], function(){
			Route::get('','CarFurnituresGroupController@getList');
			Route::get('create','CarFurnituresGroupController@getCreate');
			Route::post('create','CarFurnituresGroupController@postCreate');
			Route::get('edit/{id}','CarFurnituresGroupController@getEdit');
			Route::post('edit/{id}','CarFurnituresGroupController@postEdit');
		});
	});

	Route::group(['prefix'=>'car-function'], function(){
		Route::get('','CarFunctionController@getList');
		Route::get('view/{id}','CarFunctionController@view');
		Route::get('create','CarFunctionController@getCreate');
		Route::post('create','CarFunctionController@postCreate');
		Route::get('edit/{id}','CarFunctionController@getEdit');
		Route::post('edit/{id}','CarFunctionController@postEdit');
		Route::get('delete/{id}','CarFunctionController@getDelete');

		Route::group(['prefix'=>'group'], function(){
			Route::get('','CarFunctionGroupController@getList');
			Route::get('create','CarFunctionGroupController@getCreate');
			Route::post('create','CarFunctionGroupController@postCreate');
			Route::get('edit/{id}','CarFunctionGroupController@getEdit');
			Route::post('edit/{id}','CarFunctionGroupController@postEdit');
		});
	});

	Route::group(['prefix'=>'car-accessories'], function(){
		Route::get('','GenuineAccessoriesController@getList');
		Route::get('view/{id}','GenuineAccessoriesController@view');
		Route::get('create','GenuineAccessoriesController@getCreate');
		Route::post('create/{id}','GenuineAccessoriesController@postCreate');
		Route::get('edit/{id}','GenuineAccessoriesController@getEdit');
		Route::post('edit','GenuineAccessoriesController@postEdit')->name('accessories.edit');
		Route::get('delete/{id}','GenuineAccessoriesController@getDelete');

		Route::group(['prefix'=>'group'], function(){
			Route::get('','GenuineAccessoriesGroupController@getList');
			Route::get('create','GenuineAccessoriesGroupController@getCreate');
			Route::post('create','GenuineAccessoriesGroupController@postCreate');
			Route::get('edit/{id}','GenuineAccessoriesGroupController@getEdit');
			Route::post('edit/{id}','GenuineAccessoriesGroupController@postEdit');
		});
	});

	Route::group(['prefix'=>'news-category'], function(){
		Route::get('','NewsCategoryController@getList');
		Route::get('create','NewsCategoryController@getCreate');
		Route::post('create','NewsCategoryController@postCreate');
		Route::get('edit/{id}','NewsCategoryController@getEdit');
		Route::post('edit/{id}','NewsCategoryController@postEdit');
		Route::get('delete/{id}','NewsCategoryController@getDelete');
	});

	Route::group(['prefix'=>'news'], function(){
		Route::get('','NewsController@getList');
		Route::get('create','NewsController@getCreate');
		Route::post('create','NewsController@postCreate');
		Route::get('edit/{id}','NewsController@getEdit');
		Route::post('edit/{id}','NewsController@postEdit');
		Route::get('delete/{id}','NewsController@getDelete');
	});

	Route::group(['prefix'=>'salesmen'], function(){
		Route::get('','SalesmenController@getList');
		Route::get('create','SalesmenController@getCreate');
		Route::post('create','SalesmenController@postCreate');
		Route::get('edit/{id}','SalesmenController@getEdit');
		Route::post('edit/{id}','SalesmenController@postEdit');
		Route::get('delete/{id}','SalesmenController@getDelete');
	});

	Route::group(['prefix'=>'salesmen-group'], function(){
		Route::get('','SalesmenGroupController@getList');
		Route::get('create','SalesmenGroupController@getCreate');
		Route::post('create','SalesmenGroupController@postCreate');
		Route::get('edit/{id}','SalesmenGroupController@getEdit');
		Route::post('edit/{id}','SalesmenGroupController@postEdit');
		Route::get('delete/{id}','SalesmenGroupController@getDelete');
	});

	Route::group(['prefix'=>'service'], function(){
		Route::group(['prefix'=>'warranty-policy'], function(){
			Route::get('','Service\WarrantyPolicyController@getList');
			Route::get('create','Service\WarrantyPolicyController@getCreate');
			Route::post('create','Service\WarrantyPolicyController@postCreate');
			Route::get('edit/{id}','Service\WarrantyPolicyController@getEdit');
			Route::post('edit/{id}','Service\WarrantyPolicyController@postEdit');
			Route::get('delete/{id}','Service\WarrantyPolicyController@getDelete');
		});
		Route::group(['prefix'=>'accessary'], function(){
			Route::get('','Service\GenuineAccessaryController@getList');
			Route::get('create','Service\GenuineAccessaryController@getCreate');
			Route::post('create','Service\GenuineAccessaryController@postCreate');
			Route::get('edit/{id}','Service\GenuineAccessaryController@getEdit');
			Route::post('edit/{id}','Service\GenuineAccessaryController@postEdit');
			Route::get('delete/{id}','Service\GenuineAccessaryController@getDelete');

			Route::group(['prefix'=>'group'], function(){
				Route::get('','Service\GenuineAccessaryGroupController@getList');
				Route::get('create','Service\GenuineAccessaryGroupController@getCreate');
				Route::post('create','Service\GenuineAccessaryGroupController@postCreate');
				Route::get('edit/{id}','Service\GenuineAccessaryGroupController@getEdit');
				Route::post('edit/{id}','Service\GenuineAccessaryGroupController@postEdit');
				Route::get('delete/{id}','Service\GenuineAccessaryGroupController@getDelete');
			});
			Route::group(['prefix'=>'details'], function(){
				Route::get('','Service\GenuineAccessaryDetailController@getList');
				Route::get('create','Service\GenuineAccessaryDetailController@getCreate');
				Route::post('create','Service\GenuineAccessaryDetailController@postCreate');
				Route::get('edit/{id}','Service\GenuineAccessaryDetailController@getEdit');
				Route::post('edit/{id}','Service\GenuineAccessaryDetailController@postEdit');
				Route::get('delete/{id}','Service\GenuineAccessaryDetailController@getDelete');
			});
		});

	});

	Route::group(['prefix'=>'spec'], function(){
		Route::group(['prefix'=>'engine-frame'], function(){
			Route::get('','Spec\SpecEngineFrameController@getList');
			Route::get('create','Spec\SpecEngineFrameController@getCreate');
			Route::post('create','Spec\SpecEngineFrameController@postCreate');
			Route::get('edit/{id}','Spec\SpecEngineFrameController@getEdit');
			Route::post('edit/{id}','Spec\SpecEngineFrameController@postEdit');
			Route::get('delete/{id}','Spec\SpecEngineFrameController@getDelete');
		});
		Route::group(['prefix'=>'exteriors'], function(){
			Route::get('','Spec\SpecExteriorsController@getList');
			Route::get('create','Spec\SpecExteriorsController@getCreate');
			Route::post('create','Spec\SpecExteriorsController@postCreate');
			Route::get('edit/{id}','Spec\SpecExteriorsController@getEdit');
			Route::post('edit/{id}','Spec\SpecExteriorsController@postEdit');
			Route::get('delete/{id}','Spec\SpecExteriorsController@getDelete');
		});
		Route::group(['prefix'=>'furnitures'], function(){
			Route::get('','Spec\SpecFurnituresController@getList');
			Route::get('create','Spec\SpecFurnituresController@getCreate');
			Route::post('create','Spec\SpecFurnituresController@postCreate');
			Route::get('edit/{id}','Spec\SpecFurnituresController@getEdit');
			Route::post('edit/{id}','Spec\SpecFurnituresController@postEdit');
			Route::get('delete/{id}','Spec\SpecFurnituresController@getDelete');
		});
		Route::group(['prefix'=>'chair'], function(){
			Route::get('','Spec\SpecChairController@getList');
			Route::get('create','Spec\SpecChairController@getCreate');
			Route::post('create','Spec\SpecChairController@postCreate');
			Route::get('edit/{id}','Spec\SpecChairController@getEdit');
			Route::post('edit/{id}','Spec\SpecChairController@postEdit');
			Route::get('delete/{id}','Spec\SpecChairController@getDelete');
		});
		Route::group(['prefix'=>'convnient'], function(){
			Route::get('','Spec\SpecConvnientController@getList');
			Route::get('create','Spec\SpecConvnientController@getCreate');
			Route::post('create','Spec\SpecConvnientController@postCreate');
			Route::get('edit/{id}','Spec\SpecConvnientController@getEdit');
			Route::post('edit/{id}','Spec\SpecConvnientController@postEdit');
			Route::get('delete/{id}','Spec\SpecConvnientController@getDelete');
		});
		Route::group(['prefix'=>'security'], function(){
			Route::get('','Spec\SpecSecurityController@getList');
			Route::get('create','Spec\SpecSecurityController@getCreate');
			Route::post('create','Spec\SpecSecurityController@postCreate');
			Route::get('edit/{id}','Spec\SpecSecurityController@getEdit');
			Route::post('edit/{id}','Spec\SpecSecurityController@postEdit');
			Route::get('delete/{id}','Spec\SpecSecurityController@getDelete');
		});
		Route::group(['prefix'=>'active-safety'], function(){
			Route::get('','Spec\SpecActiveSafetyController@getList');
			Route::get('create','Spec\SpecActiveSafetyController@getCreate');
			Route::post('create','Spec\SpecActiveSafetyController@postCreate');
			Route::get('edit/{id}','Spec\SpecActiveSafetyController@getEdit');
			Route::post('edit/{id}','Spec\SpecActiveSafetyController@postEdit');
			Route::get('delete/{id}','Spec\SpecActiveSafetyController@getDelete');
		});
		Route::group(['prefix'=>'passive-safety'], function(){
			Route::get('','Spec\SpecPassiveSafetyController@getList');
			Route::get('create','Spec\SpecPassiveSafetyController@getCreate');
			Route::post('create','Spec\SpecPassiveSafetyController@postCreate');
			Route::get('edit/{id}','Spec\SpecPassiveSafetyController@getEdit');
			Route::post('edit/{id}','Spec\SpecPassiveSafetyController@postEdit');
			Route::get('delete/{id}','Spec\SpecPassiveSafetyController@getDelete');
		});
	});

	Route::group(['prefix'=>'expert-advice'], function(){
		Route::group(['prefix'=>'group'], function(){
			Route::get('','ExpertAdviceGroupController@getList');
			Route::get('create','ExpertAdviceGroupController@getCreate');
			Route::post('create','ExpertAdviceGroupController@postCreate');
			Route::get('edit/{id}','ExpertAdviceGroupController@getEdit');
			Route::post('edit/{id}','ExpertAdviceGroupController@postEdit');
			Route::get('delete/{id}','ExpertAdviceGroupController@getDelete');
		});
		Route::get('','ExpertAdviceController@getList');
		Route::get('create','ExpertAdviceController@getCreate');
		Route::post('create','ExpertAdviceController@postCreate');
		Route::get('edit/{id}','ExpertAdviceController@getEdit');
		Route::post('edit/{id}','ExpertAdviceController@postEdit');
		Route::get('delete/{id}','ExpertAdviceController@getDelete');
	});


	Route::group(['prefix'=>'user'], function(){
		Route::get('list','UserController@getList');
		Route::get('add','UserController@getAdd');
		Route::post('add','UserController@postAdd');
		Route::get('edit/{id}','UserController@getEdit');
		Route::post('edit/{id}','UserController@postEdit');
		Route::get('delete/{id}','UserController@getDelete');
	});

});