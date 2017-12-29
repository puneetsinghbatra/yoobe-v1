<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="{{ url('css/materialize.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/common.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">    
    <link rel="stylesheet" type="text/css" href="{{ url('css/normalize.css') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    
</head>

<body>
    <div class="navbar-fixed">
        <nav class="background-pink" role="navigation">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo padding-top-10"><img src="{{ url('images/logo.png') }}" /></a>
                    <ul class="right hide-on-med-and-down menu-item">
                        <li><a href="{{ url('/influencer') }}">INFLUENCERS</a></li>
                        <li><a href="#">FANS</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">BLOG</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <li><a class="margin-top-15" id="trigger-overlay"><i class="small material-icons line-height-36">search</i></a></li>
                        <li>
                            <a href="{{ route('glogin') }}" class="btn waves-effect waves-light btn-dark-pink">Sign in</a>                               
                        </li>
                    </ul>
                    <ul class="side-nav" id="nav-mobile">
                        <li><a href="{{ url('/influencer') }}">INFLUENCERS</a></li>
                        <li><a href="#">FANS</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">BLOG</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
                <div class="overlay overlay-hugeinc">
                    <button type="button" class="overlay-close">Close</button>
                    <div class="centered">
                        <div class="center-align">
                            <div class="row">
                                <div class="input-field col offset-m3 m6 offset-s2 s8">
                                  <input type="text" class="custom-search-field" placeholder="What are you looking for...">
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    