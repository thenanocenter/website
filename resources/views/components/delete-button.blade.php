<?php
if(empty($slot)){
    $slot='<i class="fa fa-trash" aria-hidden="true"></i> Delete';
}
if(empty($message)){
    $message = 'Are you sure?';
}
?>
<confirmation-form action="{{ $url }}" method="POST" message="{{ $message }}">
    <input type="hidden" name="_method" value="DELETE" />
    <button type="submit" class="btn btn-danger btn-xs" rel="delete-button">{!! $slot !!}</button>
    {{ csrf_field() }}
</confirmation-form>