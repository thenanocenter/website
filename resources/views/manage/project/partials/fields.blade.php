<div class="row">
    <div class="col-sm-8">
        {!! Former::text('name','Name') !!}
        {!! Former::text('slug','Slug')->help('For URL: (thenanocenter.org/project/[slug])') !!}
        {!! Former::textarea('description','Description') !!}
        {!! Former::text('nano_goal','Goal (In NANO)') !!}
        {!! Former::text('nano_address','Nano Destination Address') !!}
    </div>
    <div class="col-sm-4">
        @if(!empty($project) && !empty($project->image_path))
            <div class="mb-2"><img src="{{ asset('storage/'. $project->image_path ) }}" class="img-fluid" /></div>
        @endif
        {!! Former::file('image_file','Thumbnail Image') !!}
    </div>
</div>
