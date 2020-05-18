<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ContactDetails extends Model
{
    use HasTranslations;
    protected $translatable = [
        'phone_title',
        'phone_title_ar',
        'address_title',
        'address_title_ar',
        'email_title_ar',
        'email_title',
        'address',
        'address_ar'
    ];

    protected $fillable = [
        'is_publish',
        'phone_icon',
        'address_icon',
        'email_icon',
        'phone_title',
        'address_title',
        'email_title',
        'phone',
        'fax',
        'address',
        'email'
    ];
}
