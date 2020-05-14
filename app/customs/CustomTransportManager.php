<?php


namespace App\Providers;


use Illuminate\Mail\TransportManager;

class CustomTransportManager extends TransportManager
{

    /**
     * CustomTransportManager constructor.
     * @param $app
     */
    public function __construct($app)
    {
    }
}
