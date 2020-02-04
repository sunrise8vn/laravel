<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\SalesmenGroup;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class SalesmenGroupController extends Controller
{
    public function getList()
    {
        $salesmenGroup = SalesmenGroup::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        return view('cp.salesmen.group.list',['salesmenGroup'=>$salesmenGroup]);
    }

    public function getCreate()
    {
        return view('cp.salesmen.group.create');
    }
}
