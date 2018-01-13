@extends('layouts.public.main')

@section('content')

<!-- <div class="container">
    <div class="row">
        <form class="col s8 offset-s2 grey lighten-5" id="reg-form" style="margin-top:80px">
          <h3 class="left-align"> Sign up </h3>
          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate" required>
              <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
              <input id="last_name" type="text" class="validate" required>
              <label for="last_name">Last Name</label>
          </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" required>
          <label for="email">Email</label>
      </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input id="password" type="password" class="validate" minlength="6" required>
      <label for="password">Password</label>
  </div>
</div>
<div class="row">
    <div class="input-field col s6">
      <div class="gender-male">
        <input class="with-gap" name="gender" type="radio" id="male" required />
        <label for="male">Male</label>
    </div>
    <div class="gender-female">
        <input class="with-gap" name="gender" type="radio" id="female" required />
        <label for="female">Female</label>
    </div>
</div>

<div class="input-field col s6">
  <button class="btn btn-large btn-register waves-effect waves-light" type="submit" name="action">Register
    <i class="material-icons right">done</i>
</button>
</div>
</div>
</form>
</div>
<a title="Login" class="ngl btn-floating btn-large waves-effect waves-light red"><i class="material-icons">input</i></a>
</div> -->

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

                            <div class="col s12 input-field">
                                <label for="name" class="field-label">Name</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col s12 input-field">
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
                        </div>

                        <div class="row form-group">
                            

                            <div class="col s12 input-field">
                                <label for="password-confirm" class="field-label">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
