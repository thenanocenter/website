@extends('layouts.app-home')

@section('content')

    <div class="rounded pt-1 bg-grey-lightest">
        <div class="container-inner pb-5">
            <div class="row pt-5 pb-3">
                <div class="col-sm-9 text-center text-md-left">
                    <h2>What is NanoCenter?</h2>
                    <p class="text-grey">The Nano Center is a community of individuals with varying skillsets and competence areas from around the globe.
                        <br/>All with a common goal of making cryptocurrency an actual currency.</p>
                </div>
                <div class="col-sm-3 text-center text-md-right py-4">
                    <a href="https://discord.gg/yhBuXMm" target="_blank" class="btn btn-light-blue btn-lg">Join the Community</a>
                </div>
            </div>
            <hr/>
        </div>
    </div>

    <div class="container-inner">

        <div class="d-flex justify-content-center flex-column flex-md-row">
            <div class="flex-grow-1">
                <h2 class="text-center">Most Popular Community Projects</h2>
            </div>
            <div class="text-center"><a href="{{ url('/projects') }}">View All <span class="icon-brand pl-2"><?php echo file_get_contents(public_path('/img/arrow-right-white.svg')); ?></span></a></div>
        </div>

    </div>

    <div class="container-inner" style="min-height: 450px;">
        <div class="project-slider">
            <div class="project-slider__wrap">
                @foreach($projects as $project)
                    @include('components.projects.slider-cell',['project' => $project])
                @endforeach
            </div>
        </div>
    </div>

    <div class="container-inner">
        <div class="callout bg-blue px-lg-5 py-lg-5 py-4 px-2 rounded text-white">
            <div class="px-3 px-lg-4">
                <div class="text-center pt-3 pb-4"><span class="icon-white"><?php echo file_get_contents(public_path('/img/nano-icon-white.svg')); ?></span></div>
                <h3 class="text-center pb-2">What is Nano?</h3>
                <p class="text-center pb-4" style="opacity: .75">Launched in 2015 by Colin LeMahieu as RaiBlocks, Nano is a low-latency payment platform that requires minimal resources; making Nano ideal for peer-to-peer transactions</p>
                <hr/>
            </div>
            <div class="d-md-flex mx-lg--5">
                <div class="py-3 py-md-4 py-lg-5 px-3 px-lg-4">
                    <h3 class="h4">Instant Transactions</h3>
                    <p style="opacity: .75">Nano transactions happen immediately, so
                        it's a currency you can use every day for
                        purchases large or small.</p>
                </div>
                <div class="py-3 py-md-4 py-lg-5 px-3 px-lg-4">
                    <h3 class="h4">Zero Fees</h3>
                    <p style="opacity: .75">Pay for the purchase, not the privilege – zero fees on whatever you buy, from bus ticket to business class flight.</p>
                </div>
                <div class="py-3 py-md-4 py-lg-5 px-3 px-lg-4">
                    <h3 class="h4">Infinitely scalable</h3>
                    <p style="opacity: .75">Nano can process over 1000x more transactions per second than Bitcoin, so you'll never get stuck in a queue.</p>
                </div>
            </div>
        </div>

    </div>

@endsection
