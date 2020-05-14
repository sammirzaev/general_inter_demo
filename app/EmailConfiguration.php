<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailConfiguration extends Model
{
    protected $fillable = [
        'is_publish',
        'hr_email',
        'career_email',
        'admin_email',
        'contact_email'
    ];
}
