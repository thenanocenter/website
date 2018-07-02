<h1 style="text-align: center">Contact Us</h1>
{!! Former::open_vertical('/contact')->method('POST') !!}
<div class="col-lg-12">
    <div class="col-sm-8 offset-sm-2">
        <div class="form-group">
            <input name="name" type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
        </div>
        <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
        </div>
    </div>
    <div class="col-sm-8 offset-sm-2">
        <div class="form-group">
            <textarea name="message" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
        </div>
    </div>
    <div class="col-sm-8 offset-sm-2">
    @include('components.recaptcha.widget')
    </div>
    <div class="col-sm-8 offset-sm-2">
        <div id="success"></div>
        <button type="submit" class="btn btn-light-blue btn-lg">Send Message</button>
    </div>
</div>
{!! Former::close() !!}