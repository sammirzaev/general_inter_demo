<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class JobCareers extends Model
{
    use HasTranslations;
    protected $translatable = [
        'job_name',
        'job_name_ar',
        'job_title',
        'job_title_ar',
        'job_desc',
        'job_desc_ar',
    ];
    protected $fillable = [
        'is_publish',
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
