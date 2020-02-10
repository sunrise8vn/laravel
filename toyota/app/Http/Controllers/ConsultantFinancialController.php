<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarCategory;
use App\Cars;
use App\OtherInfoCar;

class ConsultantFinancialController extends Controller
{
    public function index()
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $otherInfoCar = OtherInfoCar::where('isDeleted', 0)->orderBy('id', 'asc')->get();

        return view('consultant-financial',['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'otherInfoCar'=>$otherInfoCar]);
    }
}
