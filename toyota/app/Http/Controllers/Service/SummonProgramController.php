<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Service\SummonProgram;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class SummonProgramController extends Controller
{
    public function getList()
    {
        $summonPrograms = SummonProgram::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.service.summon-program.list',['summonPrograms'=>$summonPrograms]);
    }

    public function getCreate()
    {
    	return view('cp.service.summon-program.create');
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

        $summonProgram = new SummonProgram;
        $summonProgram->title = $request->title;
        $permalink = removeUnicode($request->title);
        $summonProgram->permalink = $permalink;
        $summonProgram->content = $request->content;
        $summonProgram->save();
        // $updated_by = Auth::user()->id;

        return Redirect::back()->with('success','Thêm bài viết thành công');
    }

    public function getEdit($id)
    {
        $summonProgram = SummonProgram::find($id);
        if($summonProgram) {
        	return view('cp.service.summon-program.edit',['summonProgram'=> $summonProgram]);	
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

        $summonProgram = SummonProgram::find($id);
        $summonProgram->title = $request->title;
        $permalink = removeUnicode($request->title);
        $summonProgram->permalink = $permalink;
        $summonProgram->content = $request->content;
        $summonProgram->save();
        // $updated_by = Auth::user()->id;

        return Redirect::back()->with('success','Cập nhật bài viết thành công');
    }

    public function getDelete(Request $request)
    {
        $id = $request->id;
        $summonProgram = SummonProgram::find($id);
        $summonProgram->isDeleted = 1;
        $summonProgram->save();
    }
}
