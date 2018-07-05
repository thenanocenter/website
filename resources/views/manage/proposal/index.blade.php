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
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($proposals as $proposal)
                        <tr>
                            <td>{{ $proposal->title }}</td>
                            <td>{{ $proposal->email }}</td>
                            <td class="text-center">
                                <a href="{{ url($baseRoute.'/'.$proposal->uuid.'/deny') }}"  class="btn btn-danger">Deny</a>
                                <a href="{{ url($baseRoute.'/'.$proposal->uuid) }}" class="btn btn-info">Review</a>
                                <a href=href="{{ url($baseRoute.'/'.$proposal->uuid.'/approve') }}"  class="btn btn-primary">Approve</a>
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
