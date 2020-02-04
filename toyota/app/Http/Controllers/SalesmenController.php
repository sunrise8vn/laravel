<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CarCategory;
use App\Cars;
use App\Salesmen;
use App\SalesmenGroup;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SalesmenController extends Controller
{
    public function getList()
    {
        $salesmen = Salesmen::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        return view('cp.salesmen.list',['salesmen'=>$salesmen]);
    }

    public function getCreate()
    {
    	$salesmenGroup = SalesmenGroup::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        return view('cp.salesmen.create',['salesmenGroup'=>$salesmenGroup]);
    }

    public function postCreate(Request $request)
    {
        $this->validate($request,
            [
                'fullname' => 'required|between:5,50',
            ],
            [
                'fullname.required'=>'Bạn chưa nhập họ tên',
                'fullname.between'=> 'Họ tên phải có độ dài từ 5 đến 50 ký tự',
            ]);

        $salesmen = new Salesmen();
        $salesmen->group_id = $request->salesmenGroup;
        $salesmen->fullname = $request->fullname;
        $salesmen->position = $request->position;
        $salesmen->email = $request->email;
        $salesmen->phone = $request->phone;
        $salesmen->avatar = $request->avatar;
        $salesmen->isDeleted = 0;
        $salesmen->save();
        // $updated_by = Auth::user()->id;

        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
            $destinationPath = public_path('/data/salesmen/');

            if(File::exists($destinationPath.$avatar))
            {
                while(File::exists($destinationPath.$avatar))
                {
                    $random = Str::random(4);
                    $avatar = $avatarNonExt ."_". $random .".".$extension;
                }
            }
            
            $file->move($destinationPath, $avatar);
            $salesmen->avatar = $avatar;      
            $salesmen->save();  
        }
        // $salesmen->update();
        
        return redirect('cp/salesmen/create/')->with('notification','Thêm nhân viên thành công');
    }

    public function getAll($permalink)
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $salesmenGroup = SalesmenGroup::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        $salesmen = Salesmen::where('isDeleted', 0)->orderBy('updated_at', 'desc')->get();
        return view('salesmen',['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'salesmenGroup'=>$salesmenGroup, 'salesmen'=>$salesmen, 'permalink'=>$permalink]);
    }

    public function getEdit($id)
    {
        $salesmenGroup = SalesmenGroup::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        $salesmen = Salesmen::find($id);
        return view('cp.salesmen.edit',['salesmenGroup'=> $salesmenGroup,'salesmen'=> $salesmen]);
    }

    public function postEdit(Request $request, $id)
    {
        $this->validate($request,
            [
                'fullname' => 'required|between:5,50',
            ],
            [
                'fullname.required'=>'Bạn chưa nhập họ tên',
                'fullname.between'=> 'Họ tên phải có độ dài từ 5 đến 50 ký tự',
            ]);

        $salesmen = Salesmen::find($id);
        $salesmen->group_id = $request->salesmenGroup;
        $salesmen->fullname = $request->fullname;
        $salesmen->position = $request->position;
        $salesmen->email = $request->email;
        $salesmen->phone = $request->phone;
        $salesmen->avatar = $request->avatar;
        $salesmen->updated_at = Carbon::now();
        $salesmen->save();
        // $updated_by = Auth::user()->id;

        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
            $destinationPath = public_path('/data/salesmen/');

            if(File::exists($destinationPath.$avatar))
            {
                while(File::exists($destinationPath.$avatar))
                {
                    $random = Str::random(4);
                    $avatar = $avatarNonExt ."_". $random .".".$extension;
                }
            }
            
            $file->move($destinationPath, $avatar);
            $salesmen->avatar = $avatar;      
                    
        }
        // $salesmen->save();  
        
        return redirect('cp/salesmen/edit/'.$id)->with('notification','Cập nhật thông tin thành công');
    }

    public function getDelete($id) 
    {
        $salesmen = Salesmen::find($id);
        $salesmen->isDeleted = 1;
        $salesmen->save();
        return redirect('cp/salesmen')->with('notification','Xóa nhân viên thành công');
    }
}
