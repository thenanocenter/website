@component('mail::message')
# New Project Proposal

**Title:** {{ $projectProposal->title }}

**Written Proposal URL:** {{ $projectProposal->written_proposal_url }}

**Email:** {{ $projectProposal->email }}

**Goal:** {{ $projectProposal->goal }}

**Description:**

{{ $projectProposal->description }}

**Additional Links:**

{{ $projectProposal->links }}

@component('mail::button', ['url' => url('/manage/proposal/'.$projectProposal->uuid)])
    Manage Proposal
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
