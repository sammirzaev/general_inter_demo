<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCareers extends Model
{
    protected $fillable = [
        'is_publish',
        'brand_id',
        'job_name',
        'job_title',
        'job_desc',
        'type_id',
        'location_id',
        'salary_id'
    ];

    public function categories(){
        return $this->belongsToMany('App\JobCategory');
    }

    public function type(){
        return $this->belongsTo('App\JobType');
    }

    public function location(){
        return $this->belongsTo('App\JobLocation');
    }

    public function salary(){
        return $this->belongsTo('App\JobSalary');
    }

    public function brand(){
        return $this->belongsTo('App\JobBrand');
    }

    public function candidate()
    {
        return $this->belongsTo('App\Candidate');
    }

}
