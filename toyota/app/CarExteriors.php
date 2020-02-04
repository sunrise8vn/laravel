<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class CarExteriors extends Model
{
	protected $table ="exteriors";
    public $timestamps = true;

    public function Cars()
    {
    	return $this->belongsTo('App\Cars','car_id','id');
    }
}
