<?php

namespace App\Service;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class RepairService extends Model
{
    protected $table ="repair_service";
    public $timestamps = true;
}
