<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    // 親の変数と被らないように
    private $requestEmail;
    private $requestSubject;
    private $requestBody;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $subject, $body)
    {
        $this->requestEmail   = $email;
        $this->requestSubject = $subject;
        $this->requestBody    = $body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from($this->requestEmail)
        ->subject($this->requestSubject)
        ->view('emails.contact', $this->requestBody);
    }
}
