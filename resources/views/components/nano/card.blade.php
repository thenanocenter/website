<div class="card nano-card my-3 image-mask">
    <a href="{{ $url }}" target="_blank" class="image-container image-mask-visible">
        <img class="card-img-top" src="{{ $imageURL }}" alt="{{ $title }}" />
    </a>
    <div class="card-body">
        <h4 class="card-title"><a href="{{ $url }}" target="_blank">{!! $title !!}</a>
            <div class="author"><small>{!! $author !!}</small></div>
        </h4>
        <p><a href="{{ $url }}" target="_blank" class="btn btn-primary btn-block">Read Article</a></p>
    </div>
</div>