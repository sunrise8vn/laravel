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

class WarrantyPolicyController extends Controller
{
    public function getList()
    {
        $warrantyPolicy = WarrantyPolicy::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.service.warranty-policy.list',['warrantyPolicy'=>$warrantyPolicy]);
    }
}
