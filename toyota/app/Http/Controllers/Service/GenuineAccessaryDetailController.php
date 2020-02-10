<?php

namespace App\Http\Controllers\service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Service\GenuineAccessary;
use App\Service\GenuineAccessaryDetail;
use App\Service\GenuineAccessaryGroup;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class GenuineAccessaryDetailController extends Controller
{
    public function getList()
    {
        $genuineAccessaryDetail = GenuineAccessaryDetail::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.service.accessary.details.list',['genuineAccessaryDetail'=>$genuineAccessaryDetail]);
    }

    public function getCreateAll()
    {
    	$genuineAccessary = GenuineAccessary::where('isDeleted', 0)->get();
    	$genuineAccessaryGroup = GenuineAccessaryGroup::where('isDeleted', 0)->orderBy('id', 'desc')->get();
    	return view('cp.service.accessary.details.create', ['genuineAccessary'=>$genuineAccessary, 'genuineAccessaryGroup'=>$genuineAccessaryGroup]);
    }

    public function getCreate($id)
    {
    	$genuineAccessary = GenuineAccessary::where('id', $id)->where('isDeleted', 0)->get();
    	$genuineAccessaryGroup = GenuineAccessaryGroup::where('isDeleted', 0)->orderBy('id', 'desc')->get();
    	return view('cp.service.accessary.details.create', ['genuineAccessary'=>$genuineAccessary, 'genuineAccessaryGroup'=>$genuineAccessaryGroup]);
    }

    public function getListInfo(Request $request) 
    {
    	$acc_id = $request->acc_id;
    	$group_id = GenuineAccessaryDetail::where('acc_id', $acc_id)->where('isDeleted', 0)->get();
    	$list_group_id = $group_id ->pluck('group_id');
        $genuineAccessaryGroup = GenuineAccessaryGroup::whereNotIn('id', $list_group_id)->get();
        return $genuineAccessaryGroup;
    }

    public function postCreate(Request $request)
    {
        $this->validate($request,
            [
                'acc_id' => 'required',
                'group_id' => 'required',
            ],
            [
                'acc_id.required'=>'Bạn chưa nhập tên phụ tùng',
                'group_id.required'=>'Bạn chưa nhập danh mục nhóm phụ tùng',
            ]);

        $genuineAccessaryDetail = new GenuineAccessaryDetail;
        $genuineAccessaryDetail->acc_id = $request->acc_id;
        $genuineAccessaryDetail->group_id = $request->group_id;
        $summary = $request->summary;
        if (strlen($summary) > 150)
   			$summary = substr($summary, 0, 150);
        $genuineAccessaryDetail->summary = $summary;
        $genuineAccessaryDetail->content = $request->content;
        
        $genuineAccessaryDetail->save();
        // $updated_by = Auth::user()->id;

        return Redirect::back()->with('success','Thêm thông tin phụ tùng thành công');
    }

    public function getDelete(Request $request)
    {
        $id = $request->id;
        $genuineAccessaryDetail = GenuineAccessaryDetail::find($id);
        $genuineAccessaryDetail->isDeleted = 1;
        $genuineAccessaryDetail->save();
    }

    public function getEdit($id)
    {
    	$genuineAccessaryDetail = GenuineAccessaryDetail::find($id);
    	$acc_id = $genuineAccessaryDetail->acc_id;
    	$genuineAccessary = GenuineAccessary::where('id', $acc_id)->where('isDeleted', 0)->get();
    	$genuineAccessaryGroup = GenuineAccessaryGroup::where('isDeleted', 0)->orderBy('id', 'desc')->get();
    	return view('cp.service.accessary.details.edit', ['genuineAccessaryDetail'=>$genuineAccessaryDetail, 'genuineAccessary'=>$genuineAccessary, 'genuineAccessaryGroup'=>$genuineAccessaryGroup]);
    }

    public function postEdit(Request $request, $id)
    {
        $this->validate($request,
            [
                'acc_id' => 'required',
                'group_id' => 'required',
            ],
            [
                'acc_id.required'=>'Bạn chưa nhập tên phụ tùng',
                'group_id.required'=>'Bạn chưa nhập danh mục nhóm phụ tùng',
            ]);

        $genuineAccessaryDetail = GenuineAccessaryDetail::find($id);
        $genuineAccessaryDetail->group_id = $request->group_id;
        $summary = $request->summary;
        if (strlen($summary) > 150)
   			$summary = substr($summary, 0, 150);
        $genuineAccessaryDetail->summary = $summary;
        $genuineAccessaryDetail->content = $request->content;
        $genuineAccessaryDetail->save();
        // $updated_by = Auth::user()->id;

        return Redirect::back()->with('success','Cập nhật thông tin phụ tùng thành công');
    }
}
