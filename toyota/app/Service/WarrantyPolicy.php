<?php

namespace App\Service;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class WarrantyPolicy extends Model
{
    protected $table ="warranty_policy";
    public $timestamps = true;
}
