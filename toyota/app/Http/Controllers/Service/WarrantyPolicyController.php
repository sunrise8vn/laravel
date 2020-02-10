<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Service\WarrantyPolicy;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;


class WarrantyPolicyController extends Controller
{
    public function getList()
    {
        $warrantyPolicy = WarrantyPolicy::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.service.warranty-policy.list',['warrantyPolicy'=>$warrantyPolicy]);
    }

    public function getCreate()
    {
    	return view('cp.service.warranty-policy.create');
    }

    public function postCreate(Request $request)
    {
        $this->validate($request,
            [
                'title' => 'required|unique:warranty_policy|between:3,100',
                // 'title' => Rule::unique('warranty_policy')->ignore('isDeleted', 1)
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề bài viết',
                'title.unique'=> 'Tiêu đề bài viết đã tồn tại',
                'title.between'=> 'Tiêu đề bài viết phải có độ dài từ 3 đến 100 ký tự',
            ]);

        $warrantyPolicy = new WarrantyPolicy;
        $warrantyPolicy->title = $request->title;
        $permalink = removeUnicode($request->title);
        $warrantyPolicy->permalink = $permalink;
        $warrantyPolicy->content = $request->content;
        $warrantyPolicy->save();
        // $updated_by = Auth::user()->id;

        return Redirect::back()->with('success','Thêm bài viết thành công');
    }

    public function getEdit($id)
    {
        $warrantyPolicy = WarrantyPolicy::find($id);
        return view('cp.service.warranty-policy.edit',['warrantyPolicy'=> $warrantyPolicy]);
    }

    public function postEdit(Request $request, $id)
    {
        $this->validate($request,
            [
                'title' => 'required|between:3,100',
                // 'title' => Rule::unique('news')->ignore($news->id)
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề bài viết',
                'title.unique'=> 'Tiêu đề bài viết đã tồn tại',
                'title.between'=> 'Tiêu đề bài viết phải có độ dài từ 3 đến 100 ký tự',
            ]);

        
        // $countTitle = WarrantyPolicy::where('title', trim($request->title))->where('id', '!=', $id)->where('isDeleted', 0)->count();

        $warrantyPolicy = WarrantyPolicy::find($id);
        $warrantyPolicy->title = $request->title;
        $permalink = removeUnicode($request->title);
        $warrantyPolicy->permalink = $permalink;
        $warrantyPolicy->content = $request->content;
        $warrantyPolicy->save();
        // $updated_by = Auth::user()->id;

        return Redirect::back()->with('success','Cập nhật bài viết thành công');
    }

    public function getDelete(Request $request)
    {
        $id = $request->id;
        $warrantyPolicy = WarrantyPolicy::find($id);
        $warrantyPolicy->isDeleted = 1;
        $warrantyPolicy->save();
    }
}
