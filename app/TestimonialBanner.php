<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class TestimonialBanner extends Model
{
    use HasTranslations;
    protected $translatable = [
        'title',
        'title_ar',
    ];
    protected $fillable = [
        'is_publish',
        'title',
        'banner'
    ];

    public function getBannerAttribute($value){
        return asset('storage/banner-media/'.$value);
    }
}
