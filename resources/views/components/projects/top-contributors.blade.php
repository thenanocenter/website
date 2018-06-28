@if(!empty($project->getTopContributorsLine()))
    <p class="py-2"><small><strong>Top Contributors: </strong> {!! $project->getTopContributorsLine() !!}</small></p>
@endif