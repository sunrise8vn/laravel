<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class NewsCategories extends Model
{
    protected $table ="news_categories";
    public $timestamps = true;

    public function News()
    {
    	return $this->hasMany('App\News','news_cate_id','id');
    }
}
