<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class HomePartner extends Model
{
    use HasTranslations;
    protected $translatable = [
        'title',
        'title_ar'
    ];
    protected $fillable = [
        'is_publish',
        'title',
        'logo',
        'background'
    ];
    public function getBackgroundAttribute($value){
        return asset('storage/home-partner/'.$value);
    }
    public function getLogoAttribute($value){
        return asset('storage/home-partner/'.$value);
    }
}
