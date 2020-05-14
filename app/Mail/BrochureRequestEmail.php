<?php

namespace App\Mail;

use App\EmailConfiguration;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BrochureRequestEmail extends Mailable
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
        return  $this->from($mail->admin_email)
            ->subject('General International Group Brochure Requests')
            ->view('mail.brochures_mail')->with('data', $this->data);
    }
}
