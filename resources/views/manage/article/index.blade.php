@extends('layouts.app')

@section('content')

    <div class="container mx-auto mt-4">

        @component('components.panel',['title'=>'Manage Articles'])
            @slot('action')
                <a href="{{ url($baseRoute.'/create') }}" class="btn btn-primary"><span
                            class="glyphicon glyphicon-plus"></span> Create</a>
            @endslot
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td><a href="{{ url($article->getPath()) }}" target="_blank">{{ $article->title }}</a></td>
                            <td>{{ $article->author }}</td>
                            <td class="text-right">
                                <a href="{{ url($baseRoute.'/'.$article->id.'/edit') }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


            {!! $articles->appends($_GET)->render() !!}

        @endcomponent

    </div>

@endsection
