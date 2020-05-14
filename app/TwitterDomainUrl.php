<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TwitterDomainUrl extends Model
{
    protected $fillable = [
        'is_publish',
        'twit_dom',
        'twit_url'
    ];
}
