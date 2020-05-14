<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoogleVerification extends Model
{
    protected $fillable = [
        'is_publish',
        'verify'
    ];
}
