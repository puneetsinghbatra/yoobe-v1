@extends('layouts.public.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col s8 offset-s2 grey lighten-5 signin-form" style="margin-top:80px">
            <div class="panel panel-default">
                <div class="col s10 offset-s1">
                    <h3 class="left-align"> Sign up </h3>
                    @if (count($errors))
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div class="col s10 offset-s1 panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                      
                        <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           

                            <div class="input-field col s12">
                                 <label for="email" class="field-label">E-Mail Address</label>
                                <input id="email" type="text" class="form-control validate" name="email" value="{{ old('email') }}" required autofocus autocomplete="off">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            

                            <div class="input-field col s12">
                                <label for="password" class="field-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="off">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group">
                          <div class="col s12 left-align">
                            <input name="remember" type="checkbox" class="filled-in" id="filled-in-box" {{ old('remember') ? 'checked' : '' }} />
                            <label for="filled-in-box">Remember Me </label>
                          </div>
                        </div>

                        <div class="row form-group left-align">
                            <div class="col s12 input-field">
                                <button type="submit" class="btn btn-medium btn-register waves-effect waves-light">SignIn</button>
                                <a class="btn btn-medium btn-forget waves-effect waves-light" href="{{ route('password.request') }}"> Forgot Your Password? </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection