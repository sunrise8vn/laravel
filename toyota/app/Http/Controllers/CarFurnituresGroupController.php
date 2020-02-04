<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cars;
use App\CarFurnituresGroup;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class CarFurnituresGroupController extends Controller
{
    public function getList()
    {
        $furnituresGroup = CarFurnituresGroup::where('isDeleted', 0)->where('status', 1)->orderBy('id', 'desc')->get();
        return view('cp.car-furnitures.group.list',['furnituresGroup'=>$furnituresGroup]);
    }

    public function getCreate()
    {
        $carsId = CarFurnituresGroup::pluck('car_id')->all();
        $cars = Cars::whereNotIn('id', $carsId)->get();
        return view('cp.car-furnitures.group.create', ['cars'=>$cars]);
    }

    public function postCreate(Request $request)
    {

        $car_id = $request->cars;
        $furnituresGroup = new CarFurnituresGroup;
        $furnituresGroup->title = $request->title;
        $furnituresGroup->car_id = $car_id;
        $furnituresGroup->description = $request->description;
        $furnituresGroup->background = $request->background;
        $furnituresGroup->avatar = $request->avatar;
        $furnituresGroup->status = 1;

        if($request->hasFile('background_image_temp'))
        {
            $file = $request->file('background_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $backgroundNonExt = removeUnicode(explode('.', $filename)[0]);
            $background = $backgroundNonExt.".".$extension;
            $destinationPath = public_path('/data/car/furnitures/background/' .$car_id .'/');

            if(File::exists($destinationPath.$background))
            {
                while(File::exists($destinationPath.$background))
                {
                    $random = Str::random(4);
                    $background = $backgroundNonExt ."_". $random .".".$extension;
                }
            }

            $file->move($destinationPath, $background);
            $furnituresGroup->background = $background;
        }

        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
            $destinationPath = public_path('/data/car/furnitures/avatar/' .$car_id .'/');

            if(File::exists($destinationPath.$avatar))
            {
                while(File::exists($destinationPath.$avatar))
                {
                    $random = Str::random(4);
                    $avatar = $avatarNonExt ."_". $random .".".$extension;
                }
            }
            
            $file->move($destinationPath, $avatar);
            $furnituresGroup->avatar = $avatar;      
        }

        $furnituresGroup->save();
        
        return redirect('cp/car-furnitures/group/create')->with('notification','Thêm thông tin thành công');
    }

    public function getEdit($car_id)
    {
    	$cars = Cars::where('id', $car_id)->where('isDeleted', 0)->first();
        $furGrp = CarFurnituresGroup::where('car_id', $car_id)->where('isDeleted', 0)->first();
        return view('cp.car-furnitures.group.edit',['cars'=>$cars, 'furGrp'=>$furGrp]);
    }

    public function postEdit(Request $request, $id)
    {

    	$furGrp = CarFurnituresGroup::find($id);
    	$car_id = $request->cars;
        $furGrp->title = $request->title;
        $furGrp->description = $request->description;
		$furGrp->background = $request->background;
		$furGrp->avatar = $request->avatar;

		if($request->hasFile('background_image_temp'))
        {
            $file = $request->file('background_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $backgroundNonExt = removeUnicode(explode('.', $filename)[0]);
            $background = $backgroundNonExt.".".$extension;
			$destinationPath = public_path('/data/car/furnitures/background/' .$car_id .'/');

            if(File::exists($destinationPath.$background))
            {
                while(File::exists($destinationPath.$background))
                {
                    $random = Str::random(4);
                    $background = $backgroundNonExt ."_". $random .".".$extension;
                }
            }

            $file->move($destinationPath, $background);
            $furGrp->background = $background;
        }

        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
			$destinationPath = public_path('/data/car/furnitures/avatar/' .$car_id .'/');

            if(File::exists($destinationPath.$avatar))
            {
                while(File::exists($destinationPath.$avatar))
                {
                    $random = Str::random(4);
                    $avatar = $avatarNonExt ."_". $random .".".$extension;
                }
            }
            
            $file->move($destinationPath, $avatar);
            $furGrp->avatar = $avatar;      
        }

        $furGrp->save();
    	
        return redirect('cp/car-furnitures/group')->with('notification','Cập nhật thông tin thành công');
    }
}
