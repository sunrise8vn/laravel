<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class GenuineAccessories extends Model
{
    protected $table ="genuine_accessories";
    public $timestamps = true;

    public function GenuineAccessoriesGroup()
    {
    	return $this->belongsTo('App\GenuineAccessoriesGroup','group_id','id');
    }

    public function CarCategory()
    {
    	return $this->belongsTo('App\CarCategory','car_cate_id','id');
    }

}
