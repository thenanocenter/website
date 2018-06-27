@extends('layouts.app')

@section('content')

    <div class="container mx-auto mt-4">

        @component('components.panel',['title'=>'Manage Projects'])
            @slot('action')
                <a href="{{ url($baseRoute.'/create') }}" class="btn btn-primary"><span
                            class="glyphicon glyphicon-plus"></span> Create</a>
            @endslot

            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Goal</th>
                    <th>Address</th>
                    <th>Payments</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->getNanoCurrent() }}/{{ $project->nano_goal }}</td>
                        <td>{{ $project->nano_address }}</td>
                        <td><a href="{{ url('/manage/project/'.$project->id.'/payment') }}">{{ $project->successfulPayments->count() }} ({{ $project->payments_total_nano }} ⋰·⋰)</a></td>
                        <td class="text-right">
                            <a href="{{ url($baseRoute.'/'.$project->id.'/edit') }}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {!! $projects->appends($_GET)->render() !!}

        @endcomponent

    </div>

@endsection
