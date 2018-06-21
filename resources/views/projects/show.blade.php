@extends('layouts.app')

@section('content')
<h1>Projects</h1>

<div class="row">
    <div class="col-sm-8">
        @component('components.panel',['title'=>$project->name])
            <div class="row">
                <div class="col-sm-4">
                    <img class="card-img-left flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16408240433%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16408240433%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22130.7%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                </div>
                <div class="col-sm-8">
                    <div class="mb-1 text-muted">{{ $project->getNanoCurrent() }} / {{ $project->nano_goal }} ⋰·⋰</div>
                    <div>
                        {!! $project->description !!}
                    </div>
                </div>
            </div>
        @endcomponent
    </div>
    <div class="col-sm-4 position-relative">
        <h3>Support This Project:</h3>
        @include('brainblocks::button',[
                  'destination'=>$project->nano_address,
                  'amount'=>\NanoUnits::convert('ticker','nano',$project->nano_goal),
                  'action'=>url($project->getPath().'/payment')
              ])
    </div>
</div>

@endsection

@section('scripts')
    @include('brainblocks::scripts')
@endsection
