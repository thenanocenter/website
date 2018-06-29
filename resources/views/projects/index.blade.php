@extends('layouts.app')

@section('content')
<h1>Projects</h1>

<div class="d-flex flex-wrap">
    @foreach($projects as $project)
        @include('components.projects.slider-cell',['project' => $project])
    @endforeach

</div>

@endsection
