<?php

namespace App\Http\Controllers\service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Service\GenuineAccessaryDetail;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class GenuineAccessaryDetailController extends Controller
{
    public function getList()
    {
        $genuineAccessaryDetail = GenuineAccessaryDetail::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.service.accessary.details.list',['genuineAccessaryDetail'=>$genuineAccessaryDetail]);
    }
}
