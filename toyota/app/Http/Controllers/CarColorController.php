<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CarRequest;
use App\Cars;
use App\CarColors;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class CarColorController extends Controller
{
    
    public function getList()
    {
        $carColors = CarColors::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.car-color.list',['carColors'=>$carColors]);
    }

    public function getCreate()
    {
    	$cars = Cars::all();
    	return view('cp.car-color.create', ['cars'=>$cars]);
    }

    public function postCreate(Request $request)
    {
    	$this->validate($request,
            [
                'name' => 'required|unique:car_details|between:3,100'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên xe',
                'name.between'=>'Tên xe phải có độ dài từ 3 đến 100 ký tự',
                'name.unique'=> 'Tên xe đã tồn tại',
            ]);

        $carcolor = new CarColors;
        $carcolor->car_id = $request->cars;
        $carcolor->name = $request->name;
        $carcolor->color = $request->color;
        $carcolor->avatar = $request->avatar;
        $carcolor->isDeleted = 0;
        $carcolor->save();

        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
			$destinationPath = public_path('/data/car/color/' .$carcolor->cars->id .'/');

            if(File::exists($destinationPath.$avatar))
            {
                while(File::exists($destinationPath.$avatar))
                {
                    $random = Str::random(4);
                    $avatar = $avatarNonExt ."_". $random .".".$extension;
                }
            }
            
            $file->move($destinationPath, $avatar);
            $carcolor->avatar = $avatar;                
        }

        $carcolor->save();
        return redirect('cp/car-color/create')->with('notification','Thêm màu xe thành công');
    }

    public function getEdit($id)
    {
        $carcolor = CarColors::where('id', $id)->where('isDeleted', 0)->first();
        return view('cp.car-color.edit', ['carcolor'=>$carcolor]);
    }

    public function postEdit(Request $request, $id)
    {
        $carcolor = CarColors::find($id);
        $carcolor->name = $request->name;
        $carcolor->color = $request->color;
        $carcolor->avatar = $request->avatar;
        
        // $updated_by = Auth::user()->id;
        $carcolor->save();  
        
        return redirect('cp/car-color/edit/'.$id)->with('notification','Cập nhật thông tin thành công');
    }

    public function getDelete(Request $request) 
    {
        $id = $request->id;
        $carcolor = CarColors::find($id);
        $carcolor->isDeleted = 1;
        $carcolor->save();
    }

}
