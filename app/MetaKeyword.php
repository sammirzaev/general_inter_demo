<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetaKeyword extends Model
{
    protected $fillable = [
        'is_publish',
        'keywords'
    ];
}
