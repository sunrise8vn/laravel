<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cars;
use App\OtherInfoCar;

class OtherInfoCarController extends Controller
{
	public function getAll($carId) {
		$otherInfoCar = OtherInfoCar::where('car_id', $carId)->where('isDeleted', 0)->orderBy('id', 'asc')->get();
		return $otherInfoCar;
	}
	public function postCreate(Request $request)
    {
        $otherInfoCar = new OtherInfoCar;
        $otherInfoCar->content = $request->content;
        $otherInfoCar->car_id = $request->carId;
        $otherInfoCar->save();
    }

    public function getDelete(Request $request) 
    {
        $id = $request->car_id;
        $otherInfoCar = OtherInfoCar::find($id);
        $otherInfoCar->delete();
        // $otherInfoCar->save();
    }

    public function getListOtherInfo(Request $request) 
    {
        $car_id = $request->car_id;
        $otherInfoCar = OtherInfoCar::where('car_id', $car_id)->where('isDeleted', 0)->orderBy('id', 'asc')->get();
        return $otherInfoCar;
    }
}
