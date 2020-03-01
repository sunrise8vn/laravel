<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CarCategory;
use App\Cars;
use App\OtherInfoCar;
use Illuminate\Support\Facades\File;

class NewCarController extends Controller
{
    public function index(Request $request)
    {
      if($request->ajax() || 'NULL'){
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carLists = Cars::where('isDeleted', 0)->get();
        $carDetail = Cars::where('isDeleted', 0)->paginate(2);

        $otherInfoCar = OtherInfoCar::where('isDeleted', 0)->orderBy('id', 'asc')->get();

        return view('newcar',['carCategory'=>$carCategory, 'carLists'=>$carLists, 'carDetail'=>$carDetail, 'otherInfoCar'=>$otherInfoCar]);
      }
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
          
      $result = $carDetail->paginate(2);

      $str = "";
      foreach ($result as $rs) {
          $str .= '<li class="item">';
          $str .= '<div class="inner">';
          $str .= '<div class="inner_ct">';
          $str .= '<a href="/xe/'.$rs->permalink.'">';
          $str .= '<div class="link-top">';
          $str .= '<span>Giá <strong>'.$rs->price.'</strong><sup>VND</sup></span>';
          $str .= '</div>';
          $str .= '<div class="img">';
          $destinationThumbPath = public_path('/data/car/thumb/' .$rs->id .'/');
          if(File::exists($destinationThumbPath.$rs->avatar)) {
              $str .= '<img class="lazy" src="/data/car/thumb/'.$rs->id.'/'.$rs->avatar.'?w=250&h=145&mode=crop" data-original="/data/car/thumb/'.$rs->id.'/'.$rs->avatar.'?w=250&h=145&mode=crop" />';
          }
          else {
              $str .= '<img class="lazy" src="Content/images/notfound/notfound-images1e4c.png?w=250&h=145&mode=crop" data-original="/data/car/thumb/'.$rs->id.'/'.$rs->avatar.'?w=250&h=145&mode=crop" />';
          }
          $str .= '</div>';
          $str .= '<div class="txt">';
          $str .= '<div class="txt1">';
          $str .= '<span>';
          $str .= '<p class="name">'.$rs->name.'</p>';
          $str .= '</span>';
          $str .= '</div>';
          $str .= '<div class="txt2">';
          $str .= '<p class="price">';
          $str .= '<span class="t1">Giá từ:</span>';
          $str .= '<strong>' .number_format($rs->price) .'</strong> <sup>VND</sup>';
          $str .= '</p>';
          $str .= '<p class="desc">';
          $str .= '<span>&#8226; '.$rs->number_of_seats. ' chỗ</span>';
          $str .= '<span>&#8226; '.$rs->design. '</span>';
          $str .= '<span>&#8226; '.$rs->fuel. '</span>';
          $str .= '<span>&#8226; '.$rs->origin. '</span>';
          $otherInfoCar = OtherInfoCar::where('car_id', $rs->id)->where('isDeleted', 0)->orderBy('id', 'asc')->get();
          foreach ($otherInfoCar as $item) {
            $str .= '<span>&#8226; ' .$item->content .'</span>';
          }
          $str .= '</p>';
          $str .= '</div>';
          $str .= '</div>';
          $str .= '</a>';
          $str .= '</div>';
          $str .= '</div>';
          $str .= '</li>';
      }
        
      return $str;

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
