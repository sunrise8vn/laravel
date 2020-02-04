<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Slide;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SlideController extends Controller
{
    public function getList()
    {
        $slide = Slide::where('isDeleted', 0)->orderBy('updated_at', 'desc')->get();
        // dd($slide);
        return view('cp.slide.list',['slide'=>$slide]);
    }

    public function getCreate()
    {
    	$slide = Slide::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        return view('cp.slide.create',['slide'=>$slide]);
    }

    public function postCreate(Request $request)
    {
        $slide = new Slide();
        $slide->image = $request->slide_image;
        $slide->isDeleted = 0;
        $slide->save();
        // $updated_by = Auth::user()->id;

        if($request->hasFile('slide_image_temp'))
        {
            $file = $request->file('slide_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $imageNonExt = removeUnicode(explode('.', $filename)[0]);
            $image = $imageNonExt.".".$extension;
            $destinationPath = public_path('/data/slide/');

            if(File::exists($destinationPath.$image))
            {
                while(File::exists($destinationPath.$image))
                {
                    $random = Str::random(4);
                    $image = $imageNonExt ."_". $random .".".$extension;
                }
            }
            
            $file->move($destinationPath, $image);
            $slide->image = $image;      
            $slide->save();  
        }
        // $slide->update();
        
        return redirect('cp/slide/create/')->with('notification','Thêm ảnh slide thành công');
    }

    public function getEdit($id)
    {
        $slide = Slide::find($id);
        return view('cp.slide.edit',['slide'=> $slide]);
    }

    public function postEdit(Request $request, $id)
    {
        $slide = Slide::find($id);
        $slide->image = $request->slide_image;
        $slide->updated_at = Carbon::now();
        $slide->save();
        // $updated_by = Auth::user()->id;

        if($request->hasFile('slide_image_temp'))
        {
            $file = $request->file('slide_image_temp');
            $extension  = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            
            $imageNonExt = removeUnicode(explode('.', $filename)[0]);
            $image = $imageNonExt.".".$extension;
            $destinationPath = public_path('/data/slide/');

            if(File::exists($destinationPath.$image))
            {
                while(File::exists($destinationPath.$image))
                {
                    $random = Str::random(4);
                    $image = $imageNonExt ."_". $random .".".$extension;
                }
            }
            
            $file->move($destinationPath, $image);
            $slide->image = $image;      
            $slide->save();  
        }
        // $slide->update();
        
        return redirect('cp/slide')->with('notification','Cập nhật ảnh slide thành công');
    }

    public function getDelete($id) 
    {
        $slide = Slide::find($id);
        $slide->isDeleted = 1;
        $slide->save();
        return redirect('cp/slide')->with('notification','Xóa ảnh slide thành công');
    }
}
