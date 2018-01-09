<footer class="padding-v-40 background-grey">
    <div class="container">
        <div class="row">
            <div class="col m3 s6">
                <img src="{{asset('/images/logo-grey.png')}}" />
                <p class="margin-0">Create your content</p>
                <p class="margin-0">Sell your product</p>
                <p class="text-grey margin-top-55">&copy; 2017 YOOBE</p>
            </div>
            <div class="col m3 s6">
                <p class="text-grey">YOOBE.ME</p>
                <ul class="footer-menu">
                    <li><a href="">About Us</a></li>
                    <li><a href="">Influencers</a></li>
                    <li><a href="">Fans</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
                <div class="row">
                  <form class="col s12">
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email" data-error="wrong" data-success="right">Subscribe to yoobe news</label>
                      </div>
                      <a class="waves-effect waves-light btn btn-pink margin-left-10">Subscribe</a>
                    </div>
                  </form>
                </div>
            </div>
            <div class="col m3 s6">
                <p class="text-grey">INFORMATION</p>
                <ul class="footer-menu">
                    <li><a href="">Terms and Conditions</a></li>
                    <li><a href="">Privacy policy</a></li>
                    <li><a href="">Faq</a></li>
                </ul>
            </div>
            <div class="col m3 s6">
                <p class="text-grey">INSTAGRAM</p>
                <ul class="list-inline">
                    <li><img src="{{asset('/images/dummy-img.png')}}" /></li>
                    <li><img src="{{asset('/images/dummy-img.png')}}" /></li>
                    <li><img src="{{asset('/images/dummy-img.png')}}" /></li>
                    <li><img src="{{asset('/images/dummy-img.png')}}" /></li>
                    <li><img src="{{asset('/images/dummy-img.png')}}" /></li>
                    <li><img src="{{asset('/images/dummy-img.png')}}" /></li>
                </ul>
                <p class="text-grey">FOLLOW US</p>
                <ul class="list-inline">
                    <li class="margin-right-5"><a class="btn-floating waves-effect waves-light btn-facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="margin-right-5"><a class="btn-floating waves-effect waves-light btn-twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="margin-right-5"><a class="btn-floating waves-effect waves-light btn-instagram"><i class="fa fa-instagram"></i></a></li>
                    <li class="margin-right-5"><a class="btn-floating waves-effect waves-light btn-pinterest"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="{{ url('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('js/materialize.min.js') }}"></script>
    <script src="{{ url('js/cb12bcc530.js') }}"></script>
    <script src="{{ url('js/init.js') }}"></script>
    <script src="{{ url('js/modernizr.custom.js') }}"></script>
    <script src="{{ url('js/classie.js') }}"></script>
    <script src="{{ url('js/search.js') }}"></script>
    @yield('pageLevelScripts')
</body>

</html>
