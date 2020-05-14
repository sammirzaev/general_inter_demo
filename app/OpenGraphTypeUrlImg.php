<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpenGraphTypeUrlImg extends Model
{
    protected $fillable = [
        'is_publish',
        'type',
        'url',
        'image'
    ];
}
