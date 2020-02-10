<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\CarCategory;
use App\Cars;
use App\OtherInfoCar;
use App\NewsCategories;
use App\News;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function getList()
    {
        $news = News::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.news.list',['news'=>$news]);
    }

    public function getCreate()
    {
    	$newsCategories = NewsCategories::all();
    	return view('cp.news.create', ['newsCategories'=>$newsCategories]);
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

        $news = new News;
        $news->news_cate_id = $request->newsCategories;
        $news->title = $request->title;
        $permalink = removeUnicode($request->title);
        $news->permalink = $permalink;
        $news->summary = $request->summary;
        $news->content = $request->content;
		$news->avatar = $request->avatar;
        $news->created_by = Auth::user()->display_name;
        $news->isDeleted = 0;
        $news->save();

        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
			$destinationPath = public_path('/data/news/');

            if(File::exists($destinationPath.$avatar))
            {
                while(File::exists($destinationPath.$avatar))
                {
                    $random = Str::random(4);
                    $avatar = $avatarNonExt ."_". $random .".".$extension;
                }
            }
            
            $file->move($destinationPath, $avatar);
            $news->avatar = $avatar;
            $news->update();                
        }

        
        return redirect('cp/news/create')->with('notification','Thêm bài viết thành công');
    }

    public function getEdit($id)
    {
        $newsCategories = NewsCategories::orderBy('id', 'asc')->get()->where('isDeleted', 0);
        $news = News::find($id);
        return view('cp.news.edit',['news'=> $news,'newsCategories'=> $newsCategories]);
    }

    public function postEdit(Request $request, $id)
    {
        $this->validate($request,
            [
                'title' => 'required|between:3,200',
                // 'title' => Rule::unique('news')->ignore($news->id)
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề bài viết',
                'title.unique'=> 'Tiêu đề bài viết đã tồn tại',
                'title.between'=> 'Tiêu đề bài viết phải có độ dài từ 3 đến 200 ký tự',
            ]);

        $news = News::find($id);
        $news->news_cate_id = $request->newsCategories;
        $news->title = $request->title;
        $permalink = removeUnicode($request->title);
        $news->permalink = $permalink;
        $news->summary = $request->summary;
        $news->content = $request->content;
		$news->avatar = $request->avatar;
        $news->updated_by = Auth::user()->display_name;
        // $news->save();
        // $updated_by = Auth::user()->id;

        if($request->hasFile('avatar_image_temp'))
        {
            $file = $request->file('avatar_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $avatarNonExt = removeUnicode(explode('.', $filename)[0]);
            $avatar = $avatarNonExt.".".$extension;
			$destinationPath = public_path('/data/news/');

            if(File::exists($destinationPath.$avatar))
            {
                while(File::exists($destinationPath.$avatar))
                {
                    $random = Str::random(4);
                    $avatar = $avatarNonExt ."_". $random .".".$extension;
                }
            }
            
            $file->move($destinationPath, $avatar);
            $news->avatar = $avatar;      
                    
        }
        $news->save();  
        
        return redirect('cp/news/edit/'.$id)->with('notification','Chỉnh sửa bài viết thành công');
    }

    public function getNewsDetail($permalink)
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $otherInfoCar = OtherInfoCar::where('isDeleted', 0)->orderBy('id', 'asc')->get();

        $news = News::where('permalink', $permalink)->where('isDeleted', 0)->get();
        if($news != null) {
            $news_cate_id = $news->pluck('news_cate_id')->first();        
            $id = $news->pluck('id')->first();
            $newsAnother = News::all()->where('id','!=', $id)->where('news_cate_id', $news_cate_id)->where('isDeleted', 0);
            return view('news', ['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'otherInfoCar'=>$otherInfoCar, 'news'=>$news, 'newsAnother'=>$newsAnother]);
        }
        else {
            return redirect('/');
        }
        
    }

    public function getAllNews($permalink)
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $otherInfoCar = OtherInfoCar::where('isDeleted', 0)->orderBy('id', 'asc')->get();

        $newsCategory = NewsCategories::orderBy('id', 'asc')->get()->where('isDeleted', 0);
        $news = News::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('all-news', ['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'otherInfoCar'=>$otherInfoCar, 'newsCategory'=>$newsCategory, 'news'=>$news, 'permalink'=>$permalink]);
    }

    public function getDelete(Request $request) 
    {
        $id = $request->id;
        $news = News::find($id);
        $news->isDeleted = 1;
        $news->save();
    }
}
