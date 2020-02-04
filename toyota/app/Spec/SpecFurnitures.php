<?php

namespace App\spec;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class SpecFurnitures extends Model
{
    protected $table ="spec_furnitures";
    public $timestamps = true;

    public function Cars()
    {
    	return $this->belongsTo('App\Cars','car_id','id');
    }
}
