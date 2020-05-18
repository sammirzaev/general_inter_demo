<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutStoryCat extends Model
{
    use HasTranslations;
    protected $translatable = [
        'title',
        'title_ar',
        'story_cat',
        'story_cat_ar'
    ];
    protected $fillable = [
        'is_publish',
        'title',
        'story_cat'
    ];
}
