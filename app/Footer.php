<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Footer extends Model
{
    use HasTranslations;
    protected $translatable = [
        'footer_title',
        'footer_title_ar'
    ];
    protected $fillable = [
        'is_publish',
        'footer_title',
    ];
}
