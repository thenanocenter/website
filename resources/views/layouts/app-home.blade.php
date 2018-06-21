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
                        <a href="#" class="btn-circle mb-2">
                            <span><?php echo file_get_contents(public_path('/img/triangle-right-white.svg')); ?></span>
                        </a>
                        <a href="#" class="text-white">What is Nano?</a>
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
