<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class TypeSecurity extends Model
{
    use HasTranslations;
    protected $translatable = [
        'title',
        'title_ar'
    ];
    protected $fillable = [
        'is_publish',
        'title',
        'icon'
    ];
}
