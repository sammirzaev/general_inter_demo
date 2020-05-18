<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class HomeServiceCat extends Model
{
    use HasTranslations;
    protected $translatable = [
        'name',
        'name_ar'
    ];
    protected $fillable = [
        'is_publish',
        'name'
    ];

}
