<?php

namespace App\Service;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class MaintenanceService extends Model
{
    protected $table ="maintenance_service";
    public $timestamps = true;
}
