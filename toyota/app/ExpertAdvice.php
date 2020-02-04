<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class ExpertAdvice extends Model
{
    protected $table ="expert_advice";
    public $timestamps = true;

    public function ExpertAdviceGroup()
    {
    	return $this->belongsTo('App\ExpertAdviceGroup','group_id','id');
    }
}
