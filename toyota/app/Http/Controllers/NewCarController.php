<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CarCategory;
use App\Cars;
use App\OtherInfoCar;

class NewCarController extends Controller
{
    public function index()
    {
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carLists = Cars::where('isDeleted', 0)->get();
        $carDetail = Cars::where('isDeleted', 0)->paginate(12);

        $otherInfoCar = OtherInfoCar::where('isDeleted', 0)->orderBy('id', 'asc')->get();

        return view('newcar',['carCategory'=>$carCategory, 'carLists'=>$carLists, 'carDetail'=>$carDetail, 'otherInfoCar'=>$otherInfoCar]);
    }

    public function getListNewCar(Request $request) 
    {
      $carDetail = Cars::query()
          ->car_cate($request)
          ->price($request)
          ->fuel($request)
          ->seat($request)
          ->design($request)
          ->origin($request);
        return $carDetail->get();
        

        // $carDetail = Cars::filter($request);

        // return $carDetail->get();

   //  	if($request->ajax() && isset($request->start)) {
   //  		$start = $request->start;
   //  		$end = $request->end;	
   //  	}
   //  	else if(isset($request->car_cate)) {
			// $car_cate_id = $request->car_cate;	
			// $fuel = $request->fuel;	
			// $str = "whereIN('car_cate_id', explode(',', $car_cate_id))";
    	
			// $carDetail = Cars::whereIN('fuel', explode(',', $fuel))->get();
			// // response()->json($carDetail);
			// return $carDetail;
   //  	}

    	// $carDetail = Cars::All();
     //  // $carDetail = DB::table('car_detail')->get();
    	// if(isset($request->car_cate) && $request->car_cate != "" && !empty($request->car_cate)) {
  			// $car_cate_id = $request->car_cate;	    	
  			// $carDetail = Cars::whereIN('car_cate_id', explode(',', $car_cate_id))->get();
    	// }
    	// if(isset($request->fuel) && $request->fuel != "" && !empty($request->fuel)) {
  			// $fuel = $request->fuel;	    	
  			// $carDetail = Cars::whereIN('fuel', explode(',', $fuel))->get();
    	// }
    	// return $carDetail;

    }
}
