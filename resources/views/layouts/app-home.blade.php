<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
</head>
<body>
    <div id="app">

        <div class="banner-navbar-container">
            @include('layouts.partials.navbar')
            <div class="container">
                <div class="banner-container container-inner d-flex justify-content-between text-white">
                    <div class="w-75">
                        <div class="pb-3"><span class="icon-white"><?php echo file_get_contents(public_path('/img/nano-icon-white.svg')); ?></span></div>
                        <h1 class="w-75">The digital currency for
                            the real world</h1>
                        <p>The fast, environmentally friendly and free way to pay for everything.</p>
                    </div>
                    <div class="text-center pt-5">
                        <button class="btn-circle mb-2" data-toggle="modal" data-target="#videoModal">
                            <span><?php echo file_get_contents(public_path('/img/triangle-right-white.svg')); ?></span>
                        </button>
                        <button class="text-white btn btn-link" data-toggle="modal" data-target="#videoModal">What is Nano?</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class='embed-container'>
                            <iframe data-autoplay-src="https://www.youtube.com/embed/ZFi2KAEQ9gI?autoplay=1&rel=0" frameborder='0' allowfullscreen allow="autoplay; encrypted-media"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main class="py-4 main-container" style="margin-top:-100px;">
            <div class="container">
                @yield('content')
            </div>
        </main>

        @include('layouts.partials.footer')
    </div>
    @include('layouts.partials.scripts')
</body>
</html>
