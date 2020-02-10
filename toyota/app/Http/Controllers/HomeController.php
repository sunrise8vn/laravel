<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarCategory;
use App\Cars;
use App\OtherInfoCar;
use App\Slide;
use App\DiscoverCars;
use App\SalesmenGroup;
use App\Salesmen;
use App\NewsCategories;
use App\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $otherInfoCar = OtherInfoCar::where('isDeleted', 0)->orderBy('id', 'asc')->get();

        $slide = Slide::where('isDeleted', 0)->orderBy('updated_at', 'desc')->get();
        
        $discoverCars = DiscoverCars::where('isDeleted', 0)->orderBy('id', 'desc')->get();

        $salesmenGroup = SalesmenGroup::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        $salesmen = Salesmen::where('isDeleted', 0)->orderBy('updated_at', 'desc')->get();
        $newsCategory = NewsCategories::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        $news = News::where('isDeleted', 0)->orderBy('id', 'desc')->get();


        return view('index1',['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'otherInfoCar'=>$otherInfoCar, 'slide'=>$slide, 'discoverCars'=>$discoverCars, 'salesmenGroup'=>$salesmenGroup, 'salesmen'=>$salesmen, 'newsCategory'=>$newsCategory, 'news'=>$news]);
    }

}
