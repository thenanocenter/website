@extends('layouts.app')

@section('content')
<h1>{!! $project->name !!}</h1>

<div class="row">
    <div class="col-sm-8">
        @include('components.projects.page-content',['project'=>$project])
    </div>
    <div class="col-sm-4 position-relative">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Support This Project:</h4>
            </div>
            <div class="card-body">
                {!! Former::open_vertical($project->getPath().'/payment')->method('POST') !!}
                {!! Former::text('name','')->placeholder('Your Name') !!}
                {!! Former::email('email','')->placeholder('Email Address') !!}
                <div class="row">
                    <div class="col-sm-6">
                        {!! Former::text('selected_amount','')->placeholder('Amount') !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Former::select('selected_currency','')->options(['nano'=>'Nano','usd'=>'USD']) !!}
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Pay</button>
                {!! Former::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection