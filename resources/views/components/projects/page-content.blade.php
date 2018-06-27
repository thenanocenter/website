<div class="project-page-content">
    @if(!empty($project->goal))
        <h5 class="mb-1 text-muted text-right">
            <strong>Goal:</strong> {{ $project->goal }}
            @if(!empty($project->progress_percentage))
                <em>({{ $project->progress_percentage }}% Funded)</em>
            @endif
        </h5>
    @endif
    <div class="project-page-description">
        {!! $project->description_html !!}
    </div>
</div>