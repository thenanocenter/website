<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactSubmissionCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $contactSubmission;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactSubmission)
    {
        $this->contactSubmission = $contactSubmission;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->to(config('mail.admin'));
        $this->subject('Contact Submission Created');
        return $this->markdown('emails.contact-submission.created',['contactSubmission'=>$this->contactSubmission]);
    }
}
