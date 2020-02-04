<?php

namespace App\Http\Controllers\Spec;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Cars;
use App\Spec\SpecExteriors;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class SpecExteriorsController extends Controller
{
    public function getList()
    {
        $specExteriors = SpecExteriors::where('isDeleted', 0)->where('status', 1)->orderBy('id', 'desc')->get();
        return view('cp.spec.exteriors.list',['specExteriors'=>$specExteriors]);
    }

    public function getCreate()
    {
        $carsId = SpecExteriors::pluck('car_id')->all();
        $cars = Cars::whereNotIn('id', $carsId)->get();
        return view('cp.spec.exteriors.create', ['cars'=>$cars]);
    }

    public function postCreate(Request $request)
    {
        $car_id = $request->cars;
        $specExteriors = new SpecExteriors;
        $specExteriors->car_id = $car_id;
        $specExteriors->lamp_near = $request->lamp_near;
        $specExteriors->lamp_far = $request->lamp_far;
        $specExteriors->daytime_lamp = $request->daytime_lamp;
        $specExteriors->lamp_washing_system = $request->lamp_washing_system;
        $specExteriors->auto_lamp_system = $request->auto_lamp_system;
        $specExteriors->light_reminder_system = $request->light_reminder_system;
        $specExteriors->automatic_projection_angle_extension_system = $request->automatic_projection_angle_extension_system;
        $specExteriors->projection_balance_system = $request->projection_balance_system;
        $specExteriors->guide_standby_light_mode = $request->guide_standby_light_mode;
        $specExteriors->high_brake_light = $request->high_brake_light;
        $specExteriors->front_fog_lamp = $request->front_fog_lamp;
        $specExteriors->rear_fog_lamp = $request->rear_fog_lamp;
        $specExteriors->electric_adjustment_function = $request->electric_adjustment_function;
        $specExteriors->electric_folding_function = $request->electric_folding_function;
        $specExteriors->integrated_turn_signal_light = $request->integrated_turn_signal_light;
        $specExteriors->integrated_welcome_light = $request->integrated_welcome_light;
        $specExteriors->color = $request->color;
        $specExteriors->self_adjusting_function_when_reversing = $request->self_adjusting_function_when_reversing;
        $specExteriors->memory_location = $request->memory_location;
        $specExteriors->mirror_drying_function = $request->mirror_drying_function;
        $specExteriors->water_repellent_funtion = $request->water_repellent_funtion;
        $specExteriors->automatic_anti_glare_function = $request->automatic_anti_glare_function;
        $specExteriors->rain_wipers_front = $request->rain_wipers_front;
        $specExteriors->rain_wipers_rear = $request->rain_wipers_rear;
        $specExteriors->rear_glass_drying_function = $request->rear_glass_drying_function;
        $specExteriors->antenna = $request->antenna;
        $specExteriors->door_handle_outside = $request->door_handle_outside;
        $specExteriors->sports_crank_set = $request->sports_crank_set;
        $specExteriors->front_bumper = $request->front_bumper;
        $specExteriors->rear_bumper = $request->rear_bumper;
        $specExteriors->front_grille = $request->front_grille;
        $specExteriors->rear_grille = $request->rear_grille;
        $specExteriors->fender = $request->fender;
        $specExteriors->dual_exhaust_pipe = $request->dual_exhaust_pipe;
        $specExteriors->car_roof_support_bar = $request->car_roof_support_bar;
        $specExteriors->status = 1;
        $specExteriors->isDeleted = 0;
        
        // $updated_by = Auth::user()->id;
        $specExteriors->save();  
        
        return redirect('cp/spec/exteriors/create')->with('notification','Thêm thông tin thành công');
    }

    public function getEdit($id)
    {
    	$specExteriors = SpecExteriors::where('id', $id)->where('isDeleted', 0)->first();
    	return view('cp.spec.exteriors.edit', ['specExteriors'=>$specExteriors]);
    }

    public function postEdit(Request $request, $id)
    {

        $specExteriors = SpecExteriors::find($id);
        $specExteriors->lamp_near = $request->lamp_near;
        $specExteriors->lamp_far = $request->lamp_far;
        $specExteriors->daytime_lamp = $request->daytime_lamp;
        $specExteriors->lamp_washing_system = $request->lamp_washing_system;
        $specExteriors->auto_lamp_system = $request->auto_lamp_system;
        $specExteriors->light_reminder_system = $request->light_reminder_system;
        $specExteriors->automatic_projection_angle_extension_system = $request->automatic_projection_angle_extension_system;
        $specExteriors->projection_balance_system = $request->projection_balance_system;
        $specExteriors->guide_standby_light_mode = $request->guide_standby_light_mode;
        $specExteriors->high_brake_light = $request->high_brake_light;
        $specExteriors->front_fog_lamp = $request->front_fog_lamp;
        $specExteriors->rear_fog_lamp = $request->rear_fog_lamp;
        $specExteriors->electric_adjustment_function = $request->electric_adjustment_function;
        $specExteriors->electric_folding_function = $request->electric_folding_function;
        $specExteriors->integrated_turn_signal_light = $request->integrated_turn_signal_light;
        $specExteriors->integrated_welcome_light = $request->integrated_welcome_light;
        $specExteriors->color = $request->color;
        $specExteriors->self_adjusting_function_when_reversing = $request->self_adjusting_function_when_reversing;
        $specExteriors->memory_location = $request->memory_location;
        $specExteriors->mirror_drying_function = $request->mirror_drying_function;
        $specExteriors->water_repellent_funtion = $request->water_repellent_funtion;
        $specExteriors->automatic_anti_glare_function = $request->automatic_anti_glare_function;
        $specExteriors->rain_wipers_front = $request->rain_wipers_front;
        $specExteriors->rain_wipers_rear = $request->rain_wipers_rear;
        $specExteriors->rear_glass_drying_function = $request->rear_glass_drying_function;
        $specExteriors->antenna = $request->antenna;
        $specExteriors->door_handle_outside = $request->door_handle_outside;
        $specExteriors->sports_crank_set = $request->sports_crank_set;
        $specExteriors->front_bumper = $request->front_bumper;
        $specExteriors->rear_bumper = $request->rear_bumper;
        $specExteriors->front_grille = $request->front_grille;
        $specExteriors->rear_grille = $request->rear_grille;
        $specExteriors->fender = $request->fender;
        $specExteriors->dual_exhaust_pipe = $request->dual_exhaust_pipe;
        $specExteriors->car_roof_support_bar = $request->car_roof_support_bar;
        
        // $updated_by = Auth::user()->id;
        $specExteriors->save();  
        
        return redirect('cp/spec/exteriors/edit/'.$id)->with('notification','Cập nhật thông tin thành công');
    }
}
