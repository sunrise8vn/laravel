<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CarCategory;
use App\Cars;
use App\OtherInfoCar;
use App\PolicyTerms;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class PolicyTermsController extends Controller
{
    public function index()
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $otherInfoCar = OtherInfoCar::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        
        $policyTerms = PolicyTerms::where('isDeleted', 0)->orderBy('id', 'desc')->first();

        return view('policy-terms',['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'otherInfoCar'=>$otherInfoCar, 'policyTerms'=>$policyTerms]);
    }

    public function getEdit()
    {
        $policyTerms = PolicyTerms::where('isDeleted', 0)->orderBy('id', 'desc')->first();
        return view('cp.own-category.policy-terms.edit',['policyTerms'=> $policyTerms]);
    }

    public function postEdit(Request $request, $id)
    {
        $policyTerms = PolicyTerms::find($id);
        $policyTerms->isDeleted = 1;
        $policyTerms->update();
        $policyTerms = new PolicyTerms;
        $policyTerms->content = $request->content;
        $policyTerms->isDeleted = 0;
        $policyTerms->save();
        // $updated_by = Auth::user()->id; 
        
        return redirect('cp/policy-terms/edit')->with('notification','Cập nhật thông tin thành công');
    }
}
