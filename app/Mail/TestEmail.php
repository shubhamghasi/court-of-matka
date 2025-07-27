<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $messageContent;

    public function __construct($messageContent = "This is a test email from Laravel.")
    {
        $this->messageContent = $messageContent;
    }

    public function build()
    {
        return $this->subject('Laravel Test Email')
            ->view('emails.test');
    }
}