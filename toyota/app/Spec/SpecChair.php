<?php

namespace App\spec;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class SpecChair extends Model
{
    protected $table ="spec_chair";
    public $timestamps = true;

    public function Cars()
    {
    	return $this->belongsTo('App\Cars','car_id','id');
    }
}
