<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class NewsPost extends Model
{
    use HasTranslations;
    use SluggableScopeHelpers;
    use Sluggable;
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
        'media_id'
    ];
    protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category(){
        return $this->belongsTo('App\NewsCategory', 'cat_id');
    }

    public function media(){
        return $this->belongsTo('App\NewsMedia','media_id');
    }

}
