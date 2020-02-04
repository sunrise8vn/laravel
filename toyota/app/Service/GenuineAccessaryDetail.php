<?php

namespace App\service;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class GenuineAccessaryDetail extends Model
{
    protected $table ="genuine_accessary_details";
    public $timestamps = true;

    public function GenuineAccessary()
    {
    	return $this->belongsTo('App\Service\GenuineAccessary','acc_id','id');
    }

    public function GenuineAccessaryGroup()
    {
    	return $this->belongsTo('App\Service\GenuineAccessaryGroup','group_id','id');
    }
}
