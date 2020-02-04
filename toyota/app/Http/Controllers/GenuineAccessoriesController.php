<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CarCategory;
use App\GenuineAccessoriesGroup;
use App\GenuineAccessories;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class GenuineAccessoriesController extends Controller
{
    public function getList()
    {
    	$carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.car-accessories.list', ['carCategory'=>$carCategory]);
    }

    public function view($car_cate_id)
    {
        $carCategory = CarCategory::find($car_cate_id);
        $genuineAccessoriesGroup = GenuineAccessoriesGroup::where('isDeleted', 0)->get();
        $genuineAccessories = GenuineAccessories::where('isDeleted', 0)->where('car_cate_id', $car_cate_id)->orderBy('id', 'desc')->get();
        return view('cp.car-accessories.view', ['carCategory'=>$carCategory, 'genuineAccessoriesGroup'=>$genuineAccessoriesGroup, 'genuineAccessories'=>$genuineAccessories]);
    }

    public function postCreate(Request $request, $car_cate_id)
    {
    	$this->validate($request,
            [
                'avatar_image_temp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ],
            [
                'avatar_image_temp.required'=>'Bạn chưa chọn hình ảnh',
                'avatar_image_temp.max'=> 'Hình ảnh phải có kích thước nhỏ hơn 2048 KB',
            ]);

    	$genuineAccessories = new GenuineAccessories;
    	$genuineAccessories->car_cate_id = $car_cate_id;
        $genuineAccessories->group_id = $request->genuineAccessoriesGroup;
        $genuineAccessories->name = $request->name;
        $permalink = removeUnicode($request->name);
        $genuineAccessories->permalink = $permalink;
        $genuineAccessories->price = $request->price;
        $genuineAccessories->summary = $request->summary;
        $genuineAccessories->content = $request->content;
        $genuineAccessories->avatar = $request->avatar;
        $genuineAccessories->isDeleted = 0;

        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');            
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
			$destinationPath = public_path('/data/car/accessories/' .$car_cate_id .'/');

            if(File::exists($destinationPath.$avatar))
            {
                while(File::exists($destinationPath.$avatar))
                {
                    $random = Str::random(4);
                    $avatar = $avatarNonExt ."_". $random .".".$extension;
                }
            }

            $file->move($destinationPath, $avatar);
            $genuineAccessories->avatar = $avatar;                
        }

        $genuineAccessories->save();

        return redirect('cp/car-accessories/view/'.$car_cate_id)->with('notification','Thêm phụ kiện thành công');
    }

    public function postEdit(Request $request)
    {
    	$id = $request->idModal;
    	$genuineAccessories = GenuineAccessories::find($id);
    	$car_cate_id = $request->carCategoryModal;
    	$genuineAccessories->car_cate_id = $car_cate_id;
        $genuineAccessories->group_id = $request->genuineAccessoriesGroupModal;
        $genuineAccessories->name = $request->nameModal;
        $permalink = removeUnicode($request->nameModal);
        $genuineAccessories->permalink = $permalink;
        $genuineAccessories->price = $request->priceModal;
        $genuineAccessories->summary = $request->summaryModal;
        $genuineAccessories->content = $request->contentModal;
        $genuineAccessories->avatar = $request->avatarModal;

        if($request->hasFile('avatar_image_tempModal'))
        {
            $file = $request->file('avatar_image_tempModal');            
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
			$destinationPath = public_path('/data/car/accessories/' .$car_cate_id .'/');

            if(File::exists($destinationPath.$avatar))
            {
                while(File::exists($destinationPath.$avatar))
                {
                    $random = Str::random(4);
                    $avatar = $avatarNonExt ."_". $random .".".$extension;
                }
            }

            $file->move($destinationPath, $avatar);
            $genuineAccessories->avatar = $avatar;                
        }

        $genuineAccessories->save();

        return redirect('cp/car-accessories/view/'.$car_cate_id)->with('notification','Cập nhật phụ kiện thành công');
    }

    public function getDelete($id) 
    {
        $genuineAccessories = GenuineAccessories::find($id);
        $car_cate_id = $genuineAccessories->car_cate_id;
        $genuineAccessories->isDeleted = 1;
        $genuineAccessories->save();
        return redirect('cp/car-accessories/view/'.$car_cate_id)->with('notification','Xóa phụ kiện thành công');
    }
}
