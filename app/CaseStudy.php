<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CaseStudy extends Model
{
    use HasTranslations;
    protected $translatable = [
        'title',
        'title_ar',
        'description',
        'description_ar'
    ];
    protected $fillable = [
        'is_publish',
        'title',
        'media_id',
        'cat_id',
        'description'
    ];

    public function media(){
        return $this->belongsTo('App\CaseMedia', 'media_id');
    }

    public function category(){
        return $this->belongsTo('App\CaseCategory', 'cat_id');
    }
}
