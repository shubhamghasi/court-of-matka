<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $url;
    public $code;

    public function __construct($user, $url, $code)
    {
        $this->user = $user;
        $this->url = $url;
        $this->code = $code;
    }

    public function build()
    {
        return $this->subject('Verify Your Email - Court of Matka')
            ->view('emails.verification') // your custom Blade view
            ->with([
                'user' => $this->user,
                'url' => $this->url,
                'code' => $this->code,
            ]);
    }
}