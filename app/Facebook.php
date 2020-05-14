<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facebook extends Model
{
    protected $fillable = [
        'is_publish',
        'facebook'
    ];
}
