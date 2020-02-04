<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class CarFunction extends Model
{
    protected $table ="functions";
    public $timestamps = true;

    public function Cars()
    {
    	return $this->belongsTo('App\Cars','car_id','id');
    }

    public function CarFunctionGroup()
    {
    	return $this->belongsTo('App\CarFunctionGroup','group_id','id');
    }
}
