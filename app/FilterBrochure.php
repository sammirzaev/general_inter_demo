<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class FilterBrochure extends Model
{
    use HasTranslations;
    protected $translatable = [
        'filter',
        'filter_ar'
    ];

    protected $fillable = [
        'filter',
        'filter_ar'
    ];

    public function brochure(){
        return $this->hasMany('App\Brochures');
    }
}
