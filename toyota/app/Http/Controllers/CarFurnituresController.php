<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cars;
use App\CarFurnitures;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class CarFurnituresController extends Controller
{
    public function getList()
    {
        $cars = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.car-furnitures.list',['cars'=>$cars]);
    }

    public function view($id)
    {
        $cars = Cars::find($id);
        $carFurnitures = CarFurnitures::where('car_id', $id)->where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.car-furnitures.view', ['cars'=>$cars, 'carFurnitures'=>$carFurnitures]);
    }

    public function postCreate(Request $request, $id)
    {
        $this->validate($request,
            [
                'avatar_image_temp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ],
            [
                'avatar_image_temp.required'=>'Bạn chưa chọn hình ảnh',
                'avatar_image_temp.max'=> 'Hình ảnh phải có kích thước nhỏ hơn 2048 KB',
            ]);

        $carFurnitures = new CarFurnitures;
        $carFurnitures->car_id = $request->cars;
        $carFurnitures->title = $request->title;
        $carFurnitures->description = $request->description;
        $carFurnitures->avatar = $request->avatar;
        $carFurnitures->isDeleted = 0;

        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');            
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
            $destinationPath = public_path('/data/car/furnitures/' .$request->cars .'/');

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
            $carFurnitures->avatar = $avatar;                
            $carFurnitures->size = $size;                
        }

        $carFurnitures->save();

        return redirect('cp/car-furnitures/view/'.$id)->with('notification','Thêm sản phẩm thành công');
    }

    public function postEdit(Request $request)
    {
        $id = $request->idModal;
        $carFurnitures = CarFurnitures::find($id);
        $car_id = $request->carModal;
        $carFurnitures->title = $request->titleModal;
        $carFurnitures->description = $request->descriptionModal;
        $carFurnitures->avatar = $request->avatarModal;

        if($request->hasFile('avatar_image_tempModal'))
        {
            $file = $request->file('avatar_image_tempModal');            
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
            $destinationPath = public_path('/data/car/furnitures/' .$car_id .'/');

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
            $carFurnitures->avatar = $avatar;                
            $carFurnitures->size = $size;              
        }

        $carFurnitures->save();

        return redirect('cp/car-furnitures/view/'.$car_id)->with('success',' ');
    }

    public function getDelete(Request $request) 
    {
        $id = $request->id;
        $carFurnitures = CarFurnitures::find($id);
        $carFurnitures->isDeleted = 1;
        $carFurnitures->save();
    }
}
