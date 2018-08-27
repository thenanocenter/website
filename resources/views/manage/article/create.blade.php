@extends('layouts.app')

@section('content')

    <div class="container mx-auto mt-4">

        @include('components.breadcrumb',[
            'links' => [
                '/manage/article' => 'Article',
                '/manage/article/create' => 'Create',
            ],
        ])

        @component('components.panel',['title'=>'New '.$baseTitleSingular])
            {!! Former::open_vertical_for_files($baseRoute)->method('POST') !!}
            @include('manage.article.partials.fields',['update'=>false])
            <button type="submit" class="btn btn-primary">Save</button>
            {!! Former::close() !!}
        @endcomponent

    </div>

@endsection
