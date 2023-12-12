<?php

namespace App\Mail;

use App\Models\Feedbacks;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendFeedback extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $feedback;
    /**
     * Create a new message instance.
     */
    public function __construct(User $user,Feedbacks $feedback)
    {
        $this->user= $user;
        $this->feedback= $feedback;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('behruztoxirov909515499@gmail.com', 'bekhruzjon'),
            subject: 'Send Feedback',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.send-feedback',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
