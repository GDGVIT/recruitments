@extends('layouts.app')
<link rel="stylesheet" href="css/postlogin.css">
@section('content')
<div class="row gdg-logo">
      <div class="center">
        <img src="images/logo-big.png">
      </div>
    </div>
    <div class="row login-form">
      <div class="col s5 m5 l5 push-l4 push-m4 push-s4">
        <form method="POST" action="{{ url('/register') }}">
          <div class="input-field form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" name="name" value="{{ old('name') }}" id="name">
            <label for="name">Name
          </div>
            {{csrf_field()}}
          @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
          <div class="input-field form-group{{ $errors->has('regno') ? ' has-error' : '' }}">
            <input type="text" name="regno" id="regno">
            <label for="regno">Registration Number
          </div>
          @if ($errors->has('regno'))
              <span class="help-block">
                  <strong>{{ $errors->first('regno') }}</strong>
              </span>
          @endif
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
            <input type="password" name="password_confirmation" id="password-confirm" >
            <label for="password">Confirm Password
          </div>
          @if ($errors->has('password_confirmation'))
              <span class="help-block">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
              </span>
          @endif
          <div class="input-field form-group{{ $errors->has('domain') ? ' has-error' : '' }}">
            <select  name="domain">
              <option value="" disabled selected>Domain</option>
              <option value="1">Technical</option>
              <option value="2">Management</option>
              <option value="3">Design</option>
            </select>
          </div>
          @if ($errors->has('domain'))
              <span class="help-block">
                  <strong>{{ $errors->first('domain') }}</strong>
              </span>
          @endif
          <div class="input-field form-group{{ $errors->has('why_gdg') ? ' has-error' : '' }}">
            <textarea name="why_gdg" class="materialize-textarea"></textarea>
            <label for="why_gdg">Why GDG?
          </div>
          @if ($errors->has('why_gdg'))
              <span class="help-block">
                  <strong>{{ $errors->first('why_gdg') }}</strong>
              </span>
          @endif
          <div class="input-field form-group{{ $errors->has('experience') ? ' has-error' : '' }}">
            <textarea name="experience" class="materialize-textarea"></textarea>
            <label for="experience">Previous Experience (Club or Chapter)
          </div>
          @if ($errors->has('experience'))
              <span class="help-block">
                  <strong>{{ $errors->first('experience') }}</strong>
              </span>
          @endif
          <div class="input-field form-group{{ $errors->has('github') ? ' has-error' : '' }}">
            <input type="text" name="github">
            <label for="github">Github URL
          </div>
          @if ($errors->has('github'))
              <span class="help-block">
                  <strong>{{ $errors->first('github') }}</strong>
              </span>
          @endif
          <div class="input-field form-group{{ $errors->has('linkedin') ? ' has-error' : '' }}">
            <input type="text" name="linkedin">
            <label for="linkedin">Linkedin URL
          </div>
          @if ($errors->has('linkedin'))
              <span class="help-block">
                  <strong>{{ $errors->first('linkedin') }}</strong>
              </span>
          @endif
          <div class="input-field form-group{{ $errors->has('behance') ? ' has-error' : '' }}">
            <input type="text" name="behance">
            <label for="behance">Behance URL
          </div>
          @if ($errors->has('behance'))
              <span class="help-block">
                  <strong>{{ $errors->first('behance') }}</strong>
              </span>
          @endif
          <div class="row"><div class="col s12 m12 l12 push-m4 push-l4 push-s4"><button class="custom-button" type="submit">Register</button></div></div>
        </form>
      </div>
    </div>
    <script>
      $(document).ready(function(){
        $('select').material_select();
      });
    </script>

@endsection


<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('regno') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Registration Number
                            </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="regno">
                                @if ($errors->has('regno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('regno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('domain') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Domain
                            </label>

                            <div class="col-md-6">
                                <select class="form-control" name="domain">
                                    <option value="1">Technical</option>
                                    <option value="2">Management</option>
                                    <option value="3">Design</option>
                                </select>
                                @if ($errors->has('domain'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('domain') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('why_gdg') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Why GDG
                            </label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="why_gdg"></textarea>
                                @if ($errors->has('why_gdg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('why_gdg') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('experience') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Previous Experience(Club or Chapter)
                            </label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="experience"></textarea>
                                @if ($errors->has('experience'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('experience') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('github') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Github link
                            </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="github">
                                @if ($errors->has('github'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('github') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('linkedin') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">LinkedIn link
                            </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="linkedin">
                                @if ($errors->has('linkedin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('linkedin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('behance') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Behance link
                            </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="behance">
                                @if ($errors->has('behance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('behance') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->