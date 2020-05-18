<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class NewsMedia extends Model
{
    use HasTranslations;
    protected $translatable = [
        'title',
        'title_ar'
    ];
    protected $fillable = [
        'is_publish',
        'title',
        'media',
        'cat_id',
        'post_id'
    ];

    public function category(){
        return $this->belongsTo('App\NewsCategory', 'cat_id');
    }

    public function post(){
        return $this->belongsTo('App\NewsPost', 'post_id');
    }
    public function getMediaAttribute($value){
        return asset('storage/posts-media/'.$value);
    }
}
