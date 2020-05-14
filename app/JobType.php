<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    protected $fillable = [
        'is_publish',
        'name'
    ];

    public function careers(){
        return $this->hasMany('App\JobCareers');
    }
}
