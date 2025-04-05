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
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/css/theme.css"') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        @include('layouts.header')

        <div id="page-content" class="page-content">
            <div class="banner">
                <div class="jumbotron jumbotron-video text-center bg-dark mb-0 rounded-0">
                    <video width="100%" preload="auto" loop autoplay muted>
                        <source src='assets/media/explore.mp4' type='video/mp4' />
                        <source src='assets/media/explore.webm' type='video/webm' />
                    </video>
                    <div class="container">
                        <h1 class="pt-5">
                            Save time and leave the<br>
                            groceries to us.
                        </h1>
                        <p class="lead">
                            Always Fresh Everyday.
                        </p>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card border-0 text-center">
                                    <div class="card-icon">
                                        <div class="card-icon-i">
                                            <i class="fa fa-shopping-basket"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            Buy
                                        </h4>
                                        <p class="card-text">
                                            Simply click-to-buy on the product you want and submit your order when
                                            you're done.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-0 text-center">
                                    <div class="card-icon">
                                        <div class="card-icon-i">
                                            <i class="fas fa-leaf"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            Harvest
                                        </h4>
                                        <p class="card-text">
                                            Our team ensures the produce quality is up to our standard and delivers to
                                            your door within 24 hours of harvest day.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-0 text-center">
                                    <div class="card-icon">
                                        <div class="card-icon-i">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            Delivery
                                        </h4>
                                        <p class="card-text">
                                            Farmers receive your orders two days in advance so they can prepare for
                                            harvest exactly as your orders – no wasted produce.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <main class="py-4">
                @auth
                    @yield('content')

                @endauth
            </main>

        </div>

        @include('layouts.footer')

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
