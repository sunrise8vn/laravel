<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CarCategory;
use App\Cars;
use App\OtherInfoCar;
use App\CarExteriors;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class CarExteriorsController extends Controller
{
    public function getDetail($permalink) 
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $otherInfoCar = OtherInfoCar::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        
        $car = Cars::where('permalink', $permalink)->where('isDeleted', 0)->first();
        if($car != null) {
            $car_id = $car->id;
            $carExteriors = CarExteriors::where('car_id', $car_id)->where('isDeleted', 0)->orderBy('id', 'desc')->get();
            return view('exterior', ['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'otherInfoCar'=>$otherInfoCar, 'car'=>$car, 'carExteriors'=>$carExteriors]);
        }
        else {
            return redirect('/');
        }
    }

    public function getList()
    {
        $cars = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.car-exterior.list',['cars'=>$cars]);
    }

    public function view($id)
    {
        $cars = Cars::find($id);
        $carExteriors = CarExteriors::where('car_id', $id)->where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.car-exterior.view', ['cars'=>$cars, 'carExteriors'=>$carExteriors]);
    }

    public function postCreate(Request $request, $id)
    {
        $this->validate($request,
            [
                'avatar_image_temp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'description' => 'max:2048'
            ],
            [
                'avatar_image_temp.required' => 'Bạn chưa chọn hình ảnh',
                'avatar_image_temp.max' => 'Hình ảnh phải có kích thước nhỏ hơn 2048 KB',
                'description.max' => 'Nội dung có độ dài tối đa 1000 ký tự'
            ]);

        $carExteriors = new CarExteriors;
        $carExteriors->car_id = $request->cars;
        $carExteriors->title = $request->title;
        $carExteriors->description = $request->description;
        $carExteriors->avatar = $request->avatar;
        $carExteriors->isDeleted = 0;

        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');            
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
            $destinationPath = public_path('/data/car/exterior/' .$request->cars .'/');

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
            $carExteriors->avatar = $avatar;                
            $carExteriors->size = $size;                
        }

        $carExteriors->save();

        return redirect('cp/car-exterior/view/'.$id)->with('notification','Thêm sản phẩm thành công');
    }

    public function postEdit(Request $request)
    {
        $this->validate($request,
            [
                'description' => 'max:2048'
            ],
            [
                'description.max' => 'Nội dung có độ dài tối đa 1000 ký tự'
            ]);

        $id = $request->idModal;
        $carExteriors = CarExteriors::find($id);
        $car_id = $request->carModal;
        $carExteriors->title = $request->titleModal;
        $carExteriors->description = $request->descriptionModal;
        $carExteriors->avatar = $request->avatarModal;

        if($request->hasFile('avatar_image_tempModal'))
        {
            $this->validate($request,
                [
                    'avatar_image_tempModal' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
                ],
                [
                    'avatar_image_tempModal.required' => 'Bạn chưa chọn hình ảnh',
                    'avatar_image_tempModal.max' => 'Hình ảnh phải có kích thước nhỏ hơn 2048 KB'
                ]);

            $file = $request->file('avatar_image_tempModal');            
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
            $destinationPath = public_path('/data/car/exterior/' .$car_id .'/');

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
            $carExteriors->avatar = $avatar;                
            $carExteriors->size = $size;              
        }

        $carExteriors->save();

        return redirect('cp/car-exterior/view/'.$car_id)->with('success',' ');
    }

    public function getDelete(Request $request) 
    {
        $id = $request->id;
        $carExteriors = CarExteriors::find($id);
        $carExteriors->isDeleted = 1;
        $carExteriors->save();
    }
}
