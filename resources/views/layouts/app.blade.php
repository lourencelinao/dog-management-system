<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Paw Management - @yield('title')</title> <!-- must be changed dynamically depending on the page -->

    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Fa Fa Icon CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- dog-medical CDN for data tables -->
    @stack('css')

</head>
<body class="bg-light" style="margin-bottom: 65px;"> <!-- class="sb-nav-fixed" -->
    <div class="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm" id="navbar_light1">
            <a href="/" class="navbar-brand">Paw Management</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav" id="nav_pill">
                    <li class="nav-item {{Request::is('dashboard') ? 'active' : ''}}">
                        <a href="/dashboard" class="nav-link text-dark">Dashboard
                        </a>
                        <div class="underline"></div>
                    </li>
                    <li class="nav-item {{Request::is('dogs*') ? 'active' : ''}}">
                        <a href="/dogs" class="nav-link text-dark">Dogs</a>
                        <div class="underline"></div>
                    </li>
                    <li class="nav-item {{Request::is('applications*') ? 'active' : ''}}">
                        <a href="/applications" class="nav-link text-dark">Applications</a>
                        <div class="underline"></div>
                    </li>
                    <li class="nav-item {{Request::is('people*') ? 'active' : ''}}">
                        <a href="/people" class="nav-link text-dark">People</a>
                        <div class="underline"></div>
                    </li>       
                </ul>

                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Welcome, {{ Auth::user()->firstname }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <!-- shelter settings should be available when the user is an admin -->
                                <a class="dropdown-item" href="#">Shelter Settings</a>
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>                              
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
        <div id="layoutSidenav_content">
            <main class="">
                @yield('content')
            </main>
        </div>
    </div>
        
        <!-- custom -->
        <script src="{{ asset('js/custom.js') }}" ></script>
        @stack('scripts')
    </div>
</body>
</html>
