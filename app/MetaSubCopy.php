<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetaSubCopy extends Model
{
    protected $fillable = [
        'is_publish',
        'subject',
        'copyright'
    ];
}
