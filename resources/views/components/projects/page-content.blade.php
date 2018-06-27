<div class="project-page-content">
    @if(!empty($project->goal))
        <div class="mb-1 text-muted text-right">
            <strong>Goal:</strong> {{ $project->goal }}
            @if(!empty($project->progress_percentage))
                <em>({{ $project->progress_percentage }}% Funded)</em>
            @endif
        </div>
    @endif
    <div class="project-page-description">
        {!! $project->description_html !!}
    </div>
</div>