<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceWater extends Model
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
        'type_id',
        'media'
    ];

    public function type(){
        return $this->belongsTo('App\TypeWater', 'type_id');
    }

    public function category(){
        return $this->belongsTo('App\CategoryWater', 'cat_id');
    }
    public function getMediaAttribute($value){
        return asset('storage/service-media/'.$value);
    }
}
