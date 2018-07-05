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
                        <th>description_short</th>
                        <th>description</th>
                        <th>nano_goal</th>
                        <th>nano_address</th>
                        <th>links</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($proposals as $proposal)
                        <tr>
                            <td>{{ $proposal->title }}</td>
                            <td>{{ $proposal->email }}</td>
                            <td>{{ $proposal->description_short }}</td>
                            <td>{{ $proposal->description }}</td>
                            <td>{{ $proposal->nano_goal }}</td>
                            <td>{{ $proposal->nano_address }}</td>
                            <td>{{ $proposal->links }} </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            {!! $proposals->appends($_GET)->render() !!}


        @endcomponent

    </div>

@endsection
