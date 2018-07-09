@extends('layouts.app')

@section('content')

    <div class="container mx-auto mt-4">

        @component('components.panel',['title'=>'Review Proposals'])
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Contact Email</th>
                        <th>Status</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($proposals as $proposal)
                        <tr>
                            <td><a href="{{ url($baseRoute.'/'.$proposal->uuid) }}">{{ $proposal->title }}</a></td>
                            <td>{{ $proposal->email }}</td>
                            <td>{{ $proposal->status }}</td>
                            <td class="text-right">
                                @include('manage.proposal.partials.status-actions')
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            {!! $proposals->appends($_GET)->render() !!}


        @endcomponent

    </div>

@endsection
