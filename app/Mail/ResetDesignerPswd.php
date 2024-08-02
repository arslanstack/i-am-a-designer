<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ResetDesignerPswd extends Mailable
{
    public $reset_url;

    public function __construct($reset_url)
    {
        $this->reset_url = $reset_url;
    }

    public function build()
    {
        return $this->subject('Reset Your Account Password')
            ->view('emails.contact')
            ->with([
                'reset_url' => $this->reset_url,
            ]);
    }
}
