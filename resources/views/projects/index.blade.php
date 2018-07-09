@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between">
        <div>
            <h1>Projects</h1>
        </div>
        <div>
            <a href="{{ url('/projects/proposal') }}"><small>Propose a project</small></a>
        </div>
    </div>


<div class="d-flex flex-wrap">
    @foreach($projects as $project)
        @include('components.projects.slider-cell',['project' => $project])
    @endforeach

</div>

@endsection
