<?php

namespace App\Http\Controllers\Spec;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Cars;
use App\Spec\SpecPassiveSafety;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class SpecPassiveSafetyController extends Controller
{
    public function getList()
    {
        $specPassiveSafety = SpecPassiveSafety::where('isDeleted', 0)->where('status', 1)->orderBy('id', 'desc')->get();
        return view('cp.spec.passive-safety.list',['specPassiveSafety'=>$specPassiveSafety]);
    }

    public function getCreate()
    {
        $carsId = SpecPassiveSafety::pluck('car_id')->all();
        $cars = Cars::whereNotIn('id', $carsId)->get();
        return view('cp.spec.passive-safety.create', ['cars'=>$cars]);
    }

    public function postCreate(Request $request)
    {

		$car_id = $request->cars;
        $specPassiveSafety = new SpecPassiveSafety;
        $specPassiveSafety->car_id = $car_id;
        $specPassiveSafety->airbag_driver_and_front_passenger = $request->airbag_driver_and_front_passenger;
        $specPassiveSafety->front_side_airbag = $request->front_side_airbag;
        $specPassiveSafety->curtain_airbag = $request->curtain_airbag;
        $specPassiveSafety->rear_side_airbag = $request->rear_side_airbag;
        $specPassiveSafety->driver_knee_airbag = $request->driver_knee_airbag;
        $specPassiveSafety->passenger_knee_airbag = $request->passenger_knee_airbag;
        $specPassiveSafety->goa_chassis = $request->goa_chassis;
        $specPassiveSafety->front_seatbelt = $request->front_seatbelt;
        $specPassiveSafety->chair_has_structure_reduce_neck_injury = $request->chair_has_structure_reduce_neck_injury;
        $specPassiveSafety->collapsible_steering_column = $request->collapsible_steering_column;
        $specPassiveSafety->dumping_brake_pedal = $request->dumping_brake_pedal;
        $specPassiveSafety->status = 1;
        $specPassiveSafety->isDeleted = 0;
        
        // $updated_by = Auth::user()->id;
        $specPassiveSafety->save();  

        return redirect('cp/spec/passive-safety/create/')->with('notification','Thêm thông tin thành công');
    }

    public function getEdit($id)
    {
    	$specPassiveSafety = SpecPassiveSafety::where('id', $id)->where('isDeleted', 0)->first();
    	return view('cp.spec.passive-safety.edit', ['specPassiveSafety'=>$specPassiveSafety]);
    }

    public function postEdit(Request $request, $id)
    {

        $specPassiveSafety = SpecPassiveSafety::find($id);
        $specPassiveSafety->airbag_driver_and_front_passenger = $request->airbag_driver_and_front_passenger;
        $specPassiveSafety->front_side_airbag = $request->front_side_airbag;
        $specPassiveSafety->curtain_airbag = $request->curtain_airbag;
        $specPassiveSafety->rear_side_airbag = $request->rear_side_airbag;
        $specPassiveSafety->driver_knee_airbag = $request->driver_knee_airbag;
        $specPassiveSafety->passenger_knee_airbag = $request->passenger_knee_airbag;
        $specPassiveSafety->goa_chassis = $request->goa_chassis;
        $specPassiveSafety->front_seatbelt = $request->front_seatbelt;
        $specPassiveSafety->chair_has_structure_reduce_neck_injury = $request->chair_has_structure_reduce_neck_injury;
        $specPassiveSafety->collapsible_steering_column = $request->collapsible_steering_column;
        $specPassiveSafety->dumping_brake_pedal = $request->dumping_brake_pedal;
        
        // $updated_by = Auth::user()->id;
        $specPassiveSafety->save();  
        
        return redirect('cp/spec/passive-safety/edit/'.$id)->with('notification','Cập nhật thông tin thành công');
    }
}
