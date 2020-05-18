<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutLeadership extends Model
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
        'story_id'
    ];

    public function story(){
        return $this->belongsTo('App\AboutStoryCat');
    }
}
