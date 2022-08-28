<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        //
        $this->data = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contactForm')->subject("New Contact")->with([
            "fname" => $this->data['fname'],
            'lname' => $this->data['lname'],
            'phone_number' => $this->data['phone_number'],
            'email' => $this->data['email'],
            'message' => $this->data['message'],
        ]);
    }
}
