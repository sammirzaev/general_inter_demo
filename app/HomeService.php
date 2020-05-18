<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class HomeService extends Model
{
    use HasTranslations;
    protected $translatable = [
        'title',
        'title_ar',
        'description',
        'description_ar',
        'read_more',
        'read_more_ar'
    ];
    protected $fillable = [
        'is_publish',
        'service_id',
        'title',
        'description',
        'read_more',
        'read_link'
    ];

    public function service(){
        return $this->belongsTo('App\HomeServiceCat');
    }
}
