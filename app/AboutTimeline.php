<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutTimeline extends Model
{
    use HasTranslations;
    protected $translatable = [
        'title',
        'title_ar',
        'description',
        'description_ar'
    ];
    protected $fillable = [
        'is_publish',
        'title',
        'description',
        'date_id',
        'story_id',
        'year_id',
        'media'
    ];

    public function story(){
        return $this->belongsTo('App\AboutStoryCat', 'story_id');
    }

    public function timeline(){
        return $this->belongsTo('App\AboutTimelineCat', 'year_id');
    }

    public function date(){
        return $this->belongsTo('App\AboutTimelineCat', 'date_id');
    }

    public function getMediaAttribute($value){
        return asset('storage/timeline-media/'.$value);
    }

}
