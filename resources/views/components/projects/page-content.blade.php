<div class="row">
    <div class="col-sm-4">
        <img class="card-img-left flex-auto d-none d-lg-block" style="max-width: 250px;" alt="{{ $project->name }}" src="{{ asset('storage/'. $project->image_path ) }}">
    </div>
    <div class="col-sm-8">
        <div class="mb-1 text-muted">{{ $project->getNanoCurrent() }} / {{ $project->nano_goal }} ⋰·⋰</div>
        <div>
            {!! $project->description !!}
        </div>
    </div>
</div>