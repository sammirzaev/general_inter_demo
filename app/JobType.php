<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class JobType extends Model
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

    public function careers(){
        return $this->hasMany('App\JobCareers');
    }
}
