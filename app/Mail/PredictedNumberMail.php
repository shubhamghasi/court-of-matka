<?php

// app/Mail/PredictedNumberMail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PredictedNumberMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $predicted_number;

    public function __construct($user, $predicted_number)
    {
        $this->user = $user;
        $this->predicted_number = $predicted_number;
    }

    public function build()
    {
        return $this->subject('Your Predicted Number')
                    ->view('emails.predicted_number')
                    ->with([
                        'user' => $this->user,
                        'predicted_number' => $this->predicted_number,
                    ]);
    }
}