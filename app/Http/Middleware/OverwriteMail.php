<?php

namespace App\Http\Middleware;

use App\CareerContact;
use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class OverwriteMail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

         $mail = CareerContact::all()->first();
        $config = array(
            'driver'     =>$mail->mail_driver,
            'host'       =>$mail->mail_host,
            'port'       =>$mail->mail_port,
            'username'   =>$mail->mail_username,
            'password'   =>$mail->mail_password,
            'encryption' =>$mail->mail_encryption,
        );
        Config::set('mail', $config);
        $app = App::getInstance();
        $app->register('Illuminate\Mail\MailServiceProvider');

        return $next($request);
    }
}
