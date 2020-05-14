<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
   protected $fillable = [
       'is_publish',
       'name'
   ];

    public function categories(){
        return $this->belongsToMany(JobCareers::class, 'job_careers_job_category', 'job_careers_id', 'job_category_id');
    }
}
