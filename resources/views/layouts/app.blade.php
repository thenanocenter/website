<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
</head>
<body>
    <div id="app">
        <div style="background-color: rgba(0,0,0,0.5);">
            @include('layouts.partials.navbar')
        </div>

        <main class="py-4 main-container">
            <div class="container">
                @include('layouts.notifications.notifications')
                @yield('content')
            </div>
        </main>

        @include('layouts.partials.footer')
    </div>
    @include('layouts.partials.scripts')
    @yield('scripts')
</body>
</html>
