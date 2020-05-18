<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProjectBanner extends Model
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

    public function getBannerAttribute($value){
        return asset('storage/banner-media/'.$value);
    }
}
