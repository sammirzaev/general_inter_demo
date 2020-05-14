<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BCCMail extends Model
{
    protected $fillable = [
        'is_publish',
        'mail'
    ];
}
