<?php

namespace App\spec;

use Illuminate\Database\Eloquent\Model;

class SpecPassiveSafety extends Model
{
    protected $table ="spec_passive_safety";
    public $timestamps = true;

    public function Cars()
    {
    	return $this->belongsTo('App\Cars','car_id','id');
    }
}
