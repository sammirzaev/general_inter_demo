<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class JobCategory extends Model
{
    use HasTranslations;
    protected $translatable = [
        'name',
        'name_ar'
    ];
   protected $fillable = [
       'is_publish',
       'name'
   ];



    public function categories(){
        return $this->belongsToMany(JobCareers::class, 'job_careers_job_category', 'job_careers_id', 'job_category_id');
    }
}
