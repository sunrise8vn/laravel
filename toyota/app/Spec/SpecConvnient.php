<?php

namespace App\spec;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class SpecConvnient extends Model
{
    protected $table ="spec_convnient";
    public $timestamps = true;

    public function Cars()
    {
    	return $this->belongsTo('App\Cars','car_id','id');
    }
}
