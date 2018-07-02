<div class="project-slider__cell">
    <div class="project-card">
        @if($project->status == 'completed')
            <span class="badge badge-success">Completed!</span>
        @endif
            @if($project->status == 'funded')
                <span class="badge badge-success">Funded!</span>
            @endif
        <a href="{{ url($project->getPath()) }}" class="project-card__background" style="background-image: url('{{ asset('storage/'. $project->image_path ) }}');"></a>
        <div class="project-card__content">
            <h4><a href="{{ url($project->getPath()) }}">{!! $project->name !!}</a></h4>
            <p class="card-text mb-auto">
                {!! $project->description_short !!}
            </p>
            <div class="project-card__footer">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{ $project->progress_percentage }}%" aria-valuenow="{{ $project->progress_percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="project-card__support">
                    @if(!empty($project->goal))
                    <div class="project-card__support__numbers">
                        <span class="project-card__support__current">
                            {{ $project->goal }}
                        </span>
                    </div>
                    @endif
                    <a href="{{ url($project->getPath()) }}">
                        @if($project->status == 'completed')
                            Read more
                        @else
                            Support this project
                        @endif
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>