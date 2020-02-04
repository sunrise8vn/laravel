<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cars;
use App\CarFunctionGroup;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class CarFunctionGroupController extends Controller
{
    public function getList()
    {
        $functionGroup = CarFunctionGroup::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.car-function.group.list',['functionGroup'=>$functionGroup]);
    }

    public function getEdit($car_id)
    {
    	$cars = Cars::where('id', $car_id)->where('isDeleted', 0)->first();
        $funGrp = CarFunctionGroup::where('car_id', $car_id)->where('isDeleted', 0)->first();
        return view('cp.car-function.group.edit',['cars'=>$cars, 'funGrp'=>$funGrp]);
    }
}
