<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ambacht') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap
        CSS only -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="/js/bootstrap.js"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Ambacht') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('markets') }}">{{ __('Markets') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products') }}">{{ __('Products') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categories') }}">{{ __('Categories') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profiles') }}">{{ __('Profiles') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->usertype == 'admin')
                                    <a class="dropdown-item" href="{{ route('adminPanel') }}">Admin panel</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
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
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<footer class="d-flex mt-5 h-10 text-center text-white bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

        <main class="px-3">
        <h1>Ambacht</h1>
        <p class="lead">Ambachtelijkheden en allerlei andere baksels.</p>
            <div class="row">
              <div class="col-3 p-3">
                  <h3>Voor de boeren</h3>
                <p><a href="https://ambacht.online/registreer" class="text-white">Aanmelden als boer</a></p>
                <p><a href="https://ambacht.online/inloggen" class="text-white">Inloggen als boer</a></p>
              </div>
              <div class="col-3 p-3">
                  <h3>Voor de consumenten</h3>
                  <p><a href="https://ambacht.online/producten" class="text-white">Bekijk het ruime assortiment</a></p>
                  <p><a href="https://ambacht.online/markten" class="text-white">Neem een kijkje op de digitale marktplaats.</a></p>
                  <p><a href="https://ambacht.online/profielen" class="text-white">Bekijk onze deelnemende boeren.</a></p>
                  <p><a href="https://ambacht.online/categorieen" class="text-white">Zoek in de categorieen.</a></p>
              </div>
              <div class="col-3 p-3">
                <h3>Over ons</h3>
                <p><a href="https://ambacht.online/ons-verhaal" class="text-white">Hoe het allemaal begon</a></p>
                <p><a href="https://ambacht.online/ons-missie" class="text-white">Onze missie</a></p>
              </div>
            <div class="col-3 p-3">
                <h3>Ook belangrijk:</h3>
                <p><a href="https://ambacht.online/informatie" class="text-white">Informatie</a></p>
                <p><a href="https://ambacht.online/voorwaarden" class="text-white">Algemene voorwaarden</a></p>
                <p><a href="https://ambacht.online/privacy" class="text-white">Privacy voorwaarden</a></p>
            </div>
            </div>
        </main>

        <footer class="mt-auto text-white-50">
        <p>Website <a href="https://ambacht.online/" class="text-white">Ambacht</a>, gemaakt door <a href="https://ambacht.online/credits" class="text-white">mensen.</a>.</p>
        </footer>
    </div>

        </footer>
    </div>

</html>
