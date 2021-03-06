@extends('layouts.app')

@section('content')
<h1>{!! $proposal->title !!}</h1>
<p><a href="{{ $proposal->written_proposal_url }}" class="btn btn-primary" target="_blank">View Written Proposal</a></p>
<p>
	{{ nl2br($proposal->description) }}
</p>
<hr/>
<div class="row">
	<div class="col-sm-2"><strong>Email</strong></div>
	<div class="col-sm-8">{{$proposal->email}}</div>
</div>
<div class="row">
	<div class="col-sm-2"><strong>Goal</strong></div>
	<div class="col-sm-8">{{$proposal->goal}}</div>
</div>
@if(!empty($proposal->links))
	<h2>Additional Links</h2>
	{{$proposal->links}}
@endif
<br>
<div class="text-right">
	<p><strong>Status: </strong> {{ $proposal->status }}</p>
	@include('manage.proposal.partials.status-actions')
</div>
	<hr/>
	<div class="text-right" style="margin-top:100px;">
		@include('components.delete-button',['url'=>'/manage/proposal/'.$proposal->id])
	</div>
@endsection
