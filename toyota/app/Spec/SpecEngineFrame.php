<?php

namespace App\Spec;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class SpecEngineFrame extends Model
{
    protected $table ="spec_engine_frame";
    public $timestamps = true;

    public function Cars()
    {
    	return $this->belongsTo('App\Cars','car_id','id');
    }
}
