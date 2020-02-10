<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Service\RepairService;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class RepairServiceController extends Controller
{
    public function getList()
    {
        $repairServices = RepairService::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.service.repair-service.list',['repairServices'=>$repairServices]);
    }

    public function getCreate()
    {
    	return view('cp.service.repair-service.create');
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

        $repairService = new RepairService;
        $repairService->title = $request->title;
        $permalink = removeUnicode($request->title);
        $repairService->permalink = $permalink;
        $repairService->content = $request->content;
        $repairService->save();
        // $updated_by = Auth::user()->id;

        return Redirect::back()->with('success','Thêm bài viết thành công');
    }

    public function getEdit($id)
    {
        $repairService = RepairService::find($id);
        if($repairService) {
        	return view('cp.service.repair-service.edit',['repairService'=> $repairService]);	
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

        $repairService = RepairService::find($id);
        $repairService->title = $request->title;
        $permalink = removeUnicode($request->title);
        $repairService->permalink = $permalink;
        $repairService->content = $request->content;
        $repairService->save();
        // $updated_by = Auth::user()->id;

        return Redirect::back()->with('success','Cập nhật bài viết thành công');
    }

    public function getDelete(Request $request)
    {
        $id = $request->id;
        $repairService = RepairService::find($id);
        $repairService->isDeleted = 1;
        $repairService->save();
    }
}
