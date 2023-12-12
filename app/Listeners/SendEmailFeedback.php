<?php

namespace App\Listeners;

use App\Events\Feedback;
use App\Mail\SendFeedback;
use Illuminate\Support\Facades\Mail;

class SendEmailFeedback
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Feedback $event): void
    {
//        Log::alert("Feedback send  " . $event->feedback->message);
        Mail::to($event->user->email)->send(new SendFeedback($event->user,$event->feedback));
    }
}
