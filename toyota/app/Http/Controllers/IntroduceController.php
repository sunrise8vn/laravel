<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CarCategory;
use App\Cars;
use App\Introduce;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class IntroduceController extends Controller
{
    public function index()
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $introduce = Introduce::where('isDeleted', 0)->orderBy('id', 'desc')->first();

        return view('introduce',['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'introduce'=>$introduce]);
    }

    public function getEdit()
    {
        $introduce = Introduce::where('isDeleted', 0)->orderBy('id', 'desc')->first();
        return view('cp.own-category.introduce.edit',['introduce'=> $introduce]);
    }

    public function postEdit(Request $request, $id)
    {
    	$this->validate($request,
            [
                'title' => 'max:255'
            ],
            [
                'title.max'=>'Tiêu đề bài viết có độ dài tối đa 255 ký tự',
            ]);

        $introduce = Introduce::find($id);
        $introduce->isDeleted = 1;
        $introduce->update();
        $introduce = new Introduce;
        $introduce->title = $request->title;
        $introduce->content = $request->content;
        $introduce->isDeleted = 0;
        $introduce->save();
        // $updated_by = Auth::user()->id; 
        
        return redirect('cp/introduce/edit/')->with('notification','Cập nhật thông tin thành công');
    }
}
