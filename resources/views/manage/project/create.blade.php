@extends('layouts.app')

@section('content')

    <div class="container mx-auto mt-4">

        @include('components.breadcrumb',[
            'links' => [
                '/manage/project' => 'Project',
                '/manage/project/create' => 'Create',
            ],
        ])

        @component('components.panel',['title'=>'New '.$baseTitleSingular])
            {!! Former::open_vertical($baseRoute)->method('POST') !!}
            @include('manage.project.partials.fields',['update'=>false])
            <button type="submit" class="btn btn-primary">Save</button>
            {!! Former::close() !!}
        @endcomponent

    </div>

@endsection
