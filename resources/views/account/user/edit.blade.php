@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-4">
        @component('components.panel',['title'=>'Account - User'])
            {!! Former::open_vertical('/account/user')->method('PATCH') !!}
            {!! Former::populate($user) !!}
            {!! Former::text('name','Name') !!}
            {!! Former::text('email','Email Address') !!}
            {!! Former::password('password_input','Password')->help('Leave blank to keep existing password') !!}
            <button type="submit" class="btn btn-primary">Save</button>
            {!! Former::close() !!}
        @endcomponent
    </div>
@endsection
