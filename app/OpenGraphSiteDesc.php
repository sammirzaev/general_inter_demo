<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpenGraphSiteDesc extends Model
{
    protected $fillable = [
        'is_publish',
        'site_name',
        'description'
    ];
}
