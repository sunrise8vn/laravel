<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cars;
use App\CarFunction;
use App\CarFunctionGroup;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class CarFunctionController extends Controller
{
    public function getList()
    {
        $cars = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.car-function.list',['cars'=>$cars]);
    }

    public function view($id)
    {
        $cars = Cars::find($id);
        $functionGroup = CarFunctionGroup::where('isDeleted', 0)->get();
        $carFunctions = CarFunction::where('car_id', $id)->where('isDeleted', 0)->orderBy('id', 'desc')->get();
        // dd($carFunctions);
        return view('cp.car-function.view', ['cars'=>$cars, 'functionGroup'=>$functionGroup, 'carFunctions'=>$carFunctions]);
    }

    public function postCreate(Request $request)
    {
    	$this->validate($request,
            [
                'avatar_image_temp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ],
            [
                'avatar_image_temp.required'=>'Bạn chưa chọn hình ảnh',
                'avatar_image_temp.max'=> 'Hình ảnh phải có kích thước nhỏ hơn 2048 KB',
            ]);

        $carFunction = new CarFunction;
        $carFunction->car_id = $request->cars;
        $carFunction->group_id = $request->functionGroup;
        $carFunction->title = $request->title;
        $carFunction->description = $request->description;
        $carFunction->avatar = $request->avatar;
        $carFunction->isDeleted = 0;
        // $carFunction->save();

        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');            
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
			$destinationPath = public_path('/data/car/function/' .$request->cars .'/');

            if(File::exists($destinationPath.$avatar))
            {
                while(File::exists($destinationPath.$avatar))
                {
                    $random = Str::random(4);
                    $avatar = $avatarNonExt ."_". $random .".".$extension;
                }
            }

            
            $file->move($destinationPath, $avatar);
            $size = File::size($destinationPath.$avatar) / 1024;
            $carFunction->avatar = $avatar;                
            $carFunction->size = $size;                
        }

        $carFunction->save();
        $car_id = $carFunction->car_id;
        return redirect('cp/car-function/view/'.$car_id)->with('notification','Thêm tính năng thành công');
    }

    public function getDelete($id) 
    {
        $carFunction = CarFunction::find($id);
        $carFunction->isDeleted = 1;
        $carFunction->save();
        return redirect('cp/carFunction/view/'.$id)->with('notification','Xóa tính năng thành công');
    }
}
