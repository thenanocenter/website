@extends('layouts.app')

@section('content')
<h1>{!! $proposal->title !!}</h1>
<br>
<div class="row">
	<div class="col-sm-2"><b>Email</b></div>
	<div class="col-sm-8">{{$proposal->email}}</div>
</div>
<div class="row">
	<div class="col-sm-2"><b>Short Description</b></div>
	<div class="col-sm-8">{{$proposal->description_short}}</div>
</div>
<div class="row">
	<div class="col-sm-2"><b>Detailed Description</b></div>
	<div class="col-sm-8">{{$proposal->description}}</div>
</div>
<div class="row">
	<div class="col-sm-2"><b>Nano goal</b></div>
	<div class="col-sm-8">{{$proposal->nano_goal}}</div>
</div>
<div class="row">
	<div class="col-sm-2"><b>Nano address</b></div>
	<div class="col-sm-8">{{$proposal->nano_address}}</div>
</div>
@if(!empty($proposal->links))
<div class="row">
	<div class="col-sm-2"><b>links</b></div>
	<div class="col-sm-8">{{$proposal->links}}</div>
</div>
@endif
<br>
<div class="row">
    <div class="col-sm-10 text-right">
        <a href="{{ url($baseRoute.'/'.$proposal->uuid) }}"  class="btn btn-danger">Deny</a>
        <a href=href="{{ url($baseRoute.'/'.$proposal->uuid) }}"  class="btn btn-primary">Approve</a>
    </div>
</div>
@endsection
