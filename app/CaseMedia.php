<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CaseMedia extends Model
{
    use HasTranslations;
    protected $translatable = [
        'title',
        'title_ar'
    ];
    protected $fillable = [
        'is_publish',
        'title',
        'case_id',
        'cat_id',
        'media'
    ];

    public function case(){
        return $this->belongsTo('App\CaseStudy', 'case_id');
    }

    public function category(){
        return $this->belongsTo('App\CaseCategory', 'cat_id');
    }

    public function getMediaAttribute($value){
        return asset('storage/study-media/'.$value);
    }
}
