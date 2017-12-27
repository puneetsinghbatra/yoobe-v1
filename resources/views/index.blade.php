<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="{{ url('css/materialize.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/common.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class="background-gradient full-height">
    <div class="navbar-fixed">
        <nav class="background-transparent z-depth-0" role="navigation">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo padding-top-10"><img src="{{ url('images/logo.png') }}" /></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#">INFLUENCERS</a></li>
                        <li><a href="#">FANS</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <li><a class="btn waves-effect waves-light btn-dark-pink">Sign up</a></li>
                        <li><a class="btn waves-effect waves-light btn-dark-pink">Sign in</a></li>
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
            <h3 class="text-white">Sync your social network profile</h3>
            <h5 class="text-white font-size-22 font-weight-300">YouTube, Instagram, Facebook, Twitter or Twitch.tv</h5>
            <div class="bold-border h-centered margin-top-30"></div>
            <div class="container padding-v-40">
                <div class="row margin-0">
                    <div class="col s7 offset-s1 padding-0 background-white">
                        <div class="input-field custom-input-field margin-0 height-45">
                            <select>
                              <option value="1" data-icon = "{{ url('images/youtube.svg') }}"> <img src="{{ url('images/youtube.svg') }}"/>YouTube</option>
                              <option value="0" data-icon = "{{ url('images/insta.svg') }} ">Instagram</option>
                              <option value="2" data-icon = "{{ url('images/twitter.svg') }}">Twitter</option>
                            </select>
                        </div>
                    </div>
                    <div class="col s3 margin-0 padding-0 background-white height-45">
                        <a class="btn btn-dark-pink waves-effect waves-light z-depth-0 btn-large-bordered width-100 font-size-14" href="#">Create my yoobe shop</a>
                    </div>
                </div>
            </div>
            <a class="btn-floating btn-large btn-dark-pink waves-effect waves-light"><i class="material-icons">add</i></a>
        </div>
    </section>
    <footer class="bottom">
        <div class="row">
            <div class="col s6 right-align text-white padding-top-10">&copy; Yoobe 2017</div>
            <div class="col s6 text-white padding-top-10">
                <i class="fa fa-twitter margin-h-5" aria-hidden="true"></i>
                <i class="fa fa-facebook margin-h-5" aria-hidden="true"></i>
                <i class="fa fa-instagram margin-h-5" aria-hidden="true"></i>
            </div>
        </div>
    </footer>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/materialize.min.js') }}"></script>
    <script src="{{ url('js/cb12bcc530.js') }}"></script>
    <script src="{{ url('js/init.js') }}"></script>
    <script>
    $(document).ready(function() {
        $('select').material_select();
    });
    $('select').material_select('destroy');
</script>
</body>

</html>