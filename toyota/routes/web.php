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


Route::get('/send/email', 'MailController@mail');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/gioi-thieu-dai-ly.html', 'IntroduceController@index')->name('introduce.index');
Route::get('/so-do-trang.html', 'SiteMapController@index')->name('site-map.index');
Route::get('/dieu-khoan-chinh-sach.html', 'PolicyTermsController@index')->name('policy-terms.index');
Route::get('/chinh-sach-bao-mat-thong-tin-ca-nhan.html', 'PrivacyPolicyController@index')->name('privacy-policy.index');
Route::get('/tin-tuc/{permalink}.html','NewsController@getNewsDetail')->name('news.getDetail');
Route::get('/tin-tuc/{permalink}','NewsController@getAllNews')->name('news.getAll');
Route::get('/nhan-vien/{permalink}','SalesmenController@getAll')->name('salesmen.getAll');
Route::get('/dich-vu','Service\ServiceController@index')->name('service.index');
Route::get('/xe/{permalink}','CarController@getCarDetail')->name('car.permalink');
Route::get('/xe-moi','NewCarController@index')->name('newcar.index');
Route::get('/tu-van-tai-chinh.html','ConsultantFinancialController@index')->name('consultant-financial.index');
Route::get('/tu-van-bao-hiem.html','ConsultantInsuranceController@index')->name('consultant-insurance.index');
Route::get('/loi-khuyen-chuyen-gia','ExpertAdviceController@index')->name('expert-advice.index');
Route::get('/loi-khuyen-chuyen-gia/{permalink}','ExpertAdviceController@getDetail')->name('expert-advice.getDetail');

Route::get('/thu-vien/{permalink}.html','CarLibraryController@getDetail')->name('library.getDetail');
Route::get('/ngoai-that/{permalink}.html','CarExteriorsController@getDetail')->name('exteriors.getDetail');
Route::get('/noi-that/{permalink}.html','CarFurnituresController@getDetail')->name('furnitures.getDetail');

Route::get('/du-toan-chi-phi','CostEstimatesController@index')->name('cost-estimates.index');
Route::get('/dang-ky-lai-thu','RegisterTestDriveController@index')->name('test-drive.index');

Route::get('/ho-tro-tai-chinh','FinancialSupportController@index')->name('financial-support.index');

Route::get('/{type}/{permalink}.html','CarController@getFunctions');
Route::get('/tinh-nang/{type}/{permalink}','CarController@getFunctionsMb');

Route::get('/so-sanh','CarCompareController@index');

Route::get('/tai-file','DownloadFileController@index')->name('download.index');

