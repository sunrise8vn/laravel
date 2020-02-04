<?php

namespace App\Http\Controllers\Spec;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Cars;
use App\Spec\SpecSecurity;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class SpecSecurityController extends Controller
{
    public function getList()
    {
        $specSecurity = SpecSecurity::where('isDeleted', 0)->where('status', 1)->orderBy('id', 'desc')->get();
        return view('cp.spec.security.list',['specSecurity'=>$specSecurity]);
    }

    public function getCreate()
    {
        $carsId = SpecSecurity::pluck('car_id')->all();
        $cars = Cars::whereNotIn('id', $carsId)->get();
        return view('cp.spec.security.create', ['cars'=>$cars]);
    }

 	public function postCreate(Request $request)
    {
        $car_id = $request->cars;
        $specSecurity = new SpecSecurity;
        $specSecurity->car_id = $car_id;
        $specSecurity->alarm_system = $request->alarm_system;
        $specSecurity->motor_lock_encryption_system = $request->motor_lock_encryption_system;
        $specSecurity->status = 1;
        $specSecurity->isDeleted = 0;
        
        // $updated_by = Auth::user()->id;
        $specSecurity->save();  
        
        return redirect('cp/spec/security/create')->with('notification','Thêm thông tin thành công');
    }

    public function getEdit($id)
    {
    	$specSecurity = SpecSecurity::where('id', $id)->where('isDeleted', 0)->first();
    	return view('cp.spec.security.edit', ['specSecurity'=>$specSecurity]);
    }

    public function postEdit(Request $request, $id)
    {
        $this->validate($request,
            [
                // 'title' => 'required|between:3,200',
            ],
            [
                // 'title.required'=>'Bạn chưa nhập tiêu đề bài viết',
                // 'title.unique'=> 'Tiêu đề bài viết đã tồn tại',
                // 'title.between'=> 'Tiêu đề bài viết phải có độ dài từ 3 đến 200 ký tự',
            ]);

        $specSecurity = SpecSecurity::find($id);
        $specSecurity->alarm_system = $request->alarm_system;
        $specSecurity->motor_lock_encryption_system = $request->motor_lock_encryption_system;
       
        // $updated_by = Auth::user()->id;
        $specSecurity->save();  
        
        return redirect('cp/spec/security/edit/'.$id)->with('notification','Cập nhật thông tin thành công');
    }
}
