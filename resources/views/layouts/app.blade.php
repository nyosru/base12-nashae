<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}


    {{-- <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">





    {{-- <meta charset="UTF-8"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    {{-- <meta name="description" content="{if isset($head.descr)}{$head.descr}{/if}" /> --}}
    {{-- <meta name="author" content="nyos.ru" /> --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="manifest" href="/img/site.webmanifest">
    {{-- <link rel="mask-icon" href="/img/safari-pinned-tab.svg" color="#5bbad5"> --}}
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <title>Народная Экономика</title>

    {{-- <script src="https://yastatic.net/jquery/3.3.1/jquery.min.js"></script> --}}
    {{-- <link href="{{ sd }}bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" /> --}}
    {{-- <link href="{{ sd }}bootstrap-3.3.7/css/bootstrap-theme.min.css" rel="stylesheet" /> --}}
    {{-- <link href="{{ sd }}css.css" rel="stylesheet" /> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet"> --}}
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    {{-- @if (!empty($user0)) --}}
    @if (!empty(Auth::user()))
        <meta name="user" content="{{ Auth::user()->id }}">
        <meta name="user-name" content="{{ Auth::user()->name }}">
        <meta name="user-avatar" content="{{ Auth::user()->avatar }}">
        <meta name="user2" content="{{ Auth::user()->socIdVk }}">
    @endif

    <meta name="referrer" content="strict-origin-when-cross-origin" />

    {{-- <style>
        body {
            margin: 0;
        }

    </style> --}}

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> --}}




</head>

<body>
    @if (1 == 2)
        {{ Auth::user()->socIdVk }}
        <br />
        11111
        <a href="{{ route('vk-enter') }}">войти вк</a>

        <br />
        @if (Auth::user())
            {{ Auth::user()->name }}
            <Br />
            {{ Auth::user()->id }}
            <br />
            <A href="{{ route('logout') }}">exit</a>
            {{-- <A href="{{ route('auth.logout') }}">exit</a> --}}
        @endif
    @endif

    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

        <main class="py-4"> --}}
        @yield('content')
        {{-- </main> --}}
    </div>
</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}?{{ date('ymdhis') }}" defer></script>
{{-- {{ date('ymdhis') }} --}}

</html>
