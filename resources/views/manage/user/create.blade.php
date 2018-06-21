@extends('layouts.app')

@section('content')

    <div class="container mx-auto mt-4">

        @include('components.breadcrumb',[
            'links' => [
                '/manage/user' => 'User',
                '/manage/user/create' => 'Create',
            ],
        ])

        @component('components.panel',['title'=>'New '.$baseTitleSingular])
            {!! Former::open_vertical($baseRoute)->method('POST') !!}
            @include('manage.user.partials.fields',['update'=>false])
            <button type="submit" class="btn btn-primary">Save</button>
            {!! Former::close() !!}
        @endcomponent

    </div>

@endsection
