<?php

namespace App\Http\Controllers\Spec;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Cars;
use App\Spec\SpecConvnient;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class SpecConvnientController extends Controller
{
    public function getList()
    {
        $specConvnient = SpecConvnient::where('isDeleted', 0)->where('status', 1)->orderBy('id', 'desc')->get();
        return view('cp.spec.convnient.list',['specConvnient'=>$specConvnient]);
    }

    public function getCreate()
    {
        $carsId = SpecConvnient::pluck('car_id')->all();
        $cars = Cars::whereNotIn('id', $carsId)->get();
        return view('cp.spec.convnient.create', ['cars'=>$cars]);
    }

    public function postCreate(Request $request)
    {
        $car_id = $request->cars;
        $specConvnient = new SpecConvnient;
        $specConvnient->car_id = $car_id;
        $specConvnient->rear_glass_sun_blinds = $request->rear_glass_sun_blinds;
        $specConvnient->rear_door_sun_blinds = $request->rear_door_sun_blinds;
        $specConvnient->rear_air_door = $request->rear_air_door;
        $specConvnient->cooling_box = $request->cooling_box;
        $specConvnient->smart_key_and_push_button_start = $request->smart_key_and_push_button_start;
        $specConvnient->electric_door_lock = $request->electric_door_lock;
        $specConvnient->remote_door_lock_function = $request->remote_door_lock_function;
        $specConvnient->adjust_power_window = $request->adjust_power_window;
        $specConvnient->electric_control_scoop = $request->electric_control_scoop;
        $specConvnient->cruise_control_system = $request->cruise_control_system;
        $specConvnient->status = 1;
        $specConvnient->isDeleted = 0;
        
        // $updated_by = Auth::user()->id;
        $specConvnient->save();  
        
        return redirect('cp/spec/convnient/create')->with('notification','Thêm thông tin thành công');
    }

    public function getEdit($id)
    {
    	$specConvnient = SpecConvnient::where('id', $id)->where('isDeleted', 0)->first();
    	return view('cp.spec.convnient.edit', ['specConvnient'=>$specConvnient]);
    }

    public function postEdit(Request $request, $id)
    {

        $specConvnient = SpecConvnient::find($id);
        $specConvnient->rear_glass_sun_blinds = $request->rear_glass_sun_blinds;
        $specConvnient->rear_door_sun_blinds = $request->rear_door_sun_blinds;
        $specConvnient->rear_air_door = $request->rear_air_door;
        $specConvnient->cooling_box = $request->cooling_box;
        $specConvnient->smart_key_and_push_button_start = $request->smart_key_and_push_button_start;
        $specConvnient->electric_door_lock = $request->electric_door_lock;
        $specConvnient->remote_door_lock_function = $request->remote_door_lock_function;
        $specConvnient->adjust_power_window = $request->adjust_power_window;
        $specConvnient->electric_control_scoop = $request->electric_control_scoop;
        $specConvnient->cruise_control_system = $request->cruise_control_system;
        
        // $updated_by = Auth::user()->id;
        $specConvnient->save();  
        
        return redirect('cp/spec/convnient/edit/'.$id)->with('notification','Cập nhật thông tin thành công');
    }
}
