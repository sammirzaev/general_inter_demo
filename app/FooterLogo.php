<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class FooterLogo extends Model
{
    use HasTranslations;
    protected $translatable = [
        'title',
        'title_ar'
    ];
    protected $fillable = [
        'is_publish',
        'title',
        'logo'
    ];
    public function getLogoAttribute($value){
        return asset('storage/brands/'.$value);
    }
}
