<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body id="home">
      <nav class="transparent z-depth-0">
          <a href="#" class="brand-logo"><img class="logo" src="img/logo.png"/></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#">Fans</a></li>
            <li><a href="#">Influencers</a></li>
            <li><a href="#">How it Works</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a class="btn rounded outline white">Sign up</a></li>
            <li><a class="btn z-depth-0" href="#">Sign in</a></li>
          </ul>
      </nav>
      <main>
        <section class="row center-align">
          <div class="col s12 title">Sync your social network profile</div>
          <div class="col s12 subtitle">YouTube, Instagram, Facebook, Twitter or Twitch.tv</div>
          <hr/>
          <div class="row main">
          <div class="input-field col s3">
            <select>
              <option value="1" data-icon = "{{ url('img/youtube.svg') }}"> <img src="{{ url('img/youtube.svg') }}"/>YouTube</option>
              <option value="0" data-icon = "{{ url('img/insta.svg') }}">Instagram</option>
              <option value="2" data-icon = "{{ url('img/twitter.svg') }}">Twitter</option>
            </select>
          </div>
          <div class="col s5">
            <input type="text" class="main-input"/>
          </div>
          <div class="col s4">
            <a class="btn main-btn z-depth-0" href="#">Create my yoobe shop</a>
          </div>
          </div>
          <a class="btn-floating center-align btn-large waves-effect waves-light z-depth-0 btn-add transparent"><i class="material-icons">add</i></a>
        </section>
      </main>
      <footer class="row home-footer">
        <div class="col s6 ">© Yoobe 2017 </div>
        <div class="col s6">
          <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
          <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
          <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
        </div>
      </footer>
      </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
    $('select').material_select('destroy');
</script>
</html>
