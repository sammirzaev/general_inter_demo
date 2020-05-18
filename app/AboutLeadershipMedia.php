<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutLeadershipMedia extends Model
{
    use HasTranslations;
    protected $translatable = [
        'title',
        'title_ar',
    ];
    protected $fillable = [
        'is_publish',
        'title',
        'media',
        'story_id'
    ];

    public function story(){
        return $this->belongsTo('App\AboutStoryCat');
    }

    public function getMediaAttribute($value){
        return asset('storage/leadership-media/'.$value);
    }
}
