<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ExpertAdviceGroup;

class ExpertAdviceGroupController extends Controller
{
    public function getList()
    {
        $expertAdviceGroup = ExpertAdviceGroup::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        return view('cp.expert-advice.group.list',['expertAdviceGroup'=>$expertAdviceGroup]);
    }

    public function getCreate()
    {
        return view('cp.expert-advice.group.create');
    }
}