Route::get('/financial/export/', 'FinancialSupportController@export');
Route::get('/financial5050/export/', 'FinancialSupportController@exportHaft');


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
			Route::get('','Service\WarrantyPolicyController@getList')->name('service.warranty-policy.getList');
			Route::get('create','Service\WarrantyPolicyController@getCreate')->name('service.warranty-policy.getCreate');
			Route::post('create','Service\WarrantyPolicyController@postCreate')->name('service.warranty-policy.postCreate');
			Route::get('edit/{id}','Service\WarrantyPolicyController@getEdit')->name('service.warranty-policy.getEdit');
			Route::post('edit/{id}','Service\WarrantyPolicyController@postEdit')->name('service.warranty-policy.postEdit');
		});

		Route::group(['prefix'=>'maintenance-service'], function(){
			Route::get('','Service\MaintenanceServiceController@getList')->name('service.maintenance-service.getList');
			Route::get('create','Service\MaintenanceServiceController@getCreate')->name('service.maintenance-service.getCreate');
			Route::post('create','Service\MaintenanceServiceController@postCreate')->name('service.maintenance-service.postCreate');
			Route::get('edit/{id}','Service\MaintenanceServiceController@getEdit')->name('service.maintenance-service.getEdit');
			Route::post('edit/{id}','Service\MaintenanceServiceController@postEdit')->name('service.maintenance-service.postEdit');
		});

		Route::group(['prefix'=>'repair-service'], function(){
			Route::get('','Service\RepairServiceController@getList')->name('service.repair-service.getList');
			Route::get('create','Service\RepairServiceController@getCreate')->name('service.repair-service.getCreate');
			Route::post('create','Service\RepairServiceController@postCreate')->name('service.repair-service.postCreate');
			Route::get('edit/{id}','Service\RepairServiceController@getEdit')->name('service.repair-service.getEdit');
			Route::post('edit/{id}','Service\RepairServiceController@postEdit')->name('service.repair-service.postEdit');
		});

		Route::group(['prefix'=>'free-test-program'], function(){
			Route::get('','Service\FreeTestProgramController@getList')->name('service.free-test-program.getList');
			Route::get('create','Service\FreeTestProgramController@getCreate')->name('service.free-test-program.getCreate');
			Route::post('create','Service\FreeTestProgramController@postCreate')->name('service.free-test-program.postCreate');
			Route::get('edit/{id}','Service\FreeTestProgramController@getEdit')->name('service.free-test-program.getEdit');
			Route::post('edit/{id}','Service\FreeTestProgramController@postEdit')->name('service.free-test-program.postEdit');
		});

		Route::group(['prefix'=>'summon-program'], function(){
			Route::get('','Service\SummonProgramController@getList')->name('service.summon-program.getList');
			Route::get('create','Service\SummonProgramController@getCreate')->name('service.summon-program.getCreate');
			Route::post('create','Service\SummonProgramController@postCreate')->name('service.summon-program.postCreate');
			Route::get('edit/{id}','Service\SummonProgramController@getEdit')->name('service.summon-program.getEdit');
			Route::post('edit/{id}','Service\SummonProgramController@postEdit')->name('service.summon-program.postEdit');
		});

		Route::group(['prefix'=>'accessary'], function(){
			Route::get('','Service\GenuineAccessaryController@getList')->name('service.genuine-accessary.getList');
			Route::get('create','Service\GenuineAccessaryController@getCreate')->name('service.genuine-accessary.getCreate');
			Route::post('create','Service\GenuineAccessaryController@postCreate')->name('service.genuine-accessary.postCreate');
			Route::get('edit/{id}','Service\GenuineAccessaryController@getEdit')->name('service.genuine-accessary.getEdit');
			Route::post('edit/{id}','Service\GenuineAccessaryController@postEdit')->name('service.genuine-accessary.postEdit');

			Route::group(['prefix'=>'group'], function(){
				Route::get('','Service\GenuineAccessaryGroupController@getList');
				Route::get('create','Service\GenuineAccessaryGroupController@getCreate');
				Route::post('create','Service\GenuineAccessaryGroupController@postCreate');
				Route::get('edit/{id}','Service\GenuineAccessaryGroupController@getEdit');
				Route::post('edit/{id}','Service\GenuineAccessaryGroupController@postEdit');
				Route::get('delete/{id}','Service\GenuineAccessaryGroupController@getDelete');
			});
			Route::group(['prefix'=>'details'], function(){
				Route::get('','Service\GenuineAccessaryDetailController@getList')->name('service.genuine-accessary-detail.getList');
				Route::get('create','Service\GenuineAccessaryDetailController@getCreateAll')->name('service.genuine-accessary-detail.getCreateAll');
				Route::get('create/{id}','Service\GenuineAccessaryDetailController@getCreate')->name('service.genuine-accessary-detail.getCreate');
				Route::post('create','Service\GenuineAccessaryDetailController@postCreate')->name('service.genuine-accessary-detail.postCreate');
				Route::get('edit/{id}','Service\GenuineAccessaryDetailController@getEdit')->name('service.genuine-accessary-detail.getEdit');
				Route::post('edit/{id}','Service\GenuineAccessaryDetailController@postEdit')->name('service.genuine-accessary-detail.postEdit');
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
		Route::get('','UserController@getList')->name('user.getList');
		Route::get('create','UserController@getCreate')->name('user.getCreate');
		Route::post('create','UserController@postCreate')->name('user.postCreate');
		Route::get('edit/{id}','UserController@getEdit')->name('user.getEdit');
		Route::post('edit/{id}','UserController@postEdit')->name('user.postEdit');
		Route::get('delete/{id}','UserController@getDelete')->name('user.getDelete');
	});

});