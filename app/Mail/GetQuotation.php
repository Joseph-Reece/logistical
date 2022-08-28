<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GetQuotation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $details;
    public function __construct($details)
    {
        //
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.quotation')->subject('Quotation Request')->with([
            'length' => $this->details['length'],
            'width' => $this->details['width'],
            'height' => $this->details['height'],
            'origin' => $this->details['origin'],
            'destination' => $this->details['destination'],
            'contact' => $this->details['contact'],
            'email' => $this->details['email'],
        ]);

    }
}
