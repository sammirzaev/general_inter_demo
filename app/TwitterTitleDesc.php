<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TwitterTitleDesc extends Model
{
    protected $fillable = [
        'is_publish',
        'twit_title',
        'twit_desc'

    ];
}
