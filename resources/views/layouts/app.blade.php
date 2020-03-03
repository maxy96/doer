<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-orange shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="/servicios">Servicios</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="#">Ofrecidos</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="#">Empresas</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="#">Emprendedor</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="#">Comodin</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="btn btn-dark mx-2 my-1" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-warning mx-2 my-1" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        <main>
            @yield('content')
        </main>
    
         <footer>
            <div class="container">
            <div class="container d-flex justify-content-center img-footer">
              <img src="{{asset('logo-doer-blanco.png')}}" alt="" style="width: 200px; height: 100px;">
            </div>
            <div class="row container">
              <div class="col-4">
                <ul style="text-align: start;">
                  <li>Sobre Nosotros</li>
                  <li>Sobre TuDoer</li>
                </ul>
              </div>
              <div class="col-4">
                <ul style="text-align: center;">
                  <li>texto</li>
                  <li>texto</li>
                </ul>
              </div>
              <div class="col-4">
                <ul style="text-align: end;">
                  <li>texto</li>
                  <li>texto</li>
                </ul>
              </div>
            </div>
          </div>
         </footer>
</body>
</html>
