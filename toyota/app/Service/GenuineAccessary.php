<?php

namespace App\service;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class GenuineAccessary extends Model
{
    protected $table ="genuine_accessary";
    public $timestamps = true;

    public function GenuineAccessaryDetail()
    {
    	return $this->hasMany('App\Service\GenuineAccessaryDetail','acc_id','id');
    }
}
