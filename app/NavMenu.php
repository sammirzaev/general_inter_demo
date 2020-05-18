<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class NavMenu extends Model
{
    use HasTranslations;
    protected $translatable = [
        'home',
        'home_ar',
        'about',
        'about_ar',
        'what_we_do',
        'what_we_do_ar',
        'fire',
        'fire_ar',
        'security',
        'security_ar',
        'water',
        'water_ar',
        'facility',
        'facility_ar',
        'projects',
        'projects_ar',
        'insights',
        'insights_ar',
        'news',
        'news_ar',
        'case',
        'case_ar',
        'contact',
        'contact_ar',
        'search',
        'search_ar',
        'lang',
        'lang_ar',
    ];
    protected $fillable = [
        'is_publish',
        'home',
        'about',
        'what_we_do',
        'fire',
        'security',
        'water',
        'facility',
        'projects',
        'insights',
        'news',
        'case',
        'contact',
        'search',
        'lang'
    ];
}
