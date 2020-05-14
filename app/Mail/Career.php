<?php

namespace App\Mail;

use App\CareerContact;
use App\EmailConfiguration;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use App\Providers\MailConfigServiceProvider;

class Career extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = EmailConfiguration::all()->first();
        return  $this->from($mail->career_email)
            ->subject('General International Group Careers')
            ->view('mail.careers_contact')->with('data', $this->data);
    }
}
