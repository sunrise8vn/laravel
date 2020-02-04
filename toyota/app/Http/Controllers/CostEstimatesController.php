<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarCategory;
use App\Cars;
use App\Slide;
use App\DiscoverCars;
use App\SalesmenGroup;
use App\Salesmen;
use App\NewsCategories;
use App\News;

class CostEstimatesController extends Controller
{
    public function index()
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();

        return view('cost-estimates',['carCategory'=>$carCategory, 'carDetail'=>$carDetail]);
    }
}
