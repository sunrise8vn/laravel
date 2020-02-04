<?php

namespace App\Http\Controllers\Spec;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Cars;
use App\Spec\SpecEngineFrame;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class SpecEngineFrameController extends Controller
{
    public function getList()
    {
        $specEngineFrame = SpecEngineFrame::where('isDeleted', 0)->where('status', 1)->orderBy('id', 'desc')->get();
        return view('cp.spec.engine-frame.list',['specEngineFrame'=>$specEngineFrame]);
    }

    public function getCreate()
    {
        $carsId = SpecEngineFrame::pluck('car_id')->all();
        $cars = Cars::whereNotIn('id', $carsId)->get();
        return view('cp.spec.engine-frame.create', ['cars'=>$cars]);
    }

    public function postCreate(Request $request)
    {
        $car_id = $request->cars;
        $specEngineFrame = new SpecEngineFrame;
        $specEngineFrame->car_id = $car_id;
        $specEngineFrame->external_dimension = $request->external_dimension;
        $specEngineFrame->internal_dimension = $request->internal_dimension;
        $specEngineFrame->length = $request->length;
        $specEngineFrame->width = $request->width;
        $specEngineFrame->light_span = $request->light_span;
        $specEngineFrame->exit_angle = $request->exit_angle;
        $specEngineFrame->min_rotation_radius = $request->min_rotation_radius;
        $specEngineFrame->weight_without_load = $request->weight_without_load;
        $specEngineFrame->weight_full_load = $request->weight_full_load;
        $specEngineFrame->fuel_tank_capacity = $request->fuel_tank_capacity;
        $specEngineFrame->luggage_capacity = $request->luggage_capacity;
        $specEngineFrame->cargo_size = $request->cargo_size;
        $specEngineFrame->engine_type = $request->engine_type;
        $specEngineFrame->cylinder_number = $request->cylinder_number;
        $specEngineFrame->cylinder_arrangement = $request->cylinder_arrangement;
        $specEngineFrame->cylinder_capacity = $request->cylinder_capacity;
        $specEngineFrame->compression_ratio = $request->compression_ratio;
        $specEngineFrame->fuel_system = $request->fuel_system;
        $specEngineFrame->type_of_fuel = $request->type_of_fuel;
        $specEngineFrame->max_capacity = $request->max_capacity;
        $specEngineFrame->max_torque = $request->max_torque;
        $specEngineFrame->max_speed = $request->max_speed;
        $specEngineFrame->emission_standard = $request->emission_standard;
        $specEngineFrame->auto_engine = $request->auto_engine;
        $specEngineFrame->drive_mode = $request->drive_mode;
        $specEngineFrame->transmission_system = $request->transmission_system;
        $specEngineFrame->gear = $request->gear;
        $specEngineFrame->front_suspension = $request->front_suspension;
        $specEngineFrame->rear_suspension = $request->rear_suspension;
        $specEngineFrame->power_steering = $request->power_steering;
        $specEngineFrame->vgrs = $request->vgrs;
        $specEngineFrame->type_of_rim = $request->type_of_rim;
        $specEngineFrame->tire_size = $request->tire_size;
        $specEngineFrame->spare_tire = $request->spare_tire;
        $specEngineFrame->front_brakes = $request->front_brakes;
        $specEngineFrame->rear_brakes = $request->rear_brakes;
        $specEngineFrame->combined_fuel = $request->combined_fuel;
        $specEngineFrame->fuel_in_urban = $request->fuel_in_urban;
        $specEngineFrame->fuel_outside_urban = $request->fuel_outside_urban;
        $specEngineFrame->status = 1;
        $specEngineFrame->isDeleted = 0;
        
        // $updated_by = Auth::user()->id;
        $specEngineFrame->save();  
        
        return redirect('cp/spec/engine-frame/create')->with('notification','Thêm thông tin thành công');
    }

    public function getEdit($id)
    {
        $specEngineFrame = SpecEngineFrame::where('id', $id)->where('isDeleted', 0)->first();
    	return view('cp.spec.engine-frame.edit', ['specEngineFrame'=>$specEngineFrame]);
    }

    public function postEdit(Request $request, $id)
    {

        $specEngineFrame = SpecEngineFrame::find($id);
        $specEngineFrame->external_dimension = $request->external_dimension;
        $specEngineFrame->internal_dimension = $request->internal_dimension;
        $specEngineFrame->length = $request->length;
        $specEngineFrame->width = $request->width;
        $specEngineFrame->light_span = $request->light_span;
        $specEngineFrame->exit_angle = $request->exit_angle;
        $specEngineFrame->min_rotation_radius = $request->min_rotation_radius;
        $specEngineFrame->weight_without_load = $request->weight_without_load;
        $specEngineFrame->weight_full_load = $request->weight_full_load;
        $specEngineFrame->fuel_tank_capacity = $request->fuel_tank_capacity;
        $specEngineFrame->luggage_capacity = $request->luggage_capacity;
        $specEngineFrame->cargo_size = $request->cargo_size;
        $specEngineFrame->engine_type = $request->engine_type;
        $specEngineFrame->cylinder_number = $request->cylinder_number;
        $specEngineFrame->cylinder_arrangement = $request->cylinder_arrangement;
        $specEngineFrame->cylinder_capacity = $request->cylinder_capacity;
        $specEngineFrame->compression_ratio = $request->compression_ratio;
        $specEngineFrame->fuel_system = $request->fuel_system;
        $specEngineFrame->type_of_fuel = $request->type_of_fuel;
        $specEngineFrame->max_capacity = $request->max_capacity;
        $specEngineFrame->max_torque = $request->max_torque;
        $specEngineFrame->max_speed = $request->max_speed;
        $specEngineFrame->emission_standard = $request->emission_standard;
        $specEngineFrame->auto_engine = $request->auto_engine;
        $specEngineFrame->drive_mode = $request->drive_mode;
        $specEngineFrame->transmission_system = $request->transmission_system;
        $specEngineFrame->gear = $request->gear;
        $specEngineFrame->front_suspension = $request->front_suspension;
        $specEngineFrame->rear_suspension = $request->rear_suspension;
        $specEngineFrame->power_steering = $request->power_steering;
        $specEngineFrame->vgrs = $request->vgrs;
        $specEngineFrame->type_of_rim = $request->type_of_rim;
        $specEngineFrame->tire_size = $request->tire_size;
        $specEngineFrame->spare_tire = $request->spare_tire;
        $specEngineFrame->front_brakes = $request->front_brakes;
        $specEngineFrame->rear_brakes = $request->rear_brakes;
        $specEngineFrame->combined_fuel = $request->combined_fuel;
        $specEngineFrame->fuel_in_urban = $request->fuel_in_urban;
        $specEngineFrame->fuel_outside_urban = $request->fuel_outside_urban;
        
        // $updated_by = Auth::user()->id;
        $specEngineFrame->save();  
        
        return redirect('cp/spec/engine-frame/edit/'.$id)->with('notification','Cập nhật thông tin thành công');
    }
}
