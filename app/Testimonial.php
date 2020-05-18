<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Testimonial extends Model
{
    use HasTranslations;
    protected $translatable = [
        'title',
        'title_ar',
        'description',
        'description_ar',
        'footer',
        'footer_ar'
    ];
    protected $fillable = [
        'is_publish',
        'title',
        'description',
        'footer'
    ];
}
