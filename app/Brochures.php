<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Brochures extends Model
{
    use HasTranslations;
    protected $translatable = [
        'brochure_name',
        'title',
        'description',
        'brochure_name_ar',
        'filter_id_ar',
        'title_ar',
        'description_ar'
    ];

    protected $fillable = [
        'is_publish',
        'brochure_name',
        'filter_id',
        'title',
        'description',
        'picture'
    ];

    public function filter(){
        return $this->belongsTo('App\FilterBrochure');
    }

}
