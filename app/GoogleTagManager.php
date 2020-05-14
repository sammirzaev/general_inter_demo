<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoogleTagManager extends Model
{
    protected $fillable = [
        'is_publish',
        'gtm_header',
        'gtm_footer'
    ];
}
