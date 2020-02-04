<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class CarCategory extends Model
{
    protected $table ="car_categories";
    public $timestamps = true;

    public function CarDetail()
    {
    	return $this->hasMany('App\Cars','car_cate_id','id');
    }

    public function DiscoverCars()
    {
        return $this->hasMany('App\DiscoverCars','car_cate_id','id');
    }

    public function GenuineAccessoriesGroup()
    {
    	return $this->hasMany('App\GenuineAccessoriesGroup','car_cate_id','id');
    }
}
