<?php

namespace App\Http\Controllers\Spec;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Cars;
use App\Spec\SpecActiveSafety;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class SpecActiveSafetyController extends Controller
{
    public function getList()
    {
        $specActiveSafety = SpecActiveSafety::where('isDeleted', 0)->where('status', 1)->orderBy('id', 'desc')->get();
        return view('cp.spec.active-safety.list',['specActiveSafety'=>$specActiveSafety]);
    }

    public function getCreate()
    {
        $carsId = SpecActiveSafety::pluck('car_id')->all();
        $cars = Cars::whereNotIn('id', $carsId)->get();
        return view('cp.spec.active-safety.create', ['cars'=>$cars]);
    }

    public function postCreate(Request $request)
    {
        $car_id = $request->cars;
        $specActiveSafety = new SpecActiveSafety;
        $specActiveSafety->car_id = $car_id;
        $specActiveSafety->anti_lock_braking_system = $request->anti_lock_braking_system;
        $specActiveSafety->emergency_branking_force_support_system = $request->emergency_branking_force_support_system;
        $specActiveSafety->electronic_brake_force_distributuon_system = $request->electronic_brake_force_distributuon_system;
        $specActiveSafety->vehicle_body_stability_system = $request->vehicle_body_stability_system;
        $specActiveSafety->traction_control_system = $request->traction_control_system;
        $specActiveSafety->system_support_horizontal_departure = $request->system_support_horizontal_departure;
        $specActiveSafety->system_support_departure_pass_hill = $request->system_support_departure_pass_hill;
        $specActiveSafety->speed_selection_system_over_terrain = $request->speed_selection_system_over_terrain;
        $specActiveSafety->terrain_adaptation_system = $request->terrain_adaptation_system;
        $specActiveSafety->emergency_brake_light = $request->emergency_brake_light;
        $specActiveSafety->reverse_camera = $request->reverse_camera;
        $specActiveSafety->rear_parking_assist_sensor = $request->rear_parking_assist_sensor;
        $specActiveSafety->front_parking_angle_sensor = $request->front_parking_angle_sensor;
        $specActiveSafety->rear_parking_angle_sensor = $request->rear_parking_angle_sensor;
        $specActiveSafety->status = 1;
        $specActiveSafety->isDeleted = 0;
        
        // $updated_by = Auth::user()->id;
        $specActiveSafety->save();  

        return redirect('cp/spec/active-safety/create/')->with('notification','Thêm thông tin thành công');
    }

    public function getEdit($id)
    {
    	$specActiveSafety = SpecActiveSafety::where('id', $id)->where('isDeleted', 0)->first();
    	return view('cp.spec.active-safety.edit', ['specActiveSafety'=>$specActiveSafety]);
    }

    public function postEdit(Request $request, $id)
    {

        $specActiveSafety = SpecActiveSafety::find($id);
        $specActiveSafety->anti_lock_braking_system = $request->anti_lock_braking_system;
        $specActiveSafety->emergency_branking_force_support_system = $request->emergency_branking_force_support_system;
        $specActiveSafety->electronic_brake_force_distributuon_system = $request->electronic_brake_force_distributuon_system;
        $specActiveSafety->vehicle_body_stability_system = $request->vehicle_body_stability_system;
        $specActiveSafety->traction_control_system = $request->traction_control_system;
        $specActiveSafety->system_support_horizontal_departure = $request->system_support_horizontal_departure;
        $specActiveSafety->system_support_departure_pass_hill = $request->system_support_departure_pass_hill;
        $specActiveSafety->speed_selection_system_over_terrain = $request->speed_selection_system_over_terrain;
        $specActiveSafety->terrain_adaptation_system = $request->terrain_adaptation_system;
        $specActiveSafety->emergency_brake_light = $request->emergency_brake_light;
        $specActiveSafety->reverse_camera = $request->reverse_camera;
        $specActiveSafety->rear_parking_assist_sensor = $request->rear_parking_assist_sensor;
        $specActiveSafety->front_parking_angle_sensor = $request->front_parking_angle_sensor;
        $specActiveSafety->rear_parking_angle_sensor = $request->rear_parking_angle_sensor;
        
        // $updated_by = Auth::user()->id;
        $specActiveSafety->save();  
        
        return redirect('cp/spec/active-safety/edit/'.$id)->with('notification','Cập nhật thông tin thành công');
    }
}
