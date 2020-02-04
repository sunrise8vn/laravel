<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class ExpertAdviceGroup extends Model
{
    protected $table ="expert_advice_group";
    public $timestamps = true;

    public function ExpertAdvice()
    {
    	return $this->hasMany('App\ExpertAdvice','group','id');
    }
}
