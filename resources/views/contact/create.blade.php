@extends('layouts.app')

@section('content')
 @include('components.contact.contact', [])
@endsection

@section('scripts')
    @include('components.recaptcha.scripts')
@endsection