@extends('layouts.app')

@section('content')
<h1>Projects</h1>

<div class="projects">
    @foreach($projects as $project)
        @include('components.projects.card',['project' => $project])
    @endforeach

</div>

@endsection
