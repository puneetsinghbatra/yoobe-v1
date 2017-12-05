<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/influencer-style.css"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
     <nav>
       <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo"><img src="{{ url('images/logo.png') }}" /></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a><i class="small material-icons">menu</i></a></li>
          </ul>
        </div>
        </div>
      </nav>
      <nav class="background-white">
       <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="font-size-20 text-brown"><span><img src="{{ url('images/user.png') }}" class="user-image"/></span> <span>Millie Bobby Brown</span></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#" class="text-brown">Influencer</a></li>
            <li><a href="#" class="text-brown">Fan Art</a></li>
            <li><a href="#" class="text-brown">Contact</a></li>
          </ul>
        </div>
        </div>
      </nav>
      <div class="container padding-v-20">
          <h4 class="text-brown font-size-24">My Products</h4>
          <div class="row">
              <div class="col s8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
              <div class="col s4 right-align"><a class="waves-effect waves-light btn btn-blue">Launch my store</a></div>
          </div>
      </div>
      <div class="container">
          <div class="row padding-v-40">
              <div class="col s4">
                 <div class="z-depth-1 padding-h-15 padding-v-5 hoverable position-relative">
                      <i class="material-icons text-pink pink-bullet-position">fiber_manual_record</i>
                      <div class="center-align">
                         <p>T-shirt <i class="tiny material-icons">edit</i></p>
                          <img src="{{ url('images/tshirt.png') }}" class="height-150" />
                      </div>
                      <p>Amazing product X spec 123</p>
                      <div class="row">
                          <div class="col s6">
                              <p class="margin-0">Colors</p>
                              <ul class="list-inline margin-0">
                                  <li><i class="font-size-20 material-icons">fiber_manual_record</i></li>
                                  <li><i class="font-size-20 material-icons">fiber_manual_record</i></li>
                                  <li><i class="font-size-20 material-icons">fiber_manual_record</i></li>
                                  <li><i class="font-size-20 material-icons">fiber_manual_record</i></li>
                              </ul>
                          </div>
                          <div class="col s6">
                              <p class="margin-0">Sizes</p>
                              <ul class="list-inline text-grey margin-0">
                                  <li>S</li>
                                  <li>M</li>
                                  <li>L</li>
                              </ul>
                          </div>
                      </div>
                 </div>
                 <div class="z-depth-1 padding-h-15 padding-v-5 margin-top-10 hoverable center-align position-relative">
                     <i class="material-icons text-pink pink-bullet-position">fiber_manual_record</i>
                     <p class="margin-0 text-blue font-size-20"><b>$20</b></p>
                     <p class="margin-0 text-blue"><b>Choose your profit</b></p>
                     <form action="#">
                        <p class="range-field">
                          <input type="range" min="0" max="100" />
                        </p>
                      </form>
                 </div>
                 <div class="z-depth-1 padding-h-15 padding-v-5 margin-top-10 hoverable center-align position-relative">
                     <i class="material-icons text-pink pink-bullet-position">fiber_manual_record</i>
                     <p class="margin-0 text-pink"><b>Final price</b></p>
                     <p class="margin-0 text-pink font-size-20"><b>$20</b></p>
                 </div>
                 <div class="z-depth-1 padding-15 margin-top-10 hoverable">
                     <div class="row margin-0">
                         <div class="col s6">
                             <p class="text-pink margin-0">Accepts fan arts</p>
                         </div>
                         <div class="col s6 right-align">
                             <div class="switch">
                                <label>
                                  <input type="checkbox">
                                  <span class="lever"></span>
                                </label>
                              </div>
                         </div>
                     </div>
                 </div>
              </div>
              <div class="col s4">
                 <div class="z-depth-1 padding-h-15 padding-v-5 hoverable position-relative">
                      <i class="material-icons text-pink pink-bullet-position">fiber_manual_record</i>                 
                      <div class="center-align">
                         <p>Backpack <i class="tiny material-icons">edit</i></p>
                          <img src="{{ url('images/backpack.png') }}" class="height-150" />
                      </div>
                      <p>Amazing product X spec 123</p>
                      <div class="row">
                          <div class="col s6">
                              <p class="margin-0">Colors</p>
                              <ul class="list-inline margin-0">
                                  <li><i class="font-size-20 material-icons">fiber_manual_record</i></li>
                                  <li><i class="font-size-20 material-icons">fiber_manual_record</i></li>
                                  <li><i class="font-size-20 material-icons">fiber_manual_record</i></li>
                                  <li><i class="font-size-20 material-icons">fiber_manual_record</i></li>
                              </ul>
                          </div>
                          <div class="col s6">
                              <p class="margin-0">Sizes</p>
                              <ul class="list-inline text-grey margin-0">
                                  <li>S</li>
                                  <li>M</li>
                                  <li>L</li>
                              </ul>
                          </div>
                      </div>
                 </div>
                 <div class="z-depth-1 padding-h-15 padding-v-5 margin-top-10 hoverable center-align">
                     <p class="margin-0 text-blue font-size-20"><b>$20</b></p>
                     <p class="margin-0 text-blue"><b>Choose your profit</b></p>
                     <form action="#">
                        <p class="range-field">
                          <input type="range" min="0" max="100" />
                        </p>
                      </form>
                 </div>
                 <div class="z-depth-1 padding-h-15 padding-v-5 margin-top-10 hoverable center-align">
                     <p class="margin-0 text-pink"><b>Final price</b></p>
                     <p class="margin-0 text-pink font-size-20"><b>$20</b></p>
                 </div>
                 <div class="z-depth-1 padding-15 margin-top-10 hoverable">
                     <div class="row margin-0">
                         <div class="col s6">
                             <p class="text-pink margin-0">Accepts fan arts</p>
                         </div>
                         <div class="col s6 right-align">
                             <div class="switch">
                                <label>
                                  <input type="checkbox">
                                  <span class="lever"></span>
                                </label>
                              </div>
                         </div>
                     </div>
                 </div>
              </div>
              <div class="col s4">
                 <div class="z-depth-1 padding-h-15 padding-v-5 hoverable position-relative">
                      <i class="material-icons text-pink pink-bullet-position">fiber_manual_record</i>
                      <div class="center-align">
                         <p>Mug <i class="tiny material-icons">edit</i></p>
                         <img src="{{ url('images/mug.png') }}" class="height-150" />
                      </div>
                      <p>Amazing product X spec 123</p>
                      <div class="row">
                          <div class="col s6">
                              <p class="margin-0">Colors</p>
                              <ul class="list-inline margin-0">
                                  <li><i class="font-size-20 material-icons">fiber_manual_record</i></li>
                                  <li><i class="font-size-20 material-icons">fiber_manual_record</i></li>
                                  <li><i class="font-size-20 material-icons">fiber_manual_record</i></li>
                                  <li><i class="font-size-20 material-icons">fiber_manual_record</i></li>
                              </ul>
                          </div>
                          <div class="col s6">
                              <p class="margin-0">Sizes</p>
                              <ul class="list-inline text-grey margin-0">
                                  <li>S</li>
                                  <li>M</li>
                                  <li>L</li>
                              </ul>
                          </div>
                      </div> 
                 </div>
                 <div class="z-depth-1 padding-h-15 padding-v-5 margin-top-10 hoverable center-align">
                     <p class="margin-0 text-blue font-size-20"><b>$20</b></p>
                     <p class="margin-0 text-blue"><b>Choose your profit</b></p>
                     <form action="#">
                        <p class="range-field">
                          <input type="range" min="0" max="100" />
                        </p>
                      </form>
                 </div>
                 <div class="z-depth-1 padding-h-15 padding-v-5 margin-top-10 hoverable center-align">
                     <p class="margin-0 text-pink"><b>Final price</b></p>
                     <p class="margin-0 text-pink font-size-20"><b>$20</b></p>
                 </div>
                 <div class="z-depth-1 padding-15 margin-top-10 hoverable">
                     <div class="row margin-0">
                         <div class="col s6">
                             <p class="text-pink margin-0">Accepts fan arts</p>
                         </div>
                         <div class="col s6 right-align">
                             <div class="switch">
                                <label>
                                  <input type="checkbox">
                                  <span class="lever"></span>
                                </label>
                              </div>
                         </div>
                     </div>
                 </div>
              </div>
          </div>
      </div>
      <div class="center-align padding-v-20">
          <a class="waves-effect waves-light btn btn-blue margin-right-15">Manage my fine artworks</a>
          <a class="waves-effect waves-light btn btn-pink">Customize my products</a>
      </div>
      <div class="container padding-v-20">
          <div class="row">
              <div class="col s2 offset-s2 center-align">
                  <h3 class="font-size-20"><b>Reviews</b></h3>
                  <p class="text-grey"><span class="font-size-50">0.0</span>/0</p>
                  <p class="font-sixe-12">0% of reviewers recommanded this store</p>
              </div>
              <div class="col s4 center-align border-l-r">
                  <h3 class="font-size-20"><b>Ratings</b></h3>
                  <ul class="list-inline">
                      <li><i class="fa fa-star rating-icon"></i></li>
                      <li><i class="fa fa-star rating-icon"></i></li>
                      <li><i class="fa fa-star rating-icon"></i></li>
                  </ul>
                  <ul class="list-inline">
                      <li class="rating-grey-area"><i class="fa fa-star fa-fw"></i>222</li>
                      <li class="rating-grey-area"><i class="fa fa-star fa-fw"></i>222</li>
                      <li class="rating-grey-area"><i class="fa fa-star fa-fw"></i>222</li>
                  </ul>
              </div>
              <div class="col s2 center-align">
                  <h3 class="font-size-20"><b>Badges</b></h3>
                  <ul class="list-inline">
                      <li class="margin-top-5"><i class="fa fa-diamond badge-icon"></i></li>
                      <li class="margin-top-5"><i class="fa fa-thumbs-o-up badge-icon"></i></li>
                      <li class="margin-top-5"><i class="fa fa-tag badge-icon"></i></li>
                      <li class="margin-top-5"><i class="fa fa-rocket badge-icon"></i></li>
                  </ul>
              </div>
          </div>
      </div>
      <footer class="padding-v-40">
          <div class="container">
              <div class="row">
                  <div class="col s3">
                      <img src="{{ url('images/logo-grey.png') }}" />
                      <p class="margin-0">Create your content</p>
                      <p class="margin-0">Sell your product</p>
                      <p class="text-grey margin-top-55">&copy; 2017 YOOBE</p>
                  </div>
                  <div class="col s3">
                      <p class="text-grey">YOOBE.ME</p>
                      <ul class="footer-menu">
                          <li><a href="">About Us</a></li>
                          <li><a href="">Influencers</a></li>
                          <li><a href="">Fans</a></li>
                          <li><a href="">Contact</a></li>
                      </ul>
                      <p class="text-grey">Subscribe to yoobe news</p>
                  </div>
                  <div class="col s3">
                      <p class="text-grey">INFORMATION</p>
                      <ul class="footer-menu">
                          <li><a href="">Terms and Conditions</a></li>
                          <li><a href="">Privacy policy</a></li>
                          <li><a href="">Faq</a></li>
                      </ul>
                  </div>
                  <div class="col s3">
                      <p class="text-grey">INSTAGRAM</p>
                      <ul class="list-inline">
                          <li><img src="{{ url('images/dummy-img.png') }}" /></li>
                          <li><img src="{{ url('images/dummy-img.png') }}" /></li>
                          <li><img src="{{ url('images/dummy-img.png') }}" /></li>
                          <li><img src="{{ url('images/dummy-img.png') }}" /></li>
                          <li><img src="{{ url('images/dummy-img.png') }}" /></li>
                          <li><img src="{{ url('images/dummy-img.png') }}" /></li>
                      </ul>
                      <p class="text-grey">FOLLOW US</p>
                      <ul class="list-inline">
                          <li class="margin-right-5"><a class="btn-floating waves-effect waves-light btn-facebook"><i class="fa fa-facebook"></i></a></li>
                          <li class="margin-right-5"><a class="btn-floating waves-effect waves-light btn-twitter"><i class="fa fa-twitter"></i></a></li>
                          <li class="margin-right-5"><a class="btn-floating waves-effect waves-light btn-linkedin"><i class="fa fa-linkedin"></i></a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </footer>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="{{ url('js/materialize.min.js') }}"></script>
      <script src="https://use.fontawesome.com/cb12bcc530.js"></script>
    </body>
  </html>
        