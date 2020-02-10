<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Service\MaintenanceService;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class MaintenanceServiceController extends Controller
{
    public function getList()
    {
        $maintenanceServices = MaintenanceService::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.service.maintenance-service.list',['maintenanceServices'=>$maintenanceServices]);
    }

    public function getCreate()
    {
    	return view('cp.service.maintenance-service.create');
    }

    public function postCreate(Request $request)
    {
        $this->validate($request,
            [
                'title' => 'required|between:3,100',
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề bài viết',
                'title.between'=> 'Tiêu đề bài viết phải có độ dài từ 3 đến 100 ký tự',
            ]);

        $maintenanceService = new MaintenanceService;
        $maintenanceService->title = $request->title;
        $permalink = removeUnicode($request->title);
        $maintenanceService->permalink = $permalink;
        $maintenanceService->content = $request->content;
        $maintenanceService->save();
        // $updated_by = Auth::user()->id;

        return Redirect::back()->with('success','Thêm bài viết thành công');
    }

    public function getEdit($id)
    {
        $maintenanceService = MaintenanceService::find($id);
        if($maintenanceService) {
        	return view('cp.service.maintenance-service.edit',['maintenanceService'=> $maintenanceService]);	
        }
        else {
        	return $this->getList();
        }   
    }

    public function postEdit(Request $request, $id)
    {
        $this->validate($request,
            [
                'title' => 'required|between:3,100',
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề bài viết',

                'title.between'=> 'Tiêu đề bài viết phải có độ dài từ 3 đến 100 ký tự',
            ]);

        $maintenanceService = MaintenanceService::find($id);
        $maintenanceService->title = $request->title;
        $permalink = removeUnicode($request->title);
        $maintenanceService->permalink = $permalink;
        $maintenanceService->content = $request->content;
        $maintenanceService->save();
        // $updated_by = Auth::user()->id;

        return Redirect::back()->with('success','Cập nhật bài viết thành công');
    }

    public function getDelete(Request $request)
    {
        $id = $request->id;
        $maintenanceService = MaintenanceService::find($id);
        $maintenanceService->isDeleted = 1;
        $maintenanceService->save();
    }
}
