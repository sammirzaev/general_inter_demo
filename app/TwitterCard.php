<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TwitterCard extends Model
{
    protected $fillable = [
        'is_publish',
        'twit_card'
    ];
}
