<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutTimelineCat extends Model
{
    use HasTranslations;
    protected $translatable = [
        'year',
        'year_ar'
    ];
    protected $fillable = [
        'is_publish',
        'story_id',
        'year'
    ];

    public function story(){
        return $this->belongsTo('App\AboutStoryCat');
    }
}
