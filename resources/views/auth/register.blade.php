@extends('layouts.public.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col s8 offset-s2 grey lighten-5 z-depth-3" id="reg-form" style="margin-top:80px">
            <div class="row panel panel-default">
                <div class="col s10 offset-s1">
                    <h3 class="left-align"> Sign up </h3>
                </div>

                <div class="col s10 offset-s1 panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="row form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="col s6 input-field">
                                <label for="fname" class="field-label">First Name</label>
                                <input id="fname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col s6 input-field">
                                <label for="lname" class="field-label">Last Name</label>
                                <input id="lname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                             

                        <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col s6 input-field">
                                <label for="username" class="field-label">Username</label>
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>  
                            <div class="col s6 input-field">
                                <label for="email" class="field-label">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                          <div class="col s12 input-field">
                            <label for="password" class="field-label">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                          </div>

                          <div class="col s12 input-field">
                              <label for="password-confirm" class="field-label">Confirm Password</label>
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col s12">
                              <input name="term-agree" type="checkbox" class="filled-in" id="filled-in-box" />
                              <label for="filled-in-box">By Signing up this site, you will be agree with the terms and conditions</label>
                          </div>
                        </div>

                        <div class="row">
                            <div class="col s12">
                                <a href="{{ route('glogin') }}">
                                <img src="https://developers.google.com/identity/images/btn_google_signin_light_normal_web.png" alt="Google sign-in button with white background" class="attempt-right">
                                </a>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col s6 offset-s3 input-field">

                                <button type="submit" class="btn btn-large btn-register waves-effect waves-light">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                    <a href="{{ route('login') }}" title="Login" class="ngl btn-floating btn-large waves-effect waves-light red"><i class="material-icons">input</i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
