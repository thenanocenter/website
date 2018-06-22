@extends('layouts.app')

@section('content')
<h1>Projects</h1>

<div class="row">
    <div class="col-sm-8">
        @component('components.panel',['title'=>$project->name])
            <div class="row">
                <div class="col-sm-4">
                    <img class="card-img-left flex-auto d-none d-lg-block" style="max-width: 250px;" alt="{{ $project->name }}" src="{{ asset('storage/'. $project->image_path ) }}">
                </div>
                <div class="col-sm-8">
                    <div class="mb-1 text-muted">{{ $project->getNanoCurrent() }} / {{ $project->nano_goal }} ⋰·⋰</div>
                    <div>
                        {!! $project->description !!}
                    </div>
                </div>
            </div>
        @endcomponent
    </div>
    <div class="col-sm-4 position-relative">
        <h3>Support This Project:</h3>
        @include('brainblocks::button',[
                  'destination'=>$project->nano_address,
                  'amount'=>\NanoUnits::convert('ticker','nano',$project->nano_goal),
                  'action'=>url($project->getPath().'/payment')
              ])
    </div>
</div>

@endsection

@section('scripts')
    @include('brainblocks::scripts')
@endsection
