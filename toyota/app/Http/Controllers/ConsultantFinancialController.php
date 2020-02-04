<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarCategory;
use App\Cars;

class ConsultantFinancialController extends Controller
{
    public function index()
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();

        return view('consultant-financial',['carCategory'=>$carCategory, 'carDetail'=>$carDetail]);
    }
}
