<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/fonts/sb-bistro/sb-bistro.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fonts/font-awesome/font-awesome.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" media="all"
        href="{{ asset('assets/packages/o2system-ui/o2system-ui.css') }}">
    <link rel="stylesheet" type="text/css" media="all"
        href="{{ asset('assets/packages/owl-carousel/owl-carousel.css') }}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/cloudzoom/cloudzoom.css') }}">
    <link rel="stylesheet" type="text/css" media="all"
        href="{{ asset('assets/packages/thumbelina/thumbelina.css') }}">
    <link rel="stylesheet" type="text/css" media="all"
        href="{{ asset('assets/packages/bootstrap-touchspin/bootstrap-touchspin.css') }}">
    <link rel="stylesheet" type="text/css" media="all"
        href="{{ asset('assets/css/theme.css"') }}>

    <!-- Fonts -->
    <link rel="dns-prefetch"
        href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-migrate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/packages/bootstrap/libraries/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/packages/bootstrap/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/packages/o2system-ui/o2system-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/packages/owl-carousel/owl-carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/packages/cloudzoom/cloudzoom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/packages/thumbelina/thumbelina.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/packages/bootstrap-touchspin/bootstrap-touchspin.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>
