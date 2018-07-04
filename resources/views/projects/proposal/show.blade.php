@extends('layouts.app')

@section('content')
<h1 style="text-align: center">Propose Your Project</h1>
{!! Former::open_vertical('/propose')->method('POST') !!}
<div class="col-lg-12">
	<div style="text-align: center">
		<p>Instrunctions here</p>
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
        <div class="form-group">
            <textarea name="short-summary" class="form-control" maxlength="250" placeholder="Short summary (250 char) *" id="message" required data-validation-required-message="Please enter a short-summary."></textarea>
        </div>
        <div class="form-group">
            <textarea name="detailed description" class="form-control" placeholder="Detailed description *" id="summary" required data-validation-required-message="Please enter a detailed description."></textarea>
        </div>
        <div class="form-group">
            <input name="funding" class="form-control" placeholder="Funding target *" id="funding" required data-validation-required-message="Please enter a detailed description."></input>
        </div>
        <div class="form-group">
            <textarea name="media" class="form-control" placeholder="Links to project media, projects or presentations" id="media"></textarea>
        </div>
    </div>
    <div class="col-sm-8 offset-sm-2">
    @include('components.recaptcha.widget')
    </div>
    <div class="col-sm-8 offset-sm-2">
        <div id="success"></div>
        <button type="submit" class="btn btn-light-blue btn-lg">Submit Project Proposal</button>
    </div>
</div>
{!! Former::close() !!}

@endsection