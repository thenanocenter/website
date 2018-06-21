@extends('layouts.app')

@section('content')

    <div class="container mx-auto mt-4">

        @component('components.panel',['title'=>'Manage Users'])
            @slot('action')
                <a href="{{ url($baseRoute.'/create') }}" class="btn btn-primary"><span
                            class="glyphicon glyphicon-plus"></span> Create</a>
            @endslot

            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td class="text-right">
                            <a href="{{ url($baseRoute.'/'.$user->id.'/edit') }}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {!! $users->appends($_GET)->render() !!}

        @endcomponent

    </div>

@endsection
