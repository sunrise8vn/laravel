<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CarCategory;
use App\Cars;
use App\OtherInfoCar;
use App\PrivacyPolicy;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $otherInfoCar = OtherInfoCar::where('isDeleted', 0)->orderBy('id', 'asc')->get();

        $privacyPolicy = PrivacyPolicy::where('isDeleted', 0)->orderBy('id', 'desc')->first();

        return view('privacy-policy',['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'otherInfoCar'=>$otherInfoCar, 'privacyPolicy'=>$privacyPolicy]);
    }

    public function getEdit()
    {
        $privacyPolicy = PrivacyPolicy::where('isDeleted', 0)->orderBy('id', 'desc')->first();
        return view('cp.own-category.privacy-policy.edit',['privacyPolicy'=> $privacyPolicy]);
    }

    public function postEdit(Request $request, $id)
    {
        $privacyPolicy = PrivacyPolicy::find($id);
        $privacyPolicy->isDeleted = 1;
        $privacyPolicy->update();
        $privacyPolicy = new PrivacyPolicy;
        $privacyPolicy->content = $request->content;
        $privacyPolicy->isDeleted = 0;
        $privacyPolicy->save();
        // $updated_by = Auth::user()->id; 
        
        return redirect('cp/privacy-policy/edit')->with('notification','Cập nhật thông tin thành công');
    }
}
