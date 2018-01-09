@extends('master.layout')

@section('content')
    <div class="container">
        <div class="row margin-0 padding-top-10 padding-bottom-15">
            <div class="col s1">
                <img src="{{asset('/images/user.png')}}" class="width-80-px padding-top-10"/>
            </div>
            <div class="col s11 padding-left-20">
                <p class="margin-0 font-size-20"><b>Millie Bobby Brown</b></p>
                <p class="margin-0">Influencer</p>
                <ul class="list-inline margin-bottom-0">
                    <li class="margin-right-5"><a class="btn-floating waves-effect waves-light background-transparent"><i class="fa fa-youtube text-youtube"></i></a></li>
                    <li class="margin-right-5"><a class="btn-floating waves-effect waves-light background-transparent"><i class="fa fa-instagram text-instagram"></i></a></li>
                    <li class="margin-right-5"><a class="btn-floating waves-effect waves-light background-transparent"><i class="fa fa-twitter text-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="border-top-5 background-grey margin-bottom-20">
        <div class="container padding-top-10 padding-bottom-15">
          <div class="row">
              <div class="col s6">
                 <div>
                      <p class="font-weight-500"><b><i class="fa fa-youtube fa-fw text-youtube font-size-20"></i></b> <span class="text-blue">Hi, Millie!</span></p>
                      <p class="padding-left-30 text-blue font-weight-500">Take a look on your A.I social network analisys! Now you can set-up your store and start to spread to your fans all your products.</p>
                      <p class="padding-left-30 text-blue font-weight-500">Feel free to choose all of our suggested products and start to make history!</p>
                  </div>
              </div>
              <div class="col s6">
                  <div class="right-align">
                      <a class="waves-effect waves-light btn btn-blue margin-top-40" href="{{route('influencer.launch')}}">Create my Yoobe Store</a>
                  </div>
              </div>
          </div>
          <div class="row">
                <div class="col s8">
                    <div class="row margin-0">
                        <div class="col s4">
                            <p><b>FOLLOWERS</b></p>
                            <div class="bubble-bg">
                                <h3 class="bubble-text text-white"> 4M</h3>
                            </div>
                        </div>
                        <div class="col s4">
                            <p><b>ABOUT YOUR AUDIENCE</b></p>
                            <ul class="list-inline">
                                <li class="center-align audience-item margin-right-10">
                                    <div>
                                      <img src="{{asset('/images/diversity.png')}}">
                                    <p class="margin-0"><b>Diversity</b></p>
                                    </div>
                                </li>
                                <li class="center-align audience-item margin-right-10">
                                    <div>
                                        <img src="{{asset('/images/like-line.png')}}">
                                        <p class="margin-0"><b>Popularity</b></p>
                                        <div class="progress">
                                            <div class="determinate" style="width: 70%"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-inline">
                                <li class="center-align audience-item margin-right-10">
                                  <div>
                                    <img src="{{asset('/images/heart-line.png')}}">
                                    <p class="margin-0"><b>Sentiment</b></p>
                                    <div class="progress">
                                        <div class="determinate" style="width: 70%"></div>
                                    </div>
                                    </div>
                                </li>
                                <li class="center-align audience-item margin-right-10">
                                  <div>
                                    <img src="{{asset('/images/t-shirt-line.png')}}">
                                    <p class="margin-0"><b>Acceptance</b></p>
                                    <div class="progress">
                                        <div class="determinate" style="width: 70%"></div>
                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col s4">
                    <div class="padding-15 z-depth-1 background-white">
                        <p class="margin-0"><b>INTERESTS</b></p>
                        <div class="padding-top-10">
                            <p class="margin-0">Cinema</p>
                            <p class="margin-0">Series</p>
                            <p class="margin-0">Hollywood</p>
                            <p class="margin-0">Adventure</p>
                            <p class="margin-0">Music</p>
                        </div>
                        <div class="padding-top-10">
                            <p class="margin-0">Active audience: <span class="text-blue">489.578</span></p>
                            <p class="margin-0">Age: <span class="text-blue">14 to 45 (25 years average)</span></p>
                            <p class="margin-0">Gender: <span class="text-blue">49% male  51% female</span></p>
                        </div>
                        <div class="padding-top-10">
                            <p class="margin-0">Brazil: <span class="text-blue">489.578</span></p>
                            <p class="margin-0">Argentina: <span class="text-blue">239.567</span></p>
                            <p class="margin-0">USA: <span class="text-blue">789.234</span></p>
                        </div>
                    </div>
                </div>
          </div>
          <div class="row">
            <div>
              <p class="margin-0 font-size-20 padding-top-10"><b>Product suggestions based on your audience</b></p>
              <p class="margin-0">You can choose products that are not our suggestion after creating your Yoobe store</p>
            </div>
            <div class="margin-top-40">
              <div class="col s2 width-22">
                <div class="z-depth-1 background-white padding-15">
                  <div class="center-align height-160-px">
                    <img src="{{asset('/images/backpack.png')}}" class="width-95-px">
                  </div>
                  <div class="margin-top-20">
                    <p class="margin-0 text-uppercase"><b>Backpack</b></p>
                    <p class="margin-0 text-uppercase"><b>Bast Price: <span class="text-blue">U$5</span></b></p>
                    <p class="margin-0 text-uppercase"><b>Popularity: </b>
                      <i class="fa fa-star text-blue"></i> 
                      <i class="fa fa-star text-blue"></i>
                      <i class="fa fa-star text-blue"></i> 
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col s2 width-22">
                <div class="z-depth-1 background-white padding-15">
                  <div class="center-align height-160-px">
                    <img src="{{asset('/images/backpack.png')}}" class="width-95-px">
                  </div>
                  <div class="margin-top-20">
                    <p class="margin-0 text-uppercase"><b>Backpack</b></p>
                    <p class="margin-0 text-uppercase"><b>Bast Price: <span class="text-blue">U$5</span></b></p>
                    <p class="margin-0 text-uppercase"><b>Popularity: </b>
                      <i class="fa fa-star text-blue"></i> 
                      <i class="fa fa-star text-blue"></i>
                      <i class="fa fa-star text-blue"></i> 
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col s2 width-22">
                <div class="z-depth-1 background-white padding-15">
                  <div class="center-align height-160-px">
                    <img src="{{asset('/images/backpack.png')}}" class="width-95-px">
                  </div>
                  <div class="margin-top-20">
                    <p class="margin-0 text-uppercase"><b>Backpack</b></p>
                    <p class="margin-0 text-uppercase"><b>Bast Price: <span class="text-blue">U$5</span></b></p>
                    <p class="margin-0 text-uppercase"><b>Popularity: </b>
                      <i class="fa fa-star text-blue"></i> 
                      <i class="fa fa-star text-blue"></i>
                      <i class="fa fa-star text-blue"></i> 
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col s2 width-22">
                <div class="z-depth-1 background-white padding-15">
                  <div class="center-align height-160-px">
                    <img src="{{asset('/images/backpack.png')}}" class="width-95-px">
                  </div>
                  <div class="margin-top-20">
                    <p class="margin-0 text-uppercase"><b>Backpack</b></p>
                    <p class="margin-0 text-uppercase"><b>Bast Price: <span class="text-blue">U$5</span></b></p>
                    <p class="margin-0 text-uppercase"><b>Popularity: </b>
                      <i class="fa fa-star text-blue"></i> 
                      <i class="fa fa-star text-blue"></i>
                      <i class="fa fa-star text-blue"></i> 
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col s1 center-align">
                <div class="margin-top-55">
                  <a class="btn-floating btn-large waves-effect waves-light btn-pink"><i class="material-icons">add</i></a>
                  <p class="text-grey text-uppercase"><b>Add other products</b></p>
                </div>  
              </div>
            </div>
          </div>
          <div class="row padding-v-40">
            <div class="col s5 margin-top-20">
              <p class="margin-0 font-size-20"><b>Colors suggestions based on your audience</b></p>
              <div class="center-align">
                <img src="{{asset('/images/colors.png')}}" class="margin-v-30">
                <a class="waves-effect waves-light btn btn-blue margin-top-10" href="{{route('influencer.launch')}}">Create my Yoobe Store</a>
              </div>
            </div>
            <div class="col s7 margin-top-20">
              <p class="margin-0 font-size-20"><b>Choose your store template</b></p>
              <ul class="list-inline margin-top-20">
                <li class="margin-right-15 margin-top-15">
                  <img src="{{asset('/images/template-1.png')}}">
                  <p><b>Store template clean blank</b></p>
                </li>
                <li class="margin-top-15">
                  <img src="{{asset('/images/template-2.png')}}">
                  <p><b>Store template clean blank</b></p>
                </li>
                <li class="margin-right-15 margin-top-15">
                  <img src="{{asset('/images/template-3.png')}}">
                  <p><b>Store template clean blank</b></p>
                </li>
                <li class="margin-top-15">
                  <img src="{{asset('/images/template-4.png')}}">
                  <p><b>Store template clean blank</b></p>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
@endsection
