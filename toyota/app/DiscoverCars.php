<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class DiscoverCars extends Model
{
    protected $table ="discover_cars";
    public $timestamps = true;

    public function Cars()
    {
    	return $this->belongsTo('App\Cars','car_id','id');
    }

    public function CarCategory()
    {
    	return $this->belongsTo('App\CarCategory','car_cate_id','id');
    }
}
