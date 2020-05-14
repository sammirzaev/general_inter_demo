<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderSpace extends Model
{
    protected $fillable = [
        'is_publish',
        'header_space'
    ];
}
