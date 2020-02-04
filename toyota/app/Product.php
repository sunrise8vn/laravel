<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Product extends Model
{
    //
    protected $table ="products";
    public $timestamps = false;

    public function Category()
    {
    	return $this->belongsTo('App\Category','cat_id','id');
    }

}
