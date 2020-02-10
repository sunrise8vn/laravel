<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Cars extends Model
{
    protected $table ="car_details";
    public $timestamps = true;

    public function CarCategory()
    {
    	return $this->belongsTo('App\CarCategory','car_cate_id','id');
    }

    public function DiscoverCars()
    {
        return $this->hasMany('App\DiscoverCars','car_id','id');
    }

    public function CarColor()
    {
    	return $this->hasMany('App\CarColors','car_id','id');
    }

    public function CarLibrary()
    {
        return $this->hasMany('App\CarLibrary','car_id','id');
    }

    public function CarExteriorsGroup()
    {
        return $this->hasMany('App\CarExteriorsGroup','car_id','id');
    }

    public function CarExteriors()
    {
        return $this->hasMany('App\CarExteriors','car_id','id');
    }

    public function CarFurnituresGroup()
    {
        return $this->hasMany('App\CarFurnituresGroup','car_id','id');
    }

    public function CarFurnitures()
    {
        return $this->hasMany('App\CarFurnitures','car_id','id');
    }

    public function CarFunctionGroup()
    {
        return $this->hasMany('App\CarFunctionGroup','car_id','id');
    }

    public function CarFunction()
    {
        return $this->hasMany('App\CarFunction','car_id','id');
    }

    public function OtherInfoCar()
    {
        return $this->hasMany('App\OtherInfoCar','car_id','id');
    }

    
    // Specifications
    public function SpecEngineFrame()
    {
        return $this->hasOne('App\Spec\SpecEngineFrame','car_id','id');
    }

    public function SpecExteriors()
    {
        return $this->hasOne('App\Spec\SpecExteriors','car_id','id');
    }

    public function SpecFurnitures()
    {
        return $this->hasOne('App\Spec\SpecFurnitures','car_id','id');
    }

    public function SpecChair()
    {
        return $this->hasOne('App\Spec\SpecChair','car_id','id');
    }

    public function SpecConvnient()
    {
        return $this->hasOne('App\Spec\SpecConvnient','car_id','id');
    }

    public function SpecSecurity()
    {
        return $this->hasOne('App\Spec\SpecSecurity','car_id','id');
    }

    public function SpecActiveSafety()
    {
        return $this->hasOne('App\Spec\SpecActiveSafety','car_id','id');
    }

    public function SpecPassiveSafety()
    {
        return $this->hasOne('App\Spec\SpecPassiveSafety','car_id','id');
    }

    public function scopeCar_Cate($query, $request)
    {
        if ($request->has('car_cate')) {
            if(isset($request->car_cate)) {
                $query->whereIN('car_cate_id', explode(',', $request->car_cate));
            }
        }

        return $query;
    }

    public function scopePrice($query, $request)
    {
        if ($request->has('price')) {
            if(isset($request->price)) {
                $price = explode('-', $request->price);
                if(count($price) == 2){
                    $query->whereBetween('price', [$price[0], $price[1]]);    
                } 
                else {
                    $query->where('price', '>', $price[0]);  
                }
                
            }
        }

        return $query;
    }

    public function scopeFuel($query, $request)
    {
        if ($request->has('fuel')) {
            if(isset($request->fuel)) {
                $query->whereIN('fuel', explode(',', $request->fuel));
            }
        }

        return $query;
    }

    public function scopeSeat($query, $request)
    {
        if ($request->has('seat')) {
            if(isset($request->seat)) {
                $query->whereIN('number_of_seats', explode(',', $request->seat));
            }
        }

        return $query;
    }

    public function scopeDesign($query, $request)
    {
        if ($request->has('design')) {
            if(isset($request->design)) {
                $query->whereIN('design', explode(',', $request->design));    
            }
        }

        return $query;
    }

    public function scopeOrigin($query, $request)
    {
        if ($request->has('origin')) {
            if(isset($request->origin)) {
                $query->whereIN('origin', explode(',', $request->origin));    
            }
        }

        return $query;
    }
}
