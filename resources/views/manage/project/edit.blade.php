@extends('layouts.app')

@section('content')

    <div class="container mx-auto mt-4">

        @include('components.breadcrumb',[
            'links' => [
                '/manage/project' => 'Project',
                '/manage/project/'.$project->id.'/edit' => $project->name,
                '' => 'Edit',
            ],
        ])

        @component('components.panel',['title'=>'Update '.$baseTitleSingular])
            @slot('action')
                @include('components.delete-button',['url'=>url($baseRoute.'/'.$project->id)])
            @endslot
            {!! Former::open_vertical($baseRoute.'/'.$project->id)->method('PATCH') !!}
            {!! Former::populate($project) !!}
            @include('manage.project.partials.fields',['update'=>true])
            <button type="submit" class="btn btn-primary">Save</button>
            {!! Former::close() !!}
        @endcomponent

    </div>

@endsection
