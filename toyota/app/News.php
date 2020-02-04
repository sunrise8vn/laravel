<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class News extends Model
{
    protected $table ="news";
    public $timestamps = true;

    public function NewsCategory()
    {
    	return $this->belongsTo('App\NewsCategory','news_cate_id','id');
    }
}
