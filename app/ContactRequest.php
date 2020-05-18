<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ContactRequest extends Model
{
    use HasTranslations;
    protected $translatable = [
        'sales_title',
        'sales_title_ar',
        'support_title',
        'support_title_ar',
        'career_title',
        'career_title_ar'
    ];
    protected $fillable = [
        'is_publish',
        'sales_title',
        'support_title',
        'career_title'
    ];
}
