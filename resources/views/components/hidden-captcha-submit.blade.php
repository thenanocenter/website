<?php
if(empty($id)){
    $id = 'hiddenCaptchaForm';
}
?>
<div class="form-group">

    <button class="btn btn-primary g-recaptcha"
            data-sitekey="{{ config('recaptcha.public_key') }}"
            data-callback="submitHiddenCaptchaForm">
        {{ $slot }}
    </button>

    @if (isset($errors) && $errors->has('g-recaptcha-response'))
        <div class="help-block alert alert-danger">
            <ul class="error-list">
                @foreach ($errors->get('g-recaptcha-response') as $message)
                    <li><strong class="text-danger">{!! $message !!}</strong></li>
                @endforeach
            </ul>
        </div>
    @endif

</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    function submitHiddenCaptchaForm(token) {
        document.getElementById("{{ $id }}").submit();
    }
</script>