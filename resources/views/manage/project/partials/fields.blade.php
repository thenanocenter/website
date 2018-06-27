<div class="row">
    <div class="col-sm-8">
        {!! Former::text('name','Name') !!}
        {!! Former::text('slug','Slug')->help('For URL: (thenanocenter.org/project/[slug])') !!}
        {!! Former::textarea('description_short','Short Description') !!}
        {!! Former::textarea('description','Description') !!}
        <div class="row">
            <div class="col-sm-6">
                {!! Former::text('goal','Goal')->help('Be sure to add currency ie: $500 USD or 800 Nano') !!}
            </div>
            <div class="col-sm-6">
                {!! Former::select('progress_percentage','Progress')->options(\App\Options\PercentageInteger::get()) !!}
            </div>
        </div>
        {!! Former::text('nano_address','Nano Destination Address') !!}
    </div>
    <div class="col-sm-4">
        @if(!empty($project) && !empty($project->image_path))
            <div class="mb-2"><img src="{{ asset('storage/'. $project->image_path ) }}" class="img-fluid" /></div>
        @endif
        {!! Former::file('image_file','Thumbnail Image') !!}
    </div>
</div>
