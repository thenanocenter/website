{!! Former::text('name','Name') !!}
{!! Former::text('email','Email')->required() !!}
@if(!$update)
    {!! Former::password('password_input','Password') !!}
@else
    {!! Former::password('password_input','Password')->help('Leave blank to keep existing') !!}
@endif
{!! Former::select('role','Role')->options(\App\Options\Role::get('---')) !!}