<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CarRequest;
use App\CarCategory;
use App\Cars;
use App\CarColors;
use App\CarLibrary;
use App\CarExteriorsGroup;
use App\CarExteriors;
use App\CarFurnituresGroup;
use App\CarFurnitures;
use App\CarFunctionGroup;
use App\CarFunction;
use App\GenuineAccessories;
use App\Spec\SpecEngineFrame;
use App\Spec\SpecExteriors;
use App\Spec\SpecFurnitures;
use App\Spec\SpecChair;
use App\Spec\SpecConvnient;
use App\Spec\SpecSecurity;
use App\Spec\SpecActiveSafety;
use App\Spec\SpecPassiveSafety;
use App\OtherInfoCar;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CarController extends Controller
{

    public function getList()
    {
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $otherInfoCar = OtherInfoCar::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        return view('cp.car.list',['carDetail'=>$carDetail, 'otherInfoCar'=>$otherInfoCar]);
    }

    public function getCreate()
    {
    	$carCategory = CarCategory::all();
    	return view('cp.car.create', ['carCategory'=>$carCategory]);
    }

    public function postCreate(Request $request)
    {
    	$this->validate($request,
            [
                'name' => 'required|unique:car_details|between:3,100',
                'avatar_image_temp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ],
            [
                'name.required'=>'Bạn chưa nhập tên xe',
                'name.between'=>'Tên xe phải có độ dài từ 3 đến 100 ký tự',
                'name.unique'=> 'Tên xe đã tồn tại',
                'avatar_image_temp.required' => 'Bạn chưa chọn hình ảnh',
                'avatar_image_temp.max' => 'Hình ảnh phải có kích thước nhỏ hơn 2048 KB',
            ]);

        $permalink = removeUnicode($request->name);
        $countPermalink = Cars::where('permalink', $request->permalink)->where('isDeleted', 0)->count();
        
        if($countPermalink == 0) {
            $car = new Cars;
            $car->car_cate_id = $request->carCategory;
            $car->name = $request->name;
            $permalink = removeUnicode($request->name);
            $car->permalink = $permalink;
            $car->price = $request->price;
            $car->number_of_seats = $request->number_of_seats;
            $car->design = $request->design;
            $car->fuel = $request->fuel;
            $car->origin = $request->origin;
            // $car->info = $request->info;
            $car->avatar = $request->avatar;
            $car->isDeleted = 0;
            $car->save();

            $car_id = $car->id;
            $input = $request->itemsInfo;
            $count = 0;
            $itemsInfo = json_decode($input[0]);
            if(!@empty ($itemsInfo)) {
                $count = count($itemsInfo);
                for ($i=0; $i < $count; $i++) { 
                    $otherInfoCar = new OtherInfoCar;
                    $otherInfoCar->content = $itemsInfo[$i];
                    $otherInfoCar->car_id = $car_id;
                    $otherInfoCar->save();
                }
            }

            if($request->hasFile('avatar_image_temp'))
            {
                $file = $request->file('avatar_image_temp');
                $extension  = $file->getClientOriginalExtension();
                $filename = $file->getClientOriginalName();
                
                $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
                $avatar = $avatarNonExt.".".$extension;
                $destinationPath = public_path('/data/car/avatar/' .$car->id .'/');
                if(!File::isDirectory($destinationPath)){
                    File::makeDirectory($destinationPath, 0777, true, true);
                }
                $destinationThumbPath = public_path('/data/car/thumb/' .$car->id .'/');
                if(!File::isDirectory($destinationThumbPath)){
                    File::makeDirectory($destinationThumbPath, 0777, true, true);
                }
                if(File::exists($destinationThumbPath.$avatar))
                {
                    while(File::exists($destinationThumbPath.$avatar))
                    {
                        $random = Str::random(4);
                        $avatar = $avatarNonExt ."_". $random .".".$extension;
                    }
                }
                
                $resize_thumb = Image::make($file->getRealPath());
                $resize_thumb->resize(250, 145)->save($destinationThumbPath . $avatar);

                $resize_avatar = Image::make($file->getRealPath());
                $resize_avatar->resize(500, 350, function($constraint){
                    $constraint->aspectRatio();
                })->save($destinationPath . $avatar);

                $file->move($destinationPath, $avatar);
                $car->avatar = $avatar;  
                $car->save();            
            }

            return redirect('cp/car/create')->with('notification','Thêm mẫu xe thành công');
        }
        else {
            return redirect('cp/car/edit/' .$id)->with('error','Tên mẫu xe đã tồn tại');
        }
    }

    public function getEdit($id)
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        $car = Cars::find($id);
        $otherInfoCar = OtherInfoCar::where('car_id', $id)->where('isDeleted', 0)->orderBy('id', 'asc')->get();
        return view('cp.car.edit',['carCategory'=> $carCategory,'car'=> $car, 'otherInfoCar'=>$otherInfoCar]);
    }

    public function postEdit(Request $request, $id)
    {
        $this->validate($request,
            [
                'name' => 'required|between:3,100',
                'avatar_image_temp' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ],
            [
                'name.required'=>'Bạn chưa nhập tên xe',
                'name.between'=>'Tên xe phải có độ dài từ 3 đến 100 ký tự',
                'name.unique'=> 'Tên xe đã tồn tại',
                'avatar_image_temp.max' => 'Hình ảnh phải có kích thước nhỏ hơn 2048 KB',
            ]);

        $car = Cars::find($id);
        $countPermalink = Cars::where('name', $request->name)->where('id', '!=', $id)->where('isDeleted', 0)->count();
        
        if($countPermalink == 0) {
            $car->car_cate_id = $request->carCategory;
            $car->name = $request->name;
            $permalink = removeUnicode($request->name);
            $car->permalink = $permalink;
            $car->price = $request->price;
            $car->number_of_seats = $request->number_of_seats;
            $car->design = $request->design;
            $car->fuel = $request->fuel;
            $car->origin = $request->origin;
            // $car->info = $request->info;
            $car->save();

            if($request->hasFile('avatar_image_temp'))
            {
                $file = $request->file('avatar_image_temp');
                $extension  = $file->getClientOriginalExtension();
                $filename = $file->getClientOriginalName();
                
                $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
                $avatar = $avatarNonExt.".".$extension;
                $destinationPath = public_path('/data/car/avatar/' .$car->id .'/');
                if(!File::isDirectory($destinationPath)){
                    File::makeDirectory($destinationPath, 0777, true, true);
                }

                $destinationThumbPath = public_path('/data/car/thumb/' .$car->id .'/');
                if(!File::isDirectory($destinationThumbPath)){
                    File::makeDirectory($destinationThumbPath, 0777, true, true);
                }

                if(File::exists($destinationThumbPath.$avatar))
                {
                    while(File::exists($destinationThumbPath.$avatar))
                    {
                        $random = Str::random(4);
                        $avatar = $avatarNonExt ."_". $random .".".$extension;
                    }
                }
                
                $resize_thumb = Image::make($file->getRealPath());
                $resize_thumb->resize(250, 145)->save($destinationThumbPath . $avatar);

                $resize_avatar = Image::make($file->getRealPath());
                $resize_avatar->resize(500, 350, function($constraint){
                  $constraint->aspectRatio();
                 })->save($destinationPath . $avatar);

                // $file->move($destinationPath, $avatar);
                $car->avatar = $avatar;    
                $car->save();            
            }
            return redirect('cp/car/edit/' .$id)->with('notification','Cập nhật thông tin thành công');
        }
        else {
            return redirect('cp/car/edit/' .$id)->with('error','Tên mẫu xe đã tồn tại');
        }
    }

    public function getCarDetail($permalink) 
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $otherInfoCar = OtherInfoCar::where('isDeleted', 0)->orderBy('id', 'asc')->get();

        $car = Cars::where('permalink', $permalink)->where('isDeleted', 0)->first();
        if($car != null) {
            $car_id = $car->id;
            $car_cate_id = $car->car_cate_id;

            $carColors = CarColors::where('car_id', $car_id)->where('isDeleted', 0)->get();

            $anotherCarModels = Cars::where('car_cate_id', $car_cate_id)->where('id', '!=', $car_id)->where('isDeleted', 0)->orderBy('id', 'desc')->get();

            $carLibrary = CarLibrary::where('car_id', $car_id)->where('isDeleted', 0)->orderBy('id', 'desc')->get();

            $carExteriorsGroup = CarExteriorsGroup::where('car_id', $car_id)->where('isDeleted', 0)->first();
            $carExteriors = CarExteriors::where('car_id', $car_id)->where('isDeleted', 0)->get();
            $carFurnituresGroup = CarFurnituresGroup::where('car_id', $car_id)->where('isDeleted', 0)->first();
            $carFurnitures = CarFurnitures::where('car_id', $car_id)->where('isDeleted', 0)->get();
            $functionGroup = CarFunctionGroup::where('isDeleted', 0)->get();
            $carFunctions = CarFunction::where('car_id', $car_id)->where('isDeleted', 0)->orderBy('id', 'desc')->get();
            $genuineAccessoriesGroup = GenuineAccessories::where('car_cate_id', $car_cate_id)->where('isDeleted', 0)->groupBy('group_id')->get();
            $genuineAccessories = GenuineAccessories::where('car_cate_id', $car_cate_id)->where('isDeleted', 0)->get();

            $specEngineFrame = SpecEngineFrame::where('car_id', $car_id)->where('isDeleted', 0)->first();
            $specExteriors = SpecExteriors::where('car_id', $car_id)->where('isDeleted', 0)->first();
            
            $specFurnitures = SpecFurnitures::where('car_id', $car_id)->where('isDeleted', 0)->first();
            $specChair = SpecChair::where('car_id', $car_id)->where('isDeleted', 0)->first();
            $specConvnient = SpecConvnient::where('car_id', $car_id)->where('isDeleted', 0)->first();
            $specSecurity = SpecSecurity::where('car_id', $car_id)->where('isDeleted', 0)->first();
            $specActiveSafety = SpecActiveSafety::where('car_id', $car_id)->where('isDeleted', 0)->first();
            $specPassiveSafety = SpecPassiveSafety::where('car_id', $car_id)->where('isDeleted', 0)->first();

            
            return view('car',['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'otherInfoCar'=>$otherInfoCar, 'car'=>$car, 'carColors'=>$carColors, 'anotherCarModels'=>$anotherCarModels, 'carLibrary'=>$carLibrary, 'carExteriorsGroup'=>$carExteriorsGroup, 'carExteriors'=>$carExteriors, 'carFurnituresGroup'=>$carFurnituresGroup, 'carFurnitures'=>$carFurnitures, 'functionGroup'=>$functionGroup, 'carFunctions'=>$carFunctions, 'specEngineFrame'=>$specEngineFrame, 'specExteriors'=>$specExteriors, 'specFurnitures'=>$specFurnitures, 'specChair'=>$specChair, 'specConvnient'=>$specConvnient, 'specSecurity'=>$specSecurity, 'specActiveSafety'=>$specActiveSafety, 'specPassiveSafety'=>$specPassiveSafety, 'genuineAccessoriesGroup'=>$genuineAccessoriesGroup, 'genuineAccessories'=>$genuineAccessories]);
        }
        else {
            return redirect('/');
        }
        
    }

    public function getFunctions($type, $permalink) 
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();

        $car = Cars::where('permalink', $permalink)->where('isDeleted', 0)->first();
        if($car != null) {
            $car_id = $car->id;
            switch ($type) {
                case 'thu-vien':
                    $carLibrary = CarLibrary::where('car_id', $car_id)->where('isDeleted', 0)->orderBy('id', 'desc')->get(); 
                    return view('library', ['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'car'=>$car, 'carLibrary'=>$carLibrary]); 
                    break;
                case 'ngoai-that':
                    $carExteriors = CarExteriors::where('car_id', $car_id)->where('isDeleted', 0)->orderBy('id', 'desc')->get();
                    return view('exterior', ['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'car'=>$car, 'carExteriors'=>$carExteriors]); 
                    break;
                case 'noi-that':
                    $carFurnitures = CarFurnitures::where('car_id', $car_id)->where('isDeleted', 0)->orderBy('id', 'desc')->get();
                    return view('furnitures', ['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'car'=>$car, 'carFurnitures'=>$carFurnitures]); 
                    break;
                default:
                    return redirect('/');
                    break;
            }
        }
        else {
            return redirect('/');
        }
    }

    public function getFunctionsMb($type, $permalink) 
    {
        $car = Cars::where('permalink', $permalink)->where('isDeleted', 0)->first();
        if($car != null) {
            $car_id = $car->id;
            switch ($type) {
                case 'thu-vien':
                    $carLibrary = CarLibrary::where('car_id', $car_id)->where('isDeleted', 0)->orderBy('id', 'desc')->get(); 
                    return view('layout.mobile.gallery', ['car'=>$car, 'carLibrary'=>$carLibrary]); 
                    break;
                case 'ngoai-that':
                    $carExteriors = CarExteriors::where('car_id', $car_id)->where('isDeleted', 0)->orderBy('id', 'desc')->get();
                    return view('layout.mobile.exterior', ['car'=>$car, 'carExteriors'=>$carExteriors]); 
                    break;
                case 'noi-that':
                    $carFurnitures = CarFurnitures::where('car_id', $car_id)->where('isDeleted', 0)->orderBy('id', 'desc')->get();
                    return view('layout.mobile.furnitures', ['car'=>$car, 'carFurnitures'=>$carFurnitures]); 
                    break;
                default:
                    return redirect('/');
                    break;
            }
        }
        else {
            return redirect('/');
        }
    }
}
