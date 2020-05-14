<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoogleAnalytics extends Model
{
    protected $fillable = [
        'is_publish',
        'header',
        'footer'
    ];
}
