<div class="project-slider__cell">
    <div class="project-card">
        <a href="{{ url($project->getPath()) }}" class="project-card__background" style="background-image: url('{{ asset('storage/'. $project->image_path ) }}');"></a>
        <div class="project-card__content">
            <h4><a href="{{ url($project->getPath()) }}">{!! $project->name !!}</a></h4>
            <p class="card-text mb-auto">
                {!! $project->description_short !!}
            </p>
            <div class="project-card__footer">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{ $project->getNanoGoalPercent() }}%" aria-valuenow="{{ $project->getNanoGoalPercent() }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="project-card__support">
                    <div class="project-card__support__numbers">
                        <span class="project-card__support__current">{{ $project->getNanoCurrent() }}</span>/{{ $project->nano_goal }}
                    </div>
                    <a href="{{ url($project->getPath()) }}">Support this project</a>
                </div>
            </div>
        </div>
    </div>
</div>