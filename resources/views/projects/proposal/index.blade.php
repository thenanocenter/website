@extends('layouts.app')

@section('content')

{!! Former::open_vertical('projects/proposal')->method('POST') !!}
<div class="row">
    <div class="col-sm-8">
        <h1 style="text-align: center">Propose Your Project</h1>
        <div style="text-align: center">
            <p>Fill out your project details below</p>
        </div>
            {!! Former::email('email','')->placeholder('Your Email Address **')->required() !!}
            {!! Former::text('title','')->placeholder('Title of your project **')->required() !!}
            {!! Former::textarea('description','')->placeholder('Project Description*')->rows(10) !!}
            {!! Former::text('goal','')->placeholder('Estimated Project Goal*')->required()->help('The estimated amount required for this project (Be sure to specify currency - Nano, USD, Euro...)') !!}
            {!! Former::text('written_proposal_url','')->placeholder('Written Proposal URL*')->required()->help('A link to a well documented proposal. This is required for acceptance. This may be a link to an external PDF or Google Docs file. <a href="https://docs.google.com/document/d/1qfywO6s5wFLOuUDRIgmtsWbuoAnCkgmXcGWTyH8UAww" target="_blank">For an example, click here</a>') !!}
            {!! Former::textarea('links','')->placeholder('Any additional links to project media, presentations, or guidelines') !!}
            @include('components.recaptcha.widget')
            <div id="success"></div>
            <button type="submit" class="btn btn-light-blue btn-lg">Submit Project Proposal</button>
    </div>
    <div class="col-sm-4" style="padding-top:50px;">
        <h3>Project Guidelines</h3>
        <p><small><strong>Please review all below before submitting!</strong></small></p>
        <ul class="list-item-container">
            <li>All proposals must be submitted to The Nano Center via the website - nanocenter.org</li>
            <li>Each proposal must have a named “Leader/Coordinator” who will assume ultimate responsibility for the project. This individual can be the initial proposer or another nominated person.</li>
            <li>Project leaders/coordinators must disclose their identity to at a minimum The Nano Center Co-Founders.</li>
            <li>We strongly advise that the budgeting for project is carried out with the highest diligence possible and cost implications be properly considered. It is within the proposers scope to change the budget as the project progresses but we strongly advise against this practise.</li>
            <li>All financial information relating to the spending of community funds will be openly available for public consumption in their entirety.</li>
            <li>Receipts/Tickets for spent funds must also be provided where possible and reported back to the community upon the completion of the project.</li>
            <li>Funding will not be provided piecemeal. Full funding will be transferred to the Project leader/coordinator upon the completion of the funding phase.</li>
        </ul>
    </div>
</div>
{!! Former::close() !!}

@endsection

@section('scripts')
    @include('components.recaptcha.scripts')
@endsection