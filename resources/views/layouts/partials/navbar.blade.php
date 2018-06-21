
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
            <div class="container-inner d-flex justify-content-between w-100">
                <a class="navbar-brand align-self-center" href="{{ url('/') }}">
                    <?php echo file_get_contents(public_path('/img/icon-white.svg')); ?>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-flex justify-content-center flex-grow-1" id="navbarSupportedContent">

                    <ul class="navbar-nav flex-grow-1 justify-content-center">
                        @include('layouts.partials.nav-items-center')
                    </ul>

                    <ul class="navbar-nav navbar-nav-right justify-content-end">
                        @include('layouts.partials.nav-items-right')
                    </ul>

                    @auth
                    <div class="navbar-nav navbar-admin">
                        @include('layouts.partials.nav-items-admin')
                    </div>
                    @endauth

                </div>
            </div>
        </div>
    </nav>

