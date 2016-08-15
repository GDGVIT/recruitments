@extends('layouts.app')

@section('content')
<div class="row gdg-logo">
      <div class="col s2 m2 l2 push-l5 push-m5 push-s6">
        <img src="images/logo-big.png">
      </div>
    </div>
    <div class="row login-form">
      <div class="col s5 m5 l5 push-l4 push-m4 push-s4">
        <form method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
          <div class="input-field form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" name="email" value="{{ old('email') }}" id="email">
            <label for="email">Email
          </div>
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
          <div class="input-field form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" id="password" name="password">
            <label for="password">Password
          </div>
          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
          <div class="input-field">
            <input type="checkbox" class="filled-in" id="remember" name="remember">
            <label for="remember">Remember Me?
          </div>
          <div class="input-field">
             <a  href="{{ url('/password/reset') }}">Forgot Your Password?</a>
          </div><br>
         
          <div class="row"><div class="col s12 m12 l12 push-m4 push-l4 push-s4"><button class="custom-button" type="submit">Login</button></div></div>
        </form>
      </div>
    </div>

@endsection
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->