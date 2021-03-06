<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cars;
use App\CarExteriorsGroup;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class CarExteriorsGroupController extends Controller
{
    public function getList()
    {
        $exteriorsGroup = CarExteriorsGroup::where('isDeleted', 0)->where('status', 1)->orderBy('id', 'desc')->get();
        return view('cp.car-exterior.group.list',['exteriorsGroup'=>$exteriorsGroup]);
    }

    public function getCreate()
    {
        $carsId = CarExteriorsGroup::pluck('car_id')->all();
        $cars = Cars::whereNotIn('id', $carsId)->get();
        // $exteriorsGroup = CarExteriorsGroup::where('isDeleted', 0)->where('status', 0)->get();
        return view('cp.car-exterior.group.create', ['cars'=>$cars]);
    }

    public function postCreate(Request $request)
    {

        $car_id = $request->cars;
        $exteriorsGroup = new CarExteriorsGroup;
        $exteriorsGroup->title = $request->title;
        $exteriorsGroup->car_id = $car_id;
        $exteriorsGroup->description = $request->description;
		$exteriorsGroup->background = $request->background;
		$exteriorsGroup->avatar = $request->avatar;
        $exteriorsGroup->status = 1;

		if($request->hasFile('background_image_temp'))
        {
            $file = $request->file('background_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $backgroundNonExt = removeUnicode(explode('.', $filename)[0]);
            $background = $backgroundNonExt.".".$extension;
			$destinationPath = public_path('/data/car/exterior/background/' .$car_id .'/');

            if(File::exists($destinationPath.$background))
            {
                while(File::exists($destinationPath.$background))
                {
                    $random = Str::random(4);
                    $background = $backgroundNonExt ."_". $random .".".$extension;
                }
            }

            $file->move($destinationPath, $background);
            $exteriorsGroup->background = $background;
        }

        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
			$destinationPath = public_path('/data/car/exterior/avatar/' .$car_id .'/');

            if(File::exists($destinationPath.$avatar))
            {
                while(File::exists($destinationPath.$avatar))
                {
                    $random = Str::random(4);
                    $avatar = $avatarNonExt ."_". $random .".".$extension;
                }
            }
            
            $file->move($destinationPath, $avatar);
            $exteriorsGroup->avatar = $avatar;      
        }

        $exteriorsGroup->save();
    	
        return redirect('cp/car-exterior/group/create')->with('notification','Thêm thông tin thành công');
    }

    public function getEdit($car_id)
    {
        $cars = Cars::where('id', $car_id)->where('isDeleted', 0)->first();
        $exteriorsGroup = CarExteriorsGroup::where('car_id', $car_id)->where('isDeleted', 0)->first();
        return view('cp.car-exterior.group.edit',['cars'=>$cars, 'exteriorsGroup'=>$exteriorsGroup]);
    }

    public function postEdit(Request $request, $id)
    {

        $exteriorsGroup = CarExteriorsGroup::find($id);
        $car_id = $request->cars;
        $exteriorsGroup->title = $request->title;
        $exteriorsGroup->description = $request->description;
        $exteriorsGroup->background = $request->background;
        $exteriorsGroup->avatar = $request->avatar;

        if($request->hasFile('background_image_temp'))
        {
            $file = $request->file('background_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $backgroundNonExt = removeUnicode(explode('.', $filename)[0]);
            $background = $backgroundNonExt.".".$extension;
            $destinationPath = public_path('/data/car/exterior/background/' .$car_id .'/');

            if(File::exists($destinationPath.$background))
            {
                while(File::exists($destinationPath.$background))
                {
                    $random = Str::random(4);
                    $background = $backgroundNonExt ."_". $random .".".$extension;
                }
            }

            $file->move($destinationPath, $background);
            $exteriorsGroup->background = $background;
        }

        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
            $destinationPath = public_path('/data/car/exterior/avatar/' .$car_id .'/');

            if(File::exists($destinationPath.$avatar))
            {
                while(File::exists($destinationPath.$avatar))
                {
                    $random = Str::random(4);
                    $avatar = $avatarNonExt ."_". $random .".".$extension;
                }
            }
            
            $file->move($destinationPath, $avatar);
            $exteriorsGroup->avatar = $avatar;      
        }

        $exteriorsGroup->save();
        
        return redirect('cp/car-exterior/group')->with('notification','Cập nhật thông tin thành công');
    }
}
