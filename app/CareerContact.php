<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareerContact extends Model
{
    protected $fillable = [
        'is_publish',
        'mail_driver',
        'mail_host',
        'mail_port',
        'mail_username',
        'mail_password',
        'mail_encryption'
    ];
}
