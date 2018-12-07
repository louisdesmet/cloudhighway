<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">  
            <nav class="nav">
                <div class="container navContainer">
                    <a class="logo" href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}"></a>                  
                    <div class="slogan">
                        <p class="slogan1">Cloudhighway <span>Marketplace</span></p>
                        <p class="slogan2">your gateway to the cloud</p>
                    </div> 
                    @if (Auth::guest())
                    <div class="authLinks">
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </div>                   
                    @else
                    <div class="dropdown">
                        <button class="dropbtn">{{ Auth::user()->name }} <span class="caret"></span></button>
                        <div class="dropdown-content">
                            <a href="">Mijn gegevens</a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                        </div>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    @endif
                </div>             
            </nav>                 
            @yield('content')
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
