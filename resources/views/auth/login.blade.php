@extends('layouts.public.main')

@section('content')
<!-- <div class="container">
    <div class="row">
        <form class="col s12 grey lighten-5">
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                    <label for="disabled">Disabled</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
              </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
                <div class="col s12">
                    This is an inline input field:
                    <div class="input-field inline">
                        <input id="email" type="email" class="validate">
                        <label for="email" data-error="wrong" data-success="right">Email</label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div> -->


<div class="container">
    <div class="row">
        <div class="col s8 offset-s2 grey lighten-5">
            <div class="panel panel-default">
                <h3 class="panel-heading">Sign in</h3>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                      
                        <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col s6 control-label">E-Mail Address</label>

                            <div class="input-field col s6">
                                <input id="email" type="email" class="form-control validate" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col s6 control-label">Password</label>

                            <div class="input-field col s6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col s6">
                                <label>Remember Me </label>
                            </div>
                            <div class="col s6 offset-s4">
                                <div class="switch">
                                    <label>
                                      Off
                                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                      <span class="lever"></span>
                                      On
                                    </label>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary"> Login </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}"> Forgot Your Password? </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection