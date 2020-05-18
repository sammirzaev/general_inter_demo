<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutDiversityIcon extends Model
{
    use HasTranslations;
    protected $translatable = [
        'title',
        'title_ar',
    ];
    protected $fillable = [
        'is_publish',
        'title',
        'icon',
        'story_id'
    ];

    public function story(){
        return $this->belongsTo('App\AboutStoryCat');
    }
}
