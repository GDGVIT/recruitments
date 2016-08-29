@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/register.css')}}">

@section('content')
<div class="home-container">
<div class="navbar-fixed">
  <nav class="home-nav">
    <div class="nav-wrapper">
      <a href="{{ url('/') }}" class="hide-on-med-and-up nav-logo-mob"><img src="images/gdglogo.png"></a>
       <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <div class="row">
        <div class="col m10 l10 s12 push-l1 m1">
          <ul class="left hide-on-med-and-down">
          @if(\Illuminate\Support\Facades\Auth::user())
            <li class="navbar-tabs nav-logo"><a href="{{url('/home')}}"><img src="images/gdglogo.png"></a></li>
            
          </ul>
          <ul class="right hide-on-med-and-down">
            <!-- Dropdown Trigger -->
            <li class="navbar-tabs"><a href="http://gdgvitvellore.com" target="_blank">Contact Us</a></li>
            <li class="navbar-tabs"><a href="{{url('/logout')}}">Logout</a></li>
          </ul>
          @else
          <li class="navbar-tabs nav-logo"><a href="{{url('/')}}"><img src="images/gdglogo.png"></a></li>
            
          </ul>
          <ul class="right hide-on-med-and-down">
            <!-- Dropdown Trigger -->
            <li class="navbar-tabs"><a href="http://gdgvitvellore.com" target="_blank">Contact Us</a></li>
            <li class="navbar-tabs"><a href="{{url('/register')}}">Register</a></li>
          </ul>
           @endif
        </div>
      </div>

      <ul class="side-nav" id="mobile-demo">
           <li><a href="http://gdgvitvellore.com" target="_blank">Contact Us</a></li>
           @if(\Illuminate\Support\Facades\Auth::user())

          <li><a href="{{url('/home')}}">Home</a></li>

          <li><a href="{{url('/problems')}}">Problems</a></li>
          <li><a href="{{url('/user/dashboard')}}">Dashboard</a></li>
          <li><a href="{{url('/user/profile')}}">Profile</a></li>
          <li><a href="{{url('/logout')}}">Logout</a></li>

           @else

          <li><a href="{{url('/register')}}">Register</a></li>
          <li><a href="{{url('/login')}}">Login</a></li>
          @endif
      </ul>
    </div>
  </nav>
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col m7 l7 s10 push-m3 push-l3 push-s1ex">
                <form action="/register" method="POST">
                    {{csrf_field()}}
                    <div class="input-field form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="input-label">Name</div>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"  placeholder="Name">
                    </div>
                    @if ($errors->has('name'))
                        <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                     </span>
                    @endif
                    <div class="input-field form-group{{ $errors->has('regno') ? ' has-error' : '' }}">
                        <div class="input-label">Registration Number</div>
                        <input type="text" name="regno" id="regno"  placeholder="Registration Number">
                    </div>
                    @if ($errors->has('regno'))
                        <span class="help-block">
                           <strong>{{ $errors->first('regno') }}</strong>
                         </span>
                     @endif
                    <div class="input-field form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-label">Email Id</div>
                        <input type="email" name="email" id="email"  placeholder="Email">
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                           <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <div class="input-field form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="input-label">Password</div>
                        <input type="password" id="password" name="password"  placeholder="Password">
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <div class="input-field">
                        <div class="input-label">Confirm Password</div>
                        <input type="password" id="password-confirm" name="password_confirmation"  placeholder="Confirm Password">
                    </div>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                    <div class="input-field form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                        <div class="input-label">Contact</div>
                        <input type="text" id="contact" name="contact"  placeholder="Phone Number">
                    </div>
                    @if ($errors->has('contact'))
                        <span class="help-block">
                             <strong>{{ $errors->first('contact') }}</strong>
                        </span>
                    @endif

                    <div class="input-field form-group{{ $errors->has('why_gdg') ? ' has-error' : '' }}">
                        <div class="input-label">Why GDG?</div>
                        <textarea name="why_gdg" class="materialize-textarea"  placeholder=""></textarea>
                    </div>

                    @if ($errors->has('why_gdg'))
                        <span class="help-block">
                           <strong>{{ $errors->first('why_gdg') }}</strong>
                         </span>
                    @endif
                    <div class="input-field form-group{{ $errors->has('experience') ? ' has-error' : '' }}">
                        <div class="input-label">Experience</div>
                        <textarea name="experience" class="materialize-textarea" placeholder=""></textarea>
                    </div>
                    @if ($errors->has('experience'))
                        <span class="help-block">
                            <strong>{{ $errors->first('experience') }}</strong>
                         </span>
                    @endif
                    <div class="input-field">
                        <div class="input-label">github link</div>
                        <input type="text" name="github"placeholder="github">
                    </div>
                    <div class="input-field">
                        <div class="input-label">linkedin link</div>
                        <input type="text" name="linkedin" placeholder="linkedin">
                    </div>
                    <div class="input-field">
                        <div class="input-label">behance link</div>
                        <input type="text" name="behance" placeholder="behance">
                    </div>
                    <div class="row"><div class=""><button class="custom-button" type="submit">Register</button></div></div>
                </form>
            </div>
        </div>
    </div>
    @endsection