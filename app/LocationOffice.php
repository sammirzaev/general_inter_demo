<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class LocationOffice extends Model
{
    use HasTranslations;
    protected $translatable = [
        'location',
        'location_ar',
    ];
    protected $fillable = [
        'is_publish',
        'location'
    ];
}
