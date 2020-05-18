<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Project extends Model
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
        'cat_id',
        'media'
    ];

    public function category(){
        return $this->belongsTo('App\ProjectCategory', 'cat_id');
    }

    public function getMediaAttribute($value){
        return asset('storage/project-media/'.$value);
    }
}
