<div class="row">
    <div class="col-sm-4">
        <img class="card-img-left flex-auto d-none d-lg-block" style="max-width: 250px;" alt="{{ $project->name }}" src="{{ asset('storage/'. $project->image_path ) }}">
    </div>
    <div class="col-sm-8">
        @if(!empty($project->goal))
        <div class="mb-1 text-muted text-right"><strong>Goal:</strong> {{ $project->goal }} @if(!empty($project->progress_percentage))<em>({{ $project->progress_percentage }}% Funded)</em>@endif</div>
        @endif
        <div>
            {!! $project->description !!}
        </div>
    </div>
</div>