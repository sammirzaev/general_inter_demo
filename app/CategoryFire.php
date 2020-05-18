<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CategoryFire extends Model
{
    use HasTranslations;
    protected $translatable = [
        'title',
        'title_ar'
    ];
    protected $fillable = [
        'is_publish',
        'title',
        'type_id'
    ];

    public function type(){
        return $this->belongsTo('App\TypeFire', 'type_id');
    }
}
