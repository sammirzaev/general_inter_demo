<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetaURLDistCov extends Model
{
    protected $fillable = [
        'is_publish',
        'url',
        'distribution',
        'coverage'
    ];
}
