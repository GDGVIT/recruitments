@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col m6 l6 s10 push-l3 push-m3 push-s1 custom-pull-up">
      <div class="center">
        <div class="home-head">
          Practice coding. Compete. Find jobs.<br><span class="home-head-sub">Join over 1 million programmers and improve your skills.</span>
        </div>
        <div class="row">
          <div class="login-form">
              <div class="col s12 m5 l5 push-l4 push-m4">
                <form action="{{url('/login')}}" method="POST">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                  <div class="input-field form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" name="email" id="email" placeholder="Email Id" value="{{ old('email') }}">

                  </div>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong >{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                  <div class="input-field form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" id="password" name="password" placeholder="Password">
                  </div>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong >{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                  <div class="input-field" id="remember-holder">
                    <input type="checkbox" class="filled-in"  name="remember" id="remember">
                    <label for="remember">Remember Me?
                  </div>
                  <div class="input-field" id="forgot-password">
                    <a href="forgotpassword.html">Forgot password?</a>
                  </div>
                  <div class="row">
                    <div class="col s12 m12 l12" style="padding:0;">
                      <button class="custom-button" id="login-form-submit" type="submit">Login</button>
                    </div>
                  </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
