<div class="row">
    <div class="col-sm-8">
        {!! Former::text('title','Title') !!}
        {!! Former::text('slug','Slug')->help('For URL: (thenanocenter.org/article/[slug])') !!}
        {!! Former::text('author','Author')->help('For URL: (thenanocenter.org/article/[slug])') !!}
        {!! Former::text('external_url','External URL')->help('If this article should link elsewhere and not have it\'s own page') !!}
        {!! Former::textarea('body','Body') !!}
    </div>
    <div class="col-sm-4">
        @if(!empty($article) && !empty($article->image_path))
            <div class="mb-2"><img src="{{ asset('storage/'. $project->image_path ) }}" class="img-fluid" /></div>
        @endif
        {!! Former::file('image_file','Thumbnail Image') !!}
    </div>
</div>
