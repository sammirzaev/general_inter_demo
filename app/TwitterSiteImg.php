<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TwitterSiteImg extends Model
{
    protected $fillable = [
        'is_publish',
        'twit_site',
        'twit_img'
    ];
}
