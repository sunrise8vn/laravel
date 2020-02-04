<?php

namespace App\Http\Controllers\Spec;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Cars;
use App\Spec\SpecChair;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class SpecChairController extends Controller
{
    public function getList()
    {
        $specChair = SpecChair::where('isDeleted', 0)->where('status', 1)->orderBy('id', 'desc')->get();
        return view('cp.spec.chair.list', ['specChair'=>$specChair]);
    }

    public function getCreate()
    {
        $car_id = SpecChair::pluck('car_id')->all();
        $cars = Cars::whereNotIn('id', $car_id)->get();
        return view('cp.spec.chair.create', ['cars'=>$cars]);
    }

    public function postCreate(Request $request)
    {
        $car_id = $request->cars;
        $specChair = new SpecChair;
        $specChair->car_id = $car_id;
        $specChair->seat_cover_material = $request->seat_cover_material;
        $specChair->seat_type = $request->seat_type;
        $specChair->adjust_driver_seat = $request->adjust_driver_seat;
        $specChair->adjust_passenger_seat = $request->adjust_passenger_seat;
        $specChair->memory_location = $request->memory_location;
        $specChair->ventilation_function = $request->ventilation_function;
        $specChair->heating_function = $request->heating_function;
        $specChair->second_row = $request->second_row;
        $specChair->third_row = $request->third_row;
        $specChair->fourth_row = $request->fourth_row;
        $specChair->fifth_row = $request->fifth_row;
        $specChair->backrest_armrest = $request->backrest_armrest;
        $specChair->status = 1;
        $specChair->isDeleted = 0;
        
        // $updated_by = Auth::user()->id;
        $specChair->save();  
        
        return redirect('cp/spec/chair/create')->with('notification','Thêm thông tin thành công');
    }

 	public function getEdit($id)
    {
    	$specChair = SpecChair::where('id', $id)->where('isDeleted', 0)->first();
    	return view('cp.spec.chair.edit', ['specChair'=>$specChair]);
    }

    public function postEdit(Request $request, $id)
    {
        $specChair = SpecChair::find($id);
        $specChair->seat_cover_material = $request->seat_cover_material;
        $specChair->seat_type = $request->seat_type;
        $specChair->adjust_driver_seat = $request->adjust_driver_seat;
        $specChair->adjust_passenger_seat = $request->adjust_passenger_seat;
        $specChair->memory_location = $request->memory_location;
        $specChair->ventilation_function = $request->ventilation_function;
        $specChair->heating_function = $request->heating_function;
        $specChair->second_row = $request->second_row;
        $specChair->third_row = $request->third_row;
        $specChair->fourth_row = $request->fourth_row;
        $specChair->fifth_row = $request->fifth_row;
        $specChair->backrest_armrest = $request->backrest_armrest;
        
        // $updated_by = Auth::user()->id;
        $specChair->save();  
        
        return redirect('cp/spec/chair/edit/'.$id)->with('notification','Cập nhật thông tin thành công');
    }
}
