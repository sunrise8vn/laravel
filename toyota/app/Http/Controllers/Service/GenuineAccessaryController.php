<?php

namespace App\Http\Controllers\service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Service\GenuineAccessary;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class GenuineAccessaryController extends Controller
{
    public function getList()
    {
        $genuineAccessary = GenuineAccessary::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.service.accessary.list',['genuineAccessary'=>$genuineAccessary]);
    }

    public function getCreate()
    {
    	return view('cp.service.accessary.create');
    }

    public function postCreate(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|between:3,100',
            ],
            [
                'name.required'=>'Bạn chưa nhập tên sản phẩm',
                'name.between'=> 'Tên sản phẩm phải có độ dài từ 3 đến 100 ký tự',
            ]);

        $genuineAccessary = new GenuineAccessary;
        $genuineAccessary->name = $request->name;
        $permalink = removeUnicode($request->name);
        $genuineAccessary->permalink = $permalink;
        $genuineAccessary->avatar = $request->avatar;
        $genuineAccessary->save();
        // $updated_by = Auth::user()->id;
        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt."-".$genuineAccessary->id.".".$extension;
			$destinationPath = public_path('/data/service/accessary/');

            if(File::exists($destinationPath.$avatar))
            {
                while(File::exists($destinationPath.$avatar))
                {
                    $random = Str::random(4);
                    $avatar = $avatarNonExt ."_". $random .".".$extension;
                }
            }
            
            $file->move($destinationPath, $avatar);
            $genuineAccessary->avatar = $avatar;
            $genuineAccessary->save();        
        }

        return Redirect::back()->with('success','Thêm sản phẩm thành công');
    }

    public function getEdit($id)
    {
        $genuineAccessary = GenuineAccessary::find($id);
        if($genuineAccessary) {
        	return view('cp.service.accessary.edit',['genuineAccessary'=> $genuineAccessary]);	
        }
        else {
        	return $this->getList();
        }   
    }

    public function postEdit(Request $request, $id)
    {
        $this->validate($request,
            [
            	'name' => 'required|between:3,100',
                'avatar_image_temp' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ],
            [
            	'name.required'=>'Bạn chưa nhập tên sản phẩm',
                'name.between'=> 'Tên sản phẩm phải có độ dài từ 3 đến 100 ký tự',
                'avatar_image_temp.max' => 'Hình ảnh phải có kích thước nhỏ hơn 2048 KB',
            ]);

        $genuineAccessary = GenuineAccessary::find($id);
        $genuineAccessary->name = $request->name;
        $permalink = removeUnicode($request->name);
        $genuineAccessary->permalink = $permalink;
        $genuineAccessary->save();

        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');            
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
            $destinationPath = public_path('/data/service/accessary/');

            if(File::exists($destinationPath.$avatar))
            {
                while(File::exists($destinationPath.$avatar))
                {
                    $random = Str::random(4);
                    $avatar = $avatarNonExt ."_". $random .".".$extension;
                }
            }
            
            $file->move($destinationPath, $avatar);
            $genuineAccessary->avatar = $avatar;                
            $genuineAccessary->save();              
        }

        return Redirect::back()->with('success','Cập nhật sản phẩm thành công');
    }

    public function getDelete(Request $request)
    {
        $id = $request->id;
        $genuineAccessary = GenuineAccessary::find($id);
        $genuineAccessary->isDeleted = 1;
        $genuineAccessary->save();
    }
}
