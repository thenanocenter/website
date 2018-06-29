@extends('layouts.app')

@section('content')

    <div class="container mx-auto mt-4">

        @component('components.panel',['title'=>'Payments to '.$project->name])

            <p><strong>{{ $project->successfulPayments->count() }} Payments ({{ $project->payments_total_nano }} ⋰·⋰)</strong></p>

            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>From</th>
                    <th>Amount</th>
                    <th>Block</th>
                </tr>
                </thead>
                <tbody>
                @foreach($payments as $payment)
                    <tr>
                        <td>{{ $payment->created_at->format('m/d/Y g:ia') }}</td>
                        <td>{{ $payment->name }} @if(!empty($payment->email)) &lt;{{ $payment->email }}&gt; @endif</td>
                        <td>{{ \NanoUnits::convert('nano','ticker',$payment->amount_rai) }}</td>
                        <td>
                            <div><small><a href="{{ $payment->getBlockURL() }}" target="_blank">{{ $payment->send_block }}</a></small></div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        @endcomponent

    </div>

@endsection
