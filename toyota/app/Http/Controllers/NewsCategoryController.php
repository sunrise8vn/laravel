<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\NewsCategories;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class NewsCategoryController extends Controller
{
    public function getList()
    {
        $newsCategory = NewsCategories::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        return view('cp.news.category.list',['newsCategory'=>$newsCategory]);
    }

    public function getCreate()
    {
        return view('cp.news.category.create');
    }
}
