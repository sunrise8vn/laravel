<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class GenuineAccessoriesGroup extends Model
{
    protected $table ="genuine_accessories_group";
    public $timestamps = true;

    public function GenuineAccessories()
    {
    	return $this->hasMany('App\GenuineAccessories','group_id','id');
    }
}
