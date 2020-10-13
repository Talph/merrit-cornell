<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Merrit Cornell') }}</title>

        <!-- favicon -->
    <link rel="icon" href="{{ URL::asset('images/favi.ico') }}" type="image/x-icon"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" async></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm sticky-top py-3 bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="images/svg/logo.svg" width="220" alt="Merrit Cornell">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        {{-- Menu Links --}}
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('welcome') }}">{{ __('Home') }}</a>
                             </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('about') }}">{{ __('Who we are') }}</a>
                             </li>
                            <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('services') }}">{{ __('What we do') }}</a>
                             </li>
                             <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('contact-us') }}">{{ __('Contact us') }}</a>
                             </li>
                        <!-- Authentication Links -->
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-0">
            @yield('content')
        </main>
    </div>
</body>
</html>
