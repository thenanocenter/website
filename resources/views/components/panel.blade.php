<?php
if (!isset($headerTextColorClass)) {
    $headerTextColorClass = '';
}
if (!isset($headerTextBGClass)) {
    $headerTextBGClass = '';
}
if (!isset($additionalClasses)) {
    $additionalClasses = '';
}
if (!isset($additionalBodyClasses)) {
    $additionalBodyClasses = '';
}
if (!isset($bodyClass)) {
    $bodyClass = 'card-body';
}
?>

<div class="card {{ $additionalClasses }}">
    @if(isset($title))
        <div class="card-header d-flex justify-content-between {{ $headerTextColorClass }} {{ $headerTextBGClass }}">
            <h5 class="card-title">{!! $title !!}</h5>
            @if(isset($action))
                <div class="card-heading-action">
                    {!! $action !!}
                </div>
            @endif
        </div>
    @endif
    @if(!empty((string) $slot))
        <div class="{{ $bodyClass }} {{ $additionalBodyClasses }}">
            {{ $slot }}
        </div>
    @endif
</div>