<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProjectProposalCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $projectProposal;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($projectProposal)
    {
        $this->projectProposal = $projectProposal;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->to(config('mail.admin'));
        $this->subject('Project Proposal Created');
        return $this->markdown('emails.project-proposal.created',['projectProposal'=>$this->projectProposal]);
    }
}
