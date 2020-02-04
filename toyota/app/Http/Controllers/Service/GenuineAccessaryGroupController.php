<?php

namespace App\Http\Controllers\service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Service\GenuineAccessaryGroup;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class GenuineAccessaryGroupController extends Controller
{
    public function getList()
    {
        $genuineAccessaryGroup = GenuineAccessaryGroup::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.service.accessary.group.list',['genuineAccessaryGroup'=>$genuineAccessaryGroup]);
    }
}
