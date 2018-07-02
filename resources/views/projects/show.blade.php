@extends('layouts.app')

@section('content')
<h1>{!! $project->name !!}</h1>

<div class="row">
    <div class="col-sm-8">
        @include('components.projects.page-content',['project'=>$project])
    </div>
    <div class="col-sm-4 position-relative">
        @if($project->status == 'completed')
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Project Completed!</h4>
                </div>
                <div class="card-body">
                    <p>⋰·⋰ Thanks for your support! ⋰·⋰</p>
                </div>
            </div>
        @elseif($project->status == 'funded')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Funding Completed!</h4>
                    </div>
                    <div class="card-body">
                        <p>⋰·⋰ Thanks for your support! ⋰·⋰</p>
                    </div>
                </div>
            @else
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Support This Project:</h4>
                </div>
                <div class="card-body">
                    {!! Former::open_vertical($project->getPath().'/payment')->method('POST') !!}
                    <div class="form-group">
                        <label>
                            <input type="checkbox" v-model="submitAsAnonymous"/> Donate Anonymously
                        </label>
                    </div>
                    <div v-if="!submitAsAnonymous">
                        {!! Former::text('name','')->placeholder('Your Name') !!}
                        {!! Former::email('email','')->placeholder('Email Address (Optional)')->help('Your email will only be visible by project administrators') !!}
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Former::text('selected_amount','')->placeholder('Amount') !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Former::select('selected_currency','')->options(['nano'=>'Nano','usd'=>'USD']) !!}
                        </div>
                    </div>
                    @include('components.recaptcha.widget')
                    <button type="submit" class="btn btn-primary">Pay</button>
                    {!! Former::close() !!}
                </div>
            </div>
        @endif
        @include('components.projects.top-contributors',['project'=>$project])
    </div>
</div>

@endsection

@section('scripts')
    @include('components.recaptcha.scripts')
@endsection