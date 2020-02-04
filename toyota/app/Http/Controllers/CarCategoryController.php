<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CarCategoryRequest;
use App\CarCategory;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class CarCategoryController extends Controller
{
    
	public function getList()
    {
        // $carCategory = CarCategory::All()->where('isDeleted', 0);
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.car-category.list',['carCategory'=>$carCategory]);
    }

    public function getCreate()
    {
        return view('cp.car-category.create');
    }

    public function postCreate(Request $request)
    {
    	$this->validate($request,
            [
                'name' => 'required|unique:car_categories|between:3,100'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên danh mục',
                'name.between'=>'Tên danh mục phải có độ dài từ 3 đến 100 ký tự',
                'name.unique'=> 'Tên danh mục đã tồn tại',
            ]);

        $carCate = new CarCategory;
        $carCate->name = $request->name;
        $permalink = removeUnicode($request->name);
        $carCate->permalink = $permalink;
        $carCate->caption = $request->caption;
        $carCate->cover_image = $request->cover_image;
        $carCate->isDeleted = 0;
        $carCate->save();

        if($request->hasFile('cover_image_temp'))
        {
            $file = $request->file('cover_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $coverNonExt = removeUnicode(explode('.', $filename)[0]);
            $cover = $coverNonExt.".".$extension;
			$destinationPath = public_path('/data/car/cover/' .$carCate->id .'/');

            if(File::exists($destinationPath.$cover))
            {
                while(File::exists($destinationPath.$cover))
                {
                    $random = Str::random(4);
                    $cover = $coverNonExt ."_". $random .".".$extension;
                }
            }

            
            $file->move($destinationPath, $cover);
            $carCate->cover_image = $cover;                
        }

        $carCate->save();
        return redirect('cp/car-category/create')->with('notification','Thêm danh mục thành công');
    }
}
