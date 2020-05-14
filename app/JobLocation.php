<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobLocation extends Model
{
    protected $fillable = [
        'is_publish',
        'name'
    ];

    public function careers(){
        return $this->hasMany('App\JobCareers');
    }
}
