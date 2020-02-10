<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class OtherInfoCar extends Model
{
    protected $table ="other_info_car";
    public $timestamps = true;

    public function Cars()
    {
    	return $this->belongsTo('App\Cars','car_id','id');
    }

}
