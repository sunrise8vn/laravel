<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CarCategory;
use App\Cars;
use App\OtherInfoCar;
use App\ExpertAdviceGroup;
use App\ExpertAdvice;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class ExpertAdviceController extends Controller
{

	public function index()
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $otherInfoCar = OtherInfoCar::where('isDeleted', 0)->orderBy('id', 'asc')->get();

        $expertAdviceGroup = ExpertAdviceGroup::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        $expertAdvice = ExpertAdvice::where('isDeleted', 0)->orderBy('id', 'asc')->get();

        return view('expert-advice',['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'otherInfoCar'=>$otherInfoCar, 'expertAdviceGroup'=>$expertAdviceGroup, 'expertAdvice'=>$expertAdvice]);
    }

    public function getDetail($permalink) 
    {
    	$carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $otherInfoCar = OtherInfoCar::where('isDeleted', 0)->orderBy('id', 'asc')->get();

        $expertAdvice = ExpertAdvice::where('permalink', $permalink)->where('isDeleted', 0)->first();
        if ($expertAdvice != null) {
	        $group_id = $expertAdvice->pluck('group_id')->first();        
	        $id = $expertAdvice->pluck('id')->first();
	        $expertAdviceAnother = ExpertAdvice::all()->where('group_id', $group_id)->where('id','<>', $id)->where('isDeleted', 0);

	        return view('expert-advice-detail',['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'otherInfoCar'=>$otherInfoCar, 'expertAdvice'=>$expertAdvice, 'expertAdviceAnother'=>$expertAdviceAnother]);
        }
        else {
        	return $this->index();
        }
        
    }

    public function getList()
    {
        $expertAdvice = ExpertAdvice::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        return view('cp.expert-advice.list',['expertAdvice'=>$expertAdvice]);
    }

    public function getCreate()
    {
    	$expertAdviceGroup = ExpertAdviceGroup::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        return view('cp.expert-advice.create',['expertAdviceGroup'=>$expertAdviceGroup]);
    }

    public function postCreate(Request $request)
    {
    	$this->validate($request,
            [
                'title' => 'required|unique:news|between:3,200'
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề bài viết',
                'title.between'=>'Tiêu đề bài viết phải có độ dài từ 3 đến 200 ký tự',
                'title.unique'=> 'Tiêu đề bài viết đã tồn tại',
            ]);

        $expertAdvice = new ExpertAdvice;
        $expertAdvice->group_id = $request->expertAdviceGroup;
        $expertAdvice->title = $request->title;
        $permalink = removeUnicode($request->title);
        $expertAdvice->permalink = $permalink;
        $expertAdvice->summary = $request->summary;
        $expertAdvice->content = $request->content;
		$expertAdvice->avatar = $request->avatar;
        $expertAdvice->isDeleted = 0;
        
        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
			$destinationPath = public_path('/data/expert-advice/');

            if(File::exists($destinationPath.$avatar))
            {
                while(File::exists($destinationPath.$avatar))
                {
                    $random = Str::random(4);
                    $avatar = $avatarNonExt ."_". $random .".".$extension;
                }
            }
            
            $file->move($destinationPath, $avatar);
            $expertAdvice->avatar = $avatar;
        }

        $expertAdvice->save();
        
        return redirect('cp/expert-advice/create')->with('notification','Thêm bài viết thành công');
    }
}
