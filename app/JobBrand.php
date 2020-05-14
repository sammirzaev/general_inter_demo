<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobBrand extends Model
{
    protected $fillable = [
        'is_publish',
        'brand_id',
        'brand_name'
    ];

    public function brand()
    {
        return $this->belongsTo('App\BrandPhoto');
    }

    public function careers(){
        return $this->hasMany('App\JobCareers');
    }
}
