<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarCategory;
use App\Cars;
use App\OtherInfoCar;
use App\GenuineAccessoriesGroup;
use App\GenuineAccessories;

class CostEstimatesController extends Controller
{
    public function index(Request $request)
    {
        // $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        // $carDetail = Cars::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        // $otherInfoCar = OtherInfoCar::where('isDeleted', 0)->orderBy('id', 'asc')->get();

        // return view('cost-estimates',['carCategory'=>$carCategory, 'carDetail'=>$carDetail, 'otherInfoCar'=>$otherInfoCar]);

        if($request->ajax() || 'NULL'){
	        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
	        $carLists = Cars::where('isDeleted', 0)->get();
	        $carDetail = Cars::where('isDeleted', 0)->paginate(12);

	        $otherInfoCar = OtherInfoCar::where('isDeleted', 0)->orderBy('id', 'asc')->get();

	        return view('cost-estimates',['carCategory'=>$carCategory, 'carLists'=>$carLists, 'carDetail'=>$carDetail, 'otherInfoCar'=>$otherInfoCar]);
      	}

    }


    function getAccessoriesGroupTool()
    {
    	$genuineAccessoriesGroup = GenuineAccessories::where('car_cate_id', $car_cate_id)->where('isDeleted', 0)->groupBy('group_id')->get();
    }

    public function getAccessoriesGroup(Request $request)
    {
        $car_cate_id = $request->catid;
        $id_group = GenuineAccessoriesGroup::pluck('id')->all();
        $genuineAccessories = GenuineAccessories::whereIn('group_id', $id_group)->where('car_cate_id', $car_cate_id)->whereIsdeleted(0)->groupBy('group_id')->get();
        $group_id =  $genuineAccessories->pluck('group_id');
        $genuineAccessoriesGroup = GenuineAccessoriesGroup::whereIn('id', $group_id)->get();
        $str = '';
        $active = "active";
        $i = 0;
		foreach ($genuineAccessoriesGroup as $item) {
			$str .= '<li class="tab"><a href="#tab_accessories_tool_0'.$i.'" class="'.$active.'">'.$item->name.'</a></li>';
			$active = "";
			$i++;
		}
        return $str;
    }

    public function getAccessories(Request $request)
    {
    	$car_cate_id = $request->catid;
        $id_group = GenuineAccessoriesGroup::pluck('id')->all();
        $genuineAccessories = GenuineAccessories::whereIn('group_id', $id_group)->where('car_cate_id', $car_cate_id)->whereIsdeleted(0)->groupBy('group_id')->get();
        $group_id =  $genuineAccessories->pluck('group_id');
        $genuineAccessoriesGroup = GenuineAccessoriesGroup::whereIn('id', $group_id)->get();
        $countGroup = $genuineAccessoriesGroup->count();
        $str = '';
        $display = "block";
        for ($i=0; $i < $countGroup; $i++) {
        	$genuineAccessories = GenuineAccessories::where('car_cate_id', $car_cate_id)->where('group_id', $genuineAccessoriesGroup[$i]->id)->whereIsdeleted(0)->get();
        	$count = $genuineAccessories->count();
        	
        	$str .=	'<div id="tab_accessories_tool_0'.$i.'" class="content-tab" style="display: '.$display.';">';
          	$str .=	'<div class="inner list-cate all list-accessories">';
	        $str .=	'<ul class="">';
	        $display = "none";
			foreach ($genuineAccessories as $item) {
		        $str .=	'<li class="item">';
		        $str .=	'<div class="inner">';
		        $str .=	'<div class="sm_checkbox">';
		        $str .=	'<input data-image="/data/car/accessories/'.$car_cate_id.'/'.$item->avatar.'" class="chkAccessoriesCar" data-name="'.$item->name.'" data-price="'.number_format($item->price).'" type="checkbox" id="checkbox-accs-0'.$item->id.'">';
		        $str .=	'<label for="checkbox-accs-0'.$item->id.'">';
		        $str .=	'<span class="img">';
		        $str .=	'<img src="/data/car/accessories/'.$car_cate_id.'/'.$item->avatar.'?w=257&amp;h=127&amp;mode=crop" alt="">';
		        $str .=	'</span>';
		        $str .=	'<span class="txt">';
		        $str .=	'<span class="txt1">';
		        $str .=	'<span class="check"></span>';
		        $str .=	'</span>';
		        $str .=	'<span class="txt2">';
		        $str .=	'<span class="name">'.$item->name.'</span>';
		        $str .=	'<span class="price">';
		        $str .=	'<span>Giá: '.number_format($item->price).'</span><sup>VND</sup></span>';
		        $str .=	'<span class="txt3">Giá đã bao gồm VAT nhưng chưa bao gồm phí lắp đặt</span>';
		        $str .=	'</span>';
		        $str .=	'</span>';
		        $str .=	'</label>';  
		        $str .=	'</div>';
		        $str .=	'</div>';
		        $str .=	'</li>';
        	}
    		$str .=	'</ul>';
	        $str .=	'</div>';
	        $str .=	'</div>';
        }

        return $str;
    }
}
