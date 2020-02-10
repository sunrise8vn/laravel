<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CarCategory;
use App\Cars;
use App\OtherInfoCar;

class DownloadFileController extends Controller
{
    public function index()
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->get();

        $otherInfoCar = OtherInfoCar::where('isDeleted', 0)->orderBy('id', 'asc')->get();

        return view('download',['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'otherInfoCar'=>$otherInfoCar]);
    }
}
