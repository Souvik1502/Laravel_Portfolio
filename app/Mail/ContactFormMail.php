<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('New Contact Form Submission')
                    ->markdown('emails.contact-form')
                    ->with([
                        'name' => $this->data['name'],
                        'email' => $this->data['email'],
                        'subject' => $this->data['subject'],
                        'messageContent' => $this->data['message']
                    ]);
    }
} 