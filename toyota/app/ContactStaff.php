<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class ContactStaff extends Model
{
    protected $table ="contact_staff";
    public $timestamps = true;

    public function SalesmenGroup()
    {
    	return $this->belongsTo('App\Salesmen','staff_id','id');
    }
}
