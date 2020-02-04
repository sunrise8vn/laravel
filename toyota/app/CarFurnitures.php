<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class CarFurnitures extends Model
{
    protected $table ="furnitures";
    public $timestamps = true;

    public function Cars()
    {
    	return $this->belongsTo('App\Cars','car_id','id');
    }
}
