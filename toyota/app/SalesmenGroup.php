<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class SalesmenGroup extends Model
{
    protected $table ="salesmen_group";
    public $timestamps = true;

    public function Salesmen()
    {
    	return $this->hasMany('App\Salesmen','group_id','id');
    }
}
