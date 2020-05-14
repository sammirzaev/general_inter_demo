<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Robots extends Model
{
    protected $fillable = [
        'is_publish',
        'robots'
    ];
}
