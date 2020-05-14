<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{

    protected $fillable = [
        'job_id',
        'name',
        'email',
        'phone',
        'subject',
        'letter',
        'file'
    ];

    public function jobs()
    {
        return $this->belongsTo('App\JobCareers', 'job_id');
    }
}
