<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        @foreach($links as $linkURL => $linkTitle)
            @if (!$loop->last)
                <li class="breadcrumb-item"><a href="{{ $linkURL }}">{{ $linkTitle }}</a></li>
            @else
                <li class="breadcrumb-item">{{ $linkTitle }}</li>
            @endif
        @endforeach
    </ol>
</nav>