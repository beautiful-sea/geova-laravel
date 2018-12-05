<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Main Font -->
    <script src="{{asset('js/js_template/webfontloader.min.js')}}"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });
    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/dist/css/bootstrap-reboot.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/dist/css/bootstrap-grid.css')}}">

    <!-- Main Styles CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fonts.min.css')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
<!--         <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     Left Side Of Navbar 
                    <ul class="navbar-nav mr-auto">

                    </ul>

                     Right Side Of Navbar
                    <ul class="navbar-nav ml-auto">
                        Authentication Links 
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
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
        </nav> -->   

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- JS Scripts -->
    <script src="{{asset('js/js_template/jquery-3.2.1.js')}}"></script>
    <script src="{{asset('js/js_template/jquery.appear.js')}}"></script>
    <script src="{{asset('js/js_template/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('js/js_template/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('js/js_template/jquery.matchHeight.js')}}"></script>
    <script src="{{asset('js/js_template/svgxuse.js')}}"></script>
    <script src="{{asset('js/js_template/imagesloaded.pkgd.js')}}"></script>
    <script src="{{asset('js/js_template/Headroom.js')}}"></script>
    <script src="{{asset('js/js_template/velocity.js')}}"></script>
    <script src="{{asset('js/js_template/ScrollMagic.js')}}"></script>
    <script src="{{asset('js/js_template/jquery.waypoints.js')}}"></script>
    <script src="{{asset('js/js_template/jquery.countTo.js')}}"></script>
    <script src="{{asset('js/js_template/popper.min.js')}}"></script>
    <script src="{{asset('js/js_template/material.min.js')}}"></script>
    <script src="{{asset('js/js_template/bootstrap-select.js')}}"></script>
    <script src="{{asset('js/js_template/smooth-scroll.js')}}"></script>
    <script src="{{asset('js/js_template/selectize.js')}}"></script>
    <script src="{{asset('js/js_template/swiper.jquery.js')}}"></script>
    <script src="{{asset('js/js_template/moment.js')}}"></script>
    <script src="{{asset('js/js_template/daterangepicker.js')}}"></script>
    <script src="{{asset('js/js_template/simplecalendar.js')}}"></script>
    <script src="{{asset('js/js_template/fullcalendar.js')}}"></script>
    <script src="{{asset('js/js_template/isotope.pkgd.js')}}"></script>
    <script src="{{asset('js/js_template/ajax-pagination.js')}}"></script>
    <script src="{{asset('js/js_template/Chart.js')}}"></script>
    <script src="{{asset('js/js_template/chartjs-plugin-deferred.js')}}"></script>
    <script src="{{asset('js/js_template/circle-progress.js')}}"></script>
    <script src="{{asset('js/js_template/loader.js')}}"></script>
    <script src="{{asset('js/js_template/run-chart.js')}}"></script>
    <script src="{{asset('js/js_template/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('js/js_template/jquery.gifplayer.js')}}"></script>
    <script src="{{asset('js/js_template/mediaelement-and-player.js')}}"></script>
    <script src="{{asset('js/js_template/mediaelement-playlist-plugin.min.js')}}"></script>

    <!-- <script src="{{asset('js/js_template/base-init.js')}}"></script> -->
    <script defer src="{{asset('fonts/fontawesome-all.js')}}"></script>

    <script src="{{asset('Bootstrap/dist/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/moment/moment.js')}}"></script>
    <script src="{{asset('js/moment/locale/pt-br.js')}}"></script>
</body>
</html>
