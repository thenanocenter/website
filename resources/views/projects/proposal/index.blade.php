@extends('layouts.app')

@section('content')
<h1 style="text-align: center">Propose Your Project</h1>
{!! Former::open_vertical('projects/proposal')->method('POST') !!}
<div class="col-lg-12">
	<div style="text-align: center">
		<p>Fill out your project details below</p>
	</div>
    <div class="col-sm-8 offset-sm-2">
        <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
        </div>
        <div class="form-group">
            <input name="title" type="text" class="form-control" placeholder="Title of your project *" id="title" required data-validation-required-message="Your project needs a title">
        </div>
    </div>
    <div class="col-sm-8 offset-sm-2">
        {!! Former::textarea('description','')->placeholder('Project Description*')->rows(10) !!}
        {!! Former::text('goal','')->placeholder('Estimated Project Goal*')->required()->help('The estimated amount required for this project (Be sure to specify currency - Nano, USD, Euro...)') !!}
        {!! Former::text('written_proposal_url','')->placeholder('Written Proposal URL*')->required()->help('A link to a well documented proposal. This is required for acceptance. This may be a link to an external PDF or Google Docs file. <a href="https://docs.google.com/document/d/1qfywO6s5wFLOuUDRIgmtsWbuoAnCkgmXcGWTyH8UAww" target="_blank">For an example, click here</a>') !!}
        {!! Former::textarea('links','')->placeholder('Any additional links to project media, presentations, or guidelines')->help('A link to a well documented proposal. This is required for acceptance. This may be a link to an external PDF or Google Docs file. <a href="#" target="_blank">For an example, click here</a>') !!}
        @include('components.recaptcha.widget')
    </div>
    <div class="col-sm-8 offset-sm-2">
        <div id="success"></div>
        <button type="submit" class="btn btn-light-blue btn-lg">Submit Project Proposal</button>
    </div>
</div>
{!! Former::close() !!}

@endsection

@section('scripts')
    @include('components.recaptcha.scripts')
@endsection