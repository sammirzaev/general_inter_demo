<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutPolicy extends Model
{
    use HasTranslations;
    protected $translatable = [
        'description',
        'description_ar'
    ];
    protected $fillable = [
        'is_publish',
        'description',
        'story_id'
    ];

    public function story(){
        return $this->belongsTo('App\AboutStoryCat', 'story_id');
    }
}
