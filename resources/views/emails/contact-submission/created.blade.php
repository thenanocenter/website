@component('mail::message')
# New Contact Submission

**Name:** {{ $contactSubmission->name }}

**Email:** {{ $contactSubmission->email }}

**Message:**

{{ $contactSubmission->message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
