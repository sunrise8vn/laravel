<?php

namespace App\service;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class GenuineAccessaryGroup extends Model
{
    protected $table ="genuine_accessary_group";
    public $timestamps = true;

    public function GenuineAccessaryDetail()
    {
    	return $this->hasMany('App\Service\GenuineAccessaryDetail','group_id','id');
    }
}
