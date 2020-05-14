<?php


namespace Illuminate\Mail;


use App\CareerContact;
use Illuminate\Support\Facades\Cache;

class TransportManager
{
    public function __construct($app)
    {
        $this->app = $app;

        /** @var MailConfig $config */
        $config = Cache::rememberForever('mail_config', function () {
            return CareerContact::first();
        });

        if ($config) {

            $this->app['config']['mail'] = [
                'driver' => $config->mail_driver,
                'host' => $config->mail_host,
                'port' => $config->mail_port,
                'encryption' => $config->mail_encryption,
                'username' => $config->mail_username,
                'password' => $config->mail_password,
                'sendmail' => '/usr/sbin/sendmail -bs',
                'pretend' => false
            ];

        }

    }
}
