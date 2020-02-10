<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Service\FreeTestProgram;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class FreeTestProgramController extends Controller
{
    public function getList()
    {
        $freeTestPrograms = FreeTestProgram::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.service.free-test-program.list',['freeTestPrograms'=>$freeTestPrograms]);
    }

    public function getCreate()
    {
    	return view('cp.service.free-test-program.create');
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

        $freeTestProgram = new FreeTestProgram;
        $freeTestProgram->title = $request->title;
        $permalink = removeUnicode($request->title);
        $freeTestProgram->permalink = $permalink;
        $freeTestProgram->content = $request->content;
        $freeTestProgram->save();
        // $updated_by = Auth::user()->id;

        return Redirect::back()->with('success','Thêm bài viết thành công');
    }

    public function getEdit($id)
    {
        $freeTestProgram = FreeTestProgram::find($id);
        if($freeTestProgram) {
        	return view('cp.service.free-test-program.edit',['freeTestProgram'=> $freeTestProgram]);	
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

        $freeTestProgram = FreeTestProgram::find($id);
        $freeTestProgram->title = $request->title;
        $permalink = removeUnicode($request->title);
        $freeTestProgram->permalink = $permalink;
        $freeTestProgram->content = $request->content;
        $freeTestProgram->save();
        // $updated_by = Auth::user()->id;

        return Redirect::back()->with('success','Cập nhật bài viết thành công');
    }

    public function getDelete(Request $request)
    {
        $id = $request->id;
        $freeTestProgram = FreeTestProgram::find($id);
        $freeTestProgram->isDeleted = 1;
        $freeTestProgram->save();
    }
}
