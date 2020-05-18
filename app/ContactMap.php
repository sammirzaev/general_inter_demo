<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ContactMap extends Model
{
    use HasTranslations;
    protected $translatable = [
        'open_title',
        'open_title_ar',
        'close_title',
        'close_title_ar'
    ];
    protected $fillable = [
        'is_publish',
        'open_title',
        'close_title',
        'link',
        'icon'
    ];
}
