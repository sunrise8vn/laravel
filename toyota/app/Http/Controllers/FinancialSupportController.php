<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CarCategory;
use App\Cars;
use App\OtherInfoCar;
use Illuminate\Support\Facades\File;
use App\Exports\FinancialExport;
use App\Exports\Financial5050Export;
use Maatwebsite\Excel\Facades\Excel;

class FinancialSupportController extends Controller
{
    public function index(Request $request)
    {
      if($request->ajax() || 'NULL'){
        $carCategory = CarCategory::where('isDeleted', 0)->orderBy('id', 'desc')->get();
        $carLists = Cars::where('isDeleted', 0)->get();
        $carDetail = Cars::where('isDeleted', 0)->get();

        $otherInfoCar = OtherInfoCar::where('isDeleted', 0)->orderBy('id', 'asc')->get();

        return view('financial-support',['carCategory'=>$carCategory, 'carLists'=>$carLists, 'carDetail'=>$carDetail, 'otherInfoCar'=>$otherInfoCar]);
      }
    }

    public function getListCar(Request $request) 
    {
      $carDetail = Cars::query()
          ->car_cate($request)
          ->price($request)
          ->fuel($request)
          ->seat($request)
          ->design($request)
          ->origin($request);
    //       ->leftJoin('car_categories', function ($join) {
    //         $join->on('car_details.car_cate_id', '=', 'car_categories.id');
    //     });
    // return $carDetail->get();

      $result = $carDetail->get();

      $str = "";
      foreach ($result as $rs) {
            $str .= '<li class="item">';
            $str .= '<div class="inner">';
            $str .= '<div class="sm_checkbox">';
            $catPermalink = CarCategory::where('id', $rs->car_cate_id)->whereIsdeleted(0)->first()->permalink;
            $str .= '<input type="checkbox" class="checkCarTool2" data-url="'.$rs->permalink .'" data-image="/data/car/thumb/'.$rs->id .'/'.$rs->avatar .'?width=500" data-caturl="'.$catPermalink .'" data-catId="'.$rs->car_cate_id.'" data-name="'.$rs->name .'" data-price="'.number_format($rs->price) .'" data-carid="'.$rs->id .'" id="checkbox-0'.$rs->id .'">';

            $str .= '<label for="checkbox-0'.$rs->id .'">';
            $str .= '<span class="img">';
            $destinationThumbPath = public_path('/data/car/thumb/' .$rs->id .'/');
            if(File::exists($destinationThumbPath.$rs->avatar)) {
                $str .= '<img src="/data/car/thumb/'.$rs->id .'/'.$rs->avatar .'" />';
            }
            else {
                $str .= '<img class="lazy" src="Content/images/notfound/notfound-images1e4c.png?w=250&h=145&mode=crop" data-original="/data/car/thumb/'.$rs->id.'/'.$rs->avatar.'?w=250&h=145&mode=crop" />';
            }
            $str .= '</span>';
            $str .= '<span class="txt">';
            $str .= '<span class="txt1"><span class="check"></span></span>';
            $str .= '<span class="txt2">';
            $str .= '<span class="name">'.$rs->name .'</span>';
            $str .= '<span class="price">';
            $str .= 'Giá từ: <span>'.number_format($rs->price) .'</span> <sup>VND</sup>';
            $str .= '</span>';
            $str .= '</span>';
            $str .= '</span>';
            $str .= '</label>';
            $str .= '</div>';
            $str .= '</div>';
            $str .= '</li>';
      }
        
      return $str;
    }

    public function export(Request $request)
    {
        return Excel::download(new FinancialExport(), 'BangTinh_TruyenThong_Thang.xlsx');
    }

    public function exportHaft()
    {
        return Excel::download(new Financial5050Export(), 'BangTinh_5050.xlsx');
    }


}
