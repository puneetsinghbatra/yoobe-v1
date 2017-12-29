@include('includes.header')
    <div class="container">
        <p class="font-size-20 text-brown"><span>
        <img src="{{ url('images/user.png') }}" class="user-image"/></span> 
        <span class="position-absolute margin-top-15 margin-left-10">
        
        
            @foreach ($users as $user)
        
                <strong>{{ $user->email }} </strong>
        
            @endforeach     
        
            {!! $users->render() !!}
        </span></p>
    </div>
    <div class="background-light-grey border-top-5">
    <div class="container padding-v-20">
        <h4 class="text-brown font-size-24">My Products</h4>
        <div class="row">
            <div class="col s8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
            <div class="col s4 right-align">
              <a class="waves-effect waves-light btn btn-blue modal-trigger" href="#modal1">Launch my store</a>
              <!-- Modal Structure -->
              <div id="modal1" class="modal left-align">
                <div class="modal-content">
                  <h4>Modal Header</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="modal-footer">
                  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="container">
          <div class="row">
              <div class="col m4 s12">
                 <div class="z-depth-1 background-white padding-h-15 padding-v-5 hoverable">
                      <div class="center-align">
                         <p>T-shirt <a href=""><i class="tiny material-icons">edit</i></a></p>
                          <img src="{{ url('images/tshirt.png') }} " class="height-150" />
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
                 <div class="z-depth-1 background-white padding-h-15 padding-v-5 margin-top-10 hoverable center-align">
                     <p class="margin-0 text-blue font-size-20"><b>$20</b></p>
                     <p class="margin-0 text-blue"><b>Choose your profit</b></p>
                     <form action="#">
                        <p class="range-field margin-0">
                          <input type="range" min="0" max="100" />
                        </p>
                      </form>
                 </div>
                 <div class="z-depth-1 background-white padding-h-15 padding-v-5 margin-top-10 hoverable center-align">
                     <p class="margin-0 text-pink"><b>Final price</b></p>
                     <p class="margin-0 text-pink font-size-20"><b>$20</b></p>
                 </div>
                 <div class="z-depth-1 background-white padding-15 margin-top-10 hoverable">
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
              <div class="col m4 s12">
                 <div class="z-depth-1 background-white padding-h-15 padding-v-5 hoverable">               
                      <div class="center-align">
                         <p>Backpack <a href=""><i class="tiny material-icons">edit</i></a></p>
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
                 <div class="z-depth-1 background-white padding-h-15 padding-v-5 margin-top-10 hoverable center-align">
                     <p class="margin-0 text-blue font-size-20"><b>$20</b></p>
                     <p class="margin-0 text-blue"><b>Choose your profit</b></p>
                     <form action="#">
                        <p class="range-field margin-0">
                          <input type="range" min="0" max="100" />
                        </p>
                      </form>
                 </div>
                 <div class="z-depth-1 background-white padding-h-15 padding-v-5 margin-top-10 hoverable center-align">
                     <p class="margin-0 text-pink"><b>Final price</b></p>
                     <p class="margin-0 text-pink font-size-20"><b>$20</b></p>
                 </div>
                 <div class="z-depth-1 background-white padding-15 margin-top-10 hoverable">
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
              <div class="col m4 s12">
                 <div class="z-depth-1 background-white padding-h-15 padding-v-5 hoverable">
                      <div class="center-align">
                         <p>Mug <a href=""><i class="tiny material-icons">edit</i></a></p>
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
                 <div class="z-depth-1 background-white padding-h-15 padding-v-5 margin-top-10 hoverable center-align">
                     <p class="margin-0 text-blue font-size-20"><b>$20</b></p>
                     <p class="margin-0 text-blue"><b>Choose your profit</b></p>
                     <form action="#">
                        <p class="range-field margin-0">
                          <input type="range" min="0" max="100" />
                        </p>
                      </form>
                 </div>
                 <div class="z-depth-1 background-white padding-h-15 padding-v-5 margin-top-10 hoverable center-align">
                     <p class="margin-0 text-pink"><b>Final price</b></p>
                     <p class="margin-0 text-pink font-size-20"><b>$20</b></p>
                 </div>
                 <div class="z-depth-1 background-white padding-15 margin-top-10 hoverable">
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
      <div class="center-align padding-v-40">
          <a class="waves-effect waves-light btn btn-blue margin-right-15">Manage my fine artworks</a>
          <a class="waves-effect waves-light btn btn-pink">Customize my products</a>
      </div>
       </div>
@include('includes.footer')