<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Service\SummonPrograms;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class SummonProgramController extends Controller
{
    public function getList()
    {
        $summonPrograms = SummonPrograms::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        return view('cp.service.summon-program.list',['summonPrograms'=>$summonPrograms]);
    }
}
