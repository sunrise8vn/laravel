<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\CarCategory;
use App\Cars;
use App\OtherInfoCar;
use App\Service\WarrantyPolicy;
use App\Service\MaintenanceService;
use App\Service\RepairService;
use App\Service\FreeTestProgram;
use App\Service\SummonProgram;
use App\Service\GenuineAccessary;
use App\Service\GenuineAccessaryDetail;
use App\GenuineAccessoriesGroup;
use App\GenuineAccessories;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;


class ServiceController extends Controller
{
    public function index()
    {
    	$carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $otherInfoCar = OtherInfoCar::where('isDeleted', 0)->orderBy('id', 'asc')->get();

        $warrantyPolicy = WarrantyPolicy::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $maintenanceServices = MaintenanceService::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $repairServices = RepairService::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $freeTestPrograms = FreeTestProgram::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $summonPrograms = SummonProgram::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $genuineAccessary = GenuineAccessary::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $genuineAccessaryDetail = GenuineAccessaryDetail::where('isDeleted', 0)->orderBy('id', 'asc')->get();
        $genuineAccessaryGroup = GenuineAccessaryDetail::where('isDeleted', 0)->get();
        $genuineAccessoriesGroup = GenuineAccessoriesGroup::where('isDeleted', 0)->get();
        $genuineAccessories = GenuineAccessories::where('isDeleted', 0)->get();

        // $firstAccDel = $genuineAccessaryDetail->where('acc_id', 256)->first();
        // dd($firstAccDel);


        return view('service', ['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'otherInfoCar'=>$otherInfoCar, 'warrantyPolicy'=>$warrantyPolicy, 'maintenanceServices'=>$maintenanceServices, 'repairServices'=>$repairServices, 'freeTestPrograms'=>$freeTestPrograms, 'summonPrograms'=>$summonPrograms, 'genuineAccessary'=>$genuineAccessary, 'genuineAccessaryDetail'=>$genuineAccessaryDetail, 'genuineAccessaryGroup'=>$genuineAccessaryGroup, 'genuineAccessoriesGroup'=>$genuineAccessoriesGroup, 'genuineAccessories'=>$genuineAccessories]);

    }
}
