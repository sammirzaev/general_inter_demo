<?php

namespace App\Mail;

use App\Candidate;
use App\CareerContact;
use App\EmailConfiguration;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Request;

class HRMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data=[])
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
        return  $this->from($mail->hr_email)->subject('General International Group HR')->view('mail.careers_contact')
            ->attach($this->data['file']->getRealPath(),array(
                'as'=>$this->data['file']->getClientOriginalName(),
                'mime'=>$this->data['file']->getMimeType(),
            ));
    }
}
