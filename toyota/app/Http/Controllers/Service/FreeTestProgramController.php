<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Service\FreeTestPrograms;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class FreeTestProgramController extends Controller
{
    public function getList()
    {
        $freeTestPrograms = FreeTestPrograms::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.service.free-test-program.list',['freeTestPrograms'=>$freeTestPrograms]);
    }
}
