<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CarCategory;
use App\GenuineAccessoriesGroup;

class GenuineAccessoriesGroupController extends Controller
{
    public function getList($car_cate_id)
    {
        $furnituresGroup = CarFurnituresGroup::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.car-furnitures.group.list',['furnituresGroup'=>$furnituresGroup]);
    }

    // public function getEdit($car_id)
    // {
    // 	$cars = Cars::where('id', $car_id)->where('isDeleted', 0)->first();
    //     $furGrp = CarFurnituresGroup::where('car_id', $car_id)->where('isDeleted', 0)->first();
    //     return view('cp.car-furnitures.group.edit',['cars'=>$cars, 'furGrp'=>$furGrp]);
    // }
}
