<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    private $requestList;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($requestList)
    {
        $this->requestList = $requestList;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from($this->requestList['requestEmail'], $this->requestList['requestName'])
        ->subject($this->requestList['requestSubject'])
        ->view('emails.contact', $this->requestList);
    }
}
