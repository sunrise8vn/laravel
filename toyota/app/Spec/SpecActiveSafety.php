<?php

namespace App\spec;

use Illuminate\Database\Eloquent\Model;

class SpecActiveSafety extends Model
{
    protected $table ="spec_active_safety";
    public $timestamps = true;

    public function Cars()
    {
    	return $this->belongsTo('App\Cars','car_id','id');
    }
}
