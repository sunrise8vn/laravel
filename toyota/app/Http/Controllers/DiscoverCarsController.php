<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CarRequest;
use App\CarCategory;
use App\Cars;
use App\DiscoverCars;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class DiscoverCarsController extends Controller
{
	public function getList()
    {
        $discoverCars = DiscoverCars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.discover-car.list',['discoverCars'=>$discoverCars]);
    }

    public function getListCars(Request $request) {
    	$car_cate_id = $request->car_cate_id;
    	$cars = Cars::where('car_cate_id', $car_cate_id)->where('isDeleted', 0)->get();
    	return $cars;
    }

    public function getCreate()
    {
    	$car_cate_id = DiscoverCars::where('isDeleted', 0)->pluck('car_cate_id')->all();
        $carCategory = CarCategory::whereNotIn('id', $car_cate_id)->get();
    	return view('cp.discover-car.create', ['carCategory'=>$carCategory]);
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

        $discoverCars = new DiscoverCars;
        $discoverCars->car_cate_id = $request->carCategory;
        $discoverCars->car_id = $request->cars;
        $discoverCars->avatar = $request->avatar;
        $discoverCars->isDeleted = 0;

        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
			$destinationPath = public_path('/data/car/discover/' .$request->carCategory .'/');

            if(File::exists($destinationPath.$avatar))
            {
                while(File::exists($destinationPath.$avatar))
                {
                    $random = Str::random(4);
                    $avatar = $avatarNonExt ."_". $random .".".$extension;
                }
            }
            
            $file->move($destinationPath, $avatar);
            $discoverCars->avatar = $avatar;                
        }

        $discoverCars->save();

        return redirect('cp/discover-car/create')->with('notification','Thêm dữ liệu thành công');
    }

    public function getEdit($id)
    {
    	$discoverCars = DiscoverCars::where('isDeleted', 0)->where('id', $id)->first();
    	if(!empty($discoverCars)) {
    		$car_cate_id = $discoverCars->car_cate_id;
	        $carCategory = CarCategory::where('isDeleted', 0)->where('id', $car_cate_id)->first();
	        $cars = Cars::where('car_cate_id', $car_cate_id)->where('isDeleted', 0)->get();
	        $discoverCars = DiscoverCars::where('id', $id)->where('isDeleted', 0)->first();
	        return view('cp.discover-car.edit', ['carCategory'=>$carCategory, 'cars'=>$cars, 'discoverCars'=>$discoverCars]);
    	}
    	else {
    		return redirect('cp/discover-car');
    	}
    	
    }

    public function postEdit(Request $request, $id)
    {
    	$car_id = $request->car_id;
    	if($car_id != $request->cars) {
    		$this->validate($request,
            [
                'avatar_image_temp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ],
            [
                'avatar_image_temp.required'=>'Bạn chưa chọn hình ảnh',
                'avatar_image_temp.max'=> 'Hình ảnh phải có kích thước nhỏ hơn 2048 KB',
            ]);

    		$discoverCars = DiscoverCars::find($id);
	        $discoverCars->isDeleted = 1;
	        $discoverCars->save(); 

	        $discoverCars = new DiscoverCars;
	        $discoverCars->car_cate_id = $request->carCategory;
	        $discoverCars->car_id = $request->cars;
	        $discoverCars->avatar = $request->avatar;
	        $discoverCars->isDeleted = 0;

	        if($request->hasFile('avatar_image_temp'))
	        {
	            $file = $request->file('avatar_image_temp');
	            $extension  = $file->getClientOriginalExtension();
	            $filename = $file->getClientOriginalName();
	            
	            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
	            $avatar = $avatarNonExt.".".$extension;
				$destinationPath = public_path('/data/car/discover/' .$request->carCategory .'/');

	            if(File::exists($destinationPath.$avatar))
	            {
	                while(File::exists($destinationPath.$avatar))
	                {
	                    $random = Str::random(4);
	                    $avatar = $avatarNonExt ."_". $random .".".$extension;
	                }
	            }
	            
	            $file->move($destinationPath, $avatar);
	            $discoverCars->avatar = $avatar;                
	        }

	        $discoverCars->save(); 
	        $id = $discoverCars->id;
    	}
    	else {
    		$discoverCars = DiscoverCars::find($id);
	        $discoverCars->avatar = $request->avatar;
	        
	        if($request->hasFile('avatar_image_temp'))
	        {
	            $file = $request->file('avatar_image_temp');
	            $extension  = $file->getClientOriginalExtension();
	            $filename = $file->getClientOriginalName();
	            
	            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
	            $avatar = $avatarNonExt.".".$extension;
				$destinationPath = public_path('/data/car/discover/' .$request->carCategory .'/');

	            if(File::exists($destinationPath.$avatar))
	            {
	                while(File::exists($destinationPath.$avatar))
	                {
	                    $random = Str::random(4);
	                    $avatar = $avatarNonExt ."_". $random .".".$extension;
	                }
	            }
	            
	            $file->move($destinationPath, $avatar);
	            $discoverCars->avatar = $avatar;                
	        }

	        $discoverCars->save(); 
    	}
        
        return redirect('cp/discover-car/edit/'.$id)->with('notification','Cập nhật thông tin thành công');
    }

    public function postDelete(Request $request) 
    {
        $id = $request->id;
        $discoverCars = DiscoverCars::find($id);
        $discoverCars->isDeleted = 1;
        $discoverCars->save();
    }
}
