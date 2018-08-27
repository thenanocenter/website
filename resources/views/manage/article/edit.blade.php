@extends('layouts.app')

@section('content')

    <div class="container mx-auto mt-4">

        @include('components.breadcrumb',[
            'links' => [
                '/manage/article' => 'Article',
                '/manage/article/'.$article->id.'/edit' => $article->name,
                '' => 'Edit',
            ],
        ])

        @component('components.panel',['title'=>'Update '.$baseTitleSingular])
            @slot('action')
                @include('components.delete-button',['url'=>url($baseRoute.'/'.$article->id)])
            @endslot
            {!! Former::open_vertical_for_files($baseRoute.'/'.$article->id)->method('PATCH') !!}
            {!! Former::populate($article) !!}
            @include('manage.article.partials.fields',['update'=>true])
            <button type="submit" class="btn btn-primary">Save</button>
            {!! Former::close() !!}
        @endcomponent

    </div>

@endsection
