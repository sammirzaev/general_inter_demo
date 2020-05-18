<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutBanner extends Model
{
    use HasTranslations;
    protected $translatable = [
        'title',
        'title_ar',
        'head_title',
        'head_title_ar'
    ];
    protected $fillable = [
        'is_publish',
        'title',
        'head_title',
        'banner'
    ];

//    public function setBannerAttribute($value){
//          $this->attributes['banner'] = asset($value);
//    }

    public function getBannerAttribute($value){
        return asset('storage/about-media/'.$value);
    }

}
