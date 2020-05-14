<?php

namespace App\Providers;

use App\CareerContact;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class MailConfigServiceProvider extends ServiceProvider
{
    public $mail;
    public $config;
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if (Schema::hasTable('career-contacts')){
            $mail = DB::table('career-contacts')->first();
            if ($mail)
            {
                $config = array(
                  'driver'     =>$mail->mail_driver,
                  'host'       =>$mail->mail_host,
                  'port'       =>$mail->mail_port,
                  'username'   =>$mail->mail_username,
                  'password'   =>$mail->mail_password,
                  'encryption' =>$mail->mail_encryption,
                );
                Config::set('mail', $config);
            }
        }

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       //
    }
}
