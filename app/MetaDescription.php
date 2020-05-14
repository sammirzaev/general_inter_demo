<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetaDescription extends Model
{
    protected $fillable = [
        'is_publish',
        'descriptions'
    ];
}
