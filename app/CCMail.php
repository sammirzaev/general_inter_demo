<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CCMail extends Model
{
    protected $fillable = [
        'mail',
        'is_publish'
    ];
}
