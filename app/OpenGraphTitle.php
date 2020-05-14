<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpenGraphTitle extends Model
{
    protected $fillable = [
        'is_publish',
        'title'
    ];
}
