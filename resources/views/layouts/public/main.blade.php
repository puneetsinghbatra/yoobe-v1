<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/public.css') }}" rel="stylesheet">
</head>
<body class="background-gradient full-height">
    <div class="navbar-fixed">
        <nav class="background-transparent z-depth-0" role="navigation">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="{{ url('/') }}" title="{{ config('app.name', 'Laravel') }}" class="brand-logo padding-top-10"><img src="{{ url('images/logo.png') }}" /></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#">INFLUENCERS</a></li>
                        <li><a href="#">FANS</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">CONTACT</a></li>
                        @guest
                            <li><a href="{{ route('register') }}" class="btn waves-effect waves-light btn-dark-pink">Sign up</a></li>
                            <li><a href="{{ route('login') }}" class="btn waves-effect waves-light btn-dark-pink">Sign in</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                        
                    </ul>
                    <ul class="side-nav" id="nav-mobile">
                        <li><a href="#">INFLUENCERS</a></li>
                        <li><a href="#">FANS</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
            </div>
        </nav>
    </div>
    <section class="centered">
        <div class="center-align">
             @yield('content')
        </div>
    </section>
    <footer class="bottom">
        <div class="row">
            <div class="col s6 right-align text-white padding-top-10">&copy; Yoobe 2018</div>
            <div class="col s6 text-white padding-top-10">
                <i class="fa fa-twitter margin-h-5" aria-hidden="true"></i>
                <i class="fa fa-facebook margin-h-5" aria-hidden="true"></i>
                <i class="fa fa-instagram margin-h-5" aria-hidden="true"></i>
            </div>
        </div>
    </footer>

    <!-- Extra Scripts are here -->
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/materialize.min.js') }}"></script>
    <script src="{{ url('js/cb12bcc530.js') }}"></script>
    <script src="{{ url('js/init.js') }}"></script>
   <!--  <script src="{{ asset('js/app.js') }}"></script> -->
    
    <script>
    jQuery(document).ready(function($) {
        $('select').material_select();
    });
    $('select').material_select('destroy');
</script>
</body>

</html>