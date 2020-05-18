<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrochureRequest extends Model
{
    protected $fillable = [
        'brochure_id',
        'requester_name',
        'requester_email',
        'requester_phone'
    ];


    public function brochure()
    {
        return $this->belongsTo('App\Brochures');
    }



    public function notify(Notifications\BrochureNotification $param)
    {

    }
}
