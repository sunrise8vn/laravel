<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class CarFunctionGroup extends Model
{
    protected $table ="functions_group";
    public $timestamps = true;

    public function CarFunction()
    {
    	return $this->hasMany('App\CarFunction','group_id','id');
    }
}
