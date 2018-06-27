@extends('layouts.app')

@section('content')
<h1>{!! $project->name !!}</h1>

<div class="row">
    <div class="col-sm-8">
        @include('components.projects.page-content',['project'=>$project])
    </div>
    <div class="col-sm-4 position-relative">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Support This Project:</h4>
            </div>
            <div class="card-body">
                @if(!empty($payment->name) || !empty($payment->email))
                    <p><strong>Payment From:</strong>
                        @if(!empty($payment->name)) {{ $payment->name }} @endif
                        @if(!empty($payment->email)) &lt;{{ $payment->email }}&gt; @endif
                    </p>
                @endif
                @if($payment->success)
                    <p class="text-success"><strong>Payment Successful!</strong></p>
                    <p><small><a href="{{ $payment->getBlockURL() }}" target="_blank">{{ $payment->send_block }}</a></small></p>
                    @else
                @include('brainblocks::button',[
                  'destination'=>$project->nano_address,
                  'amount'=>$payment->getBrainblocksAmount(),
                  'currency'=>$payment->getBrainblocksCurrency(),
                  'action'=>url($payment->getPath())
              ])
                    @endif
            </div>
        </div>

    </div>
</div>

@endsection

@section('scripts')
    @include('brainblocks::scripts')
@endsection
