@extends('layouts.app')

@section('content')

    <div class="container mx-auto mt-4">

        @component('components.panel',['title'=>'Manage Projects'])
            @slot('action')
                <a href="{{ url($baseRoute.'/create') }}" class="btn btn-primary"><span
                            class="glyphicon glyphicon-plus"></span> Create</a>
            @endslot
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Goal</th>
                        <th>Address</th>
                        <th>Payments</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $project)
                        <tr>
                            <td><a href="{{ url($project->getPath()) }}" target="_blank">{{ $project->name }}</a></td>
                            <td>{{ $project->status }}</td>
                            <td>{{ $project->goal }} @if(!empty($project->progress_percentage))({{ $project->progress_percentage }}%)@endif</td>
                            <td style="word-wrap: break-word;">{{ $project->nano_address }}</td>
                            <td><a href="{{ url('/manage/project/'.$project->id.'/payment') }}">{{ $project->successfulPayments->count() }} ({{ $project->payments_total_nano }} ⋰·⋰)</a></td>
                            <td class="text-right">
                                <a href="{{ url($baseRoute.'/'.$project->id.'/edit') }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


            {!! $projects->appends($_GET)->render() !!}

        @endcomponent

    </div>

@endsection
