<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class HomeBanner extends Model
{
    use HasTranslations;
    protected $translatable = [
        'title',
        'title_ar',
        'head_title',
        'head_title_ar',
        'quote',
        'quote_ar'
    ];
    protected $fillable = [
        'is_publish',
        'title',
        'banner',
        'head_title',
        'quote',
        'quote_link',
    ];
    public function getBannerAttribute($value){
        return asset('storage/banner-media/'.$value);
    }
}
