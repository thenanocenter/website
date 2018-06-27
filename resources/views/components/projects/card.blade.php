<div class="card flex-md-row mb-4 box-shadow h-md-250">
    <a href="{{ url($project->getPath()) }}">
        <img class="card-img-left flex-auto d-none d-lg-block" style="max-width: 250px;" alt="{{ $project->name }}" src="{{ asset('storage/'. $project->image_path ) }}">
    </a>
    <div class="card-body d-flex flex-column align-items-start">
        <h3 class="mb-0">
            <a class="text-dark" href="{{ url($project->getPath()) }}">{!! $project->name !!}</a>
        </h3>
        @if(!empty($project->goal))
            <div class="mb-1 text-muted text-right"><strong>Goal:</strong> {{ $project->goal }} @if(!empty($project->progress_percentage))<em>({{ $project->progress_percentage }}% Funded)</em>@endif</div>
        @endif
        <p class="card-text mb-auto">
            {!! $project->description_short !!}
        </p>
        <a href="{{ url($project->getPath()) }}" class="btn btn-primary">Support this Project!</a>
    </div>
</div>