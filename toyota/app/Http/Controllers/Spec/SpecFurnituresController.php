<?php

namespace App\Http\Controllers\Spec;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Cars;
use App\Spec\SpecFurnitures;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class SpecFurnituresController extends Controller
{
    public function getList()
    {
        $specFurnitures = SpecFurnitures::where('isDeleted', 0)->where('status', 1)->orderBy('id', 'desc')->get();
        return view('cp.spec.furnitures.list',['specFurnitures'=>$specFurnitures]);
    }

    public function getCreate()
    {
        $carsId = SpecFurnitures::pluck('car_id')->all();
        $cars = Cars::whereNotIn('id', $carsId)->get();
        return view('cp.spec.furnitures.create', ['cars'=>$cars]);
    }

    public function postCreate(Request $request)
    {
        $car_id = $request->cars;
        $specFurnitures = new SpecFurnitures;
        $specFurnitures->car_id = $car_id;
        $specFurnitures->type_of_steering_wheel = $request->type_of_steering_wheel;
        $specFurnitures->steering_wheel_material = $request->steering_wheel_material;
        $specFurnitures->integrated_control_button = $request->integrated_control_button;
        $specFurnitures->adjust_steering_wheel = $request->adjust_steering_wheel;
        $specFurnitures->gear_shift_lever = $request->gear_shift_lever;
        $specFurnitures->memory_location = $request->memory_location;
        $specFurnitures->interior_door_handle = $request->interior_door_handle;
        $specFurnitures->watch_type = $request->watch_type;
        $specFurnitures->eco_mode_indicator_light = $request->eco_mode_indicator_light;
        $specFurnitures->function_of_fuel_consumption_indicator = $request->function_of_fuel_consumption_indicator;
        $specFurnitures->gear_lever_position_notification_function = $request->gear_lever_position_notification_function;
        $specFurnitures->multi_information_display = $request->multi_information_display;
        $specFurnitures->sunroof = $request->sunroof;
        $specFurnitures->music_player = $request->music_player;
        $specFurnitures->number_of_speaker = $request->number_of_speaker;
        $specFurnitures->aux_connection_port = $request->aux_connection_port;
        $specFurnitures->usb_connection_port = $request->usb_connection_port;
        $specFurnitures->bluetooth_connection = $request->bluetooth_connection;
        $specFurnitures->voice_control_system = $request->voice_control_system;
        $specFurnitures->dashboard_from_rear_seat = $request->dashboard_from_rear_seat;
        $specFurnitures->wifi_connection = $request->wifi_connection;
        $specFurnitures->hands_free_conversation_system = $request->hands_free_conversation_system;
        $specFurnitures->smartphone_connection = $request->smartphone_connection;
        $specFurnitures->hdmi_connection = $request->hdmi_connection;
        $specFurnitures->front_air_conditioning_system = $request->front_air_conditioning_system;
        $specFurnitures->wireless_charging_system = $request->wireless_charging_system;
        $specFurnitures->status = 1;
        $specFurnitures->isDeleted = 0;
        
        // $updated_by = Auth::user()->id;
        $specFurnitures->save();  
        
        return redirect('cp/spec/furnitures/create')->with('notification','Thêm thông tin thành công');
    }

    public function getEdit($id)
    {
    	$specFurnitures = SpecFurnitures::where('id', $id)->where('isDeleted', 0)->first();
    	return view('cp.spec.furnitures.edit', ['specFurnitures'=>$specFurnitures]);
    }

    public function postEdit(Request $request, $id)
    {

        $specFurnitures = SpecFurnitures::find($id);
        $specFurnitures->type_of_steering_wheel = $request->type_of_steering_wheel;
        $specFurnitures->steering_wheel_material = $request->steering_wheel_material;
        $specFurnitures->integrated_control_button = $request->integrated_control_button;
        $specFurnitures->adjust_steering_wheel = $request->adjust_steering_wheel;
        $specFurnitures->gear_shift_lever = $request->gear_shift_lever;
        $specFurnitures->memory_location = $request->memory_location;
        $specFurnitures->interior_door_handle = $request->interior_door_handle;
        $specFurnitures->watch_type = $request->watch_type;
        $specFurnitures->eco_mode_indicator_light = $request->eco_mode_indicator_light;
        $specFurnitures->function_of_fuel_consumption_indicator = $request->function_of_fuel_consumption_indicator;
        $specFurnitures->gear_lever_position_notification_function = $request->gear_lever_position_notification_function;
        $specFurnitures->multi_information_display = $request->multi_information_display;
        $specFurnitures->sunroof = $request->sunroof;
        $specFurnitures->music_player = $request->music_player;
        $specFurnitures->number_of_speaker = $request->number_of_speaker;
        $specFurnitures->aux_connection_port = $request->aux_connection_port;
        $specFurnitures->usb_connection_port = $request->usb_connection_port;
        $specFurnitures->bluetooth_connection = $request->bluetooth_connection;
        $specFurnitures->voice_control_system = $request->voice_control_system;
        $specFurnitures->dashboard_from_rear_seat = $request->dashboard_from_rear_seat;
        $specFurnitures->wifi_connection = $request->wifi_connection;
        $specFurnitures->hands_free_conversation_system = $request->hands_free_conversation_system;
        $specFurnitures->smartphone_connection = $request->smartphone_connection;
        $specFurnitures->hdmi_connection = $request->hdmi_connection;
        $specFurnitures->front_air_conditioning_system = $request->front_air_conditioning_system;
        $specFurnitures->wireless_charging_system = $request->wireless_charging_system;
        
        // $updated_by = Auth::user()->id;
        $specFurnitures->save();  
        
        return redirect('cp/spec/furnitures/edit/'.$id)->with('notification','Cập nhật thông tin thành công');
    }
}
