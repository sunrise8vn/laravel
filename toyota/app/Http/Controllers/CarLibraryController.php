<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CarCategory;
use App\Cars;
use App\CarLibrary;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class CarLibraryController extends Controller
{

    public function getDetail($permalink)
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();

        $car = Cars::where('permalink', $permalink)->where('isDeleted', 0)->first();
        if($car != null) {
            $car_id = $car->id;
            $carLibrary = CarLibrary::where('car_id', $car_id)->where('isDeleted', 0)->orderBy('id', 'desc')->get();
            return view('library', ['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'car'=>$car, 'carLibrary'=>$carLibrary]);
        }
        else {
            return redirect('/');
        }
    }

    public function getDetailMb($permalink)
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();

        $car = Cars::where('permalink', $permalink)->where('isDeleted', 0)->first();
        if($car != null) {
            $car_id = $car->id;
            $carLibrary = CarLibrary::where('car_id', $car_id)->where('isDeleted', 0)->orderBy('id', 'desc')->get();
            return view('library2', ['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'car'=>$car, 'carLibrary'=>$carLibrary]);
        }
        else {
            return redirect('/');
        }
    }

    public function getList()
    {
        $cars = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.car-library.list',['cars'=>$cars]);
    }

    public function view($id)
    {
        $cars = Cars::find($id);
        $carLibrary = CarLibrary::where('car_id', $id)->where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.car-library.view', ['cars'=>$cars, 'carLibrary'=>$carLibrary]);
    }

    public function getCreate()
    {
    	$cars = Cars::all();
    	return view('cp.car-library.create', ['cars'=>$cars]);
    }

    public function postCreate(Request $request)
    {
        $video = $request->video;

        if($video == null || $video == "") {
            $this->validate($request,
            [
                'avatar_image_temp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ],
            [
                'avatar_image_temp.required'=>'Bạn chưa chọn hình ảnh',
                'avatar_image_temp.max'=> 'Hình ảnh phải có kích thước nhỏ hơn 2048 KB',
            ]);
        }
    	
        $carLibrary = new CarLibrary;
        $carLibrary->car_id = $request->cars;
        $carLibrary->avatar = $request->avatar;
        $carLibrary->video = $request->video;
        $carLibrary->isDeleted = 0;
        // $carLibrary->save();

        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');            
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
			$destinationPath = public_path('/data/car/library/' .$request->cars .'/');

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
            $carLibrary->avatar = $avatar;                
            $carLibrary->size = $size;                
        }

        // $myFile = "http://i3.ytimg.com/vi/".$video."/maxresdefault.jpg";
        // $filename = basename($myFile);
        // $destinationPath = public_path('/data/car/library/' .$request->cars .'/');
        // Image::make($myFile)->save($destinationPath.$filename);

        $carLibrary->save();
        $car_id = $carLibrary->car_id;
        return redirect('cp/car-library/view/'.$car_id)->with('notification','Thêm sản phẩm thành công');
    }

    public function getDelete(Request $request)
    {
        $id = $request->id;
        $carLibrary = CarLibrary::find($id);
        $carLibrary->isDeleted = 1;
        $carLibrary->save();
        // return redirect('cp/car-library/view/'.$car_id)->with('notification','Xóa hình ảnh thành công');
    }
}
