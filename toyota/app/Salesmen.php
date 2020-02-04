<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class Salesmen extends Model
{
    protected $table ="salesmen";
    public $timestamps = true;

    public function SalesmenGroup()
    {
    	return $this->belongsTo('App\SalesmenGroup','group_id','id');
    }

    public function ContactStaff()
    {
    	return $this->hasMany('App\ContactStaff','staff_id','id');
    }
}
