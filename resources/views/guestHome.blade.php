@extends('layouts.app')

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
             <li><a class='dropdown-button problems-nav-options' href='#' data-activates='dropdown1'><b>{{\Illuminate\Support\Facades\Auth::user()->name}}</b><span class="caret"></span></a></li>
            <li class="navbar-tabs"><a href="http://gdgvitvellore.com" target="_blank">Contact Us</a></li>

          </ul>
          @else
          <li class="navbar-tabs nav-logo"><a href="{{url('/')}}"><img src="images/gdglogo.png"></a></li>


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
          <li><a href="{{url('/user/profile')}}">Profile</a></li>
          <li><a href="{{url('/logout')}}">Logout</a></li>

           @else

          <li><a href="{{url('/register')}}">Register</a></li>
          <li><a href="{{url('/login')}}">Login</a></li>
          @endif
      </ul>
    </div>
  </nav>
  <ul id='dropdown1' class='dropdown-content' style="min-width:120px;">
                    <li><a href="/user/profile">Profile</a></li>
                    <li><a href="{{url('/problems')}}">Problems</a></li>
                    <li><a class="modal-trigger" href="#instructions-modal">Instructions</a></li>
                    <li><a href="http://gdgvitvellore.com" target="_blank">Contact Us</a></li>
                    <li><a href="/logout">Logout</a></li>
    </ul>
</div>
<div class="home"></div>
<br><br>
<br><br>
<br>
<style type="text/css">
  .buttons{
    top:100px;
    margin: 0 auto;
    margin-top: 100px;
  }
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col m6 l6 s10 push-l3 push-m3 push-s1 custom-pull-up">
      <div class="center">
        <div class="home-head">
          Want to be a part of awesomeness? Join GDG-VIT<br><span class="home-head-sub">Participate and compete with people across your campus</span>
        </div>
        <div class="row">
          <div class="login-form">
              <div class="col s12 m12 l12">
              <div class="col s12 m12 l12">
             	<p style="color:white">Google Developers Groups was established in VIT on 28th July 2014. The group now has 60 Developers. Our agenda is to introduce new technologies to the students, develop new ideas and polish skills in every possible field including management our faculty coordinator is Prof .P Senthilnathan and has guided us along this journey.</p>
             	<a href="http://gdgvitvellore.com" class="custom-button">View More</a>
          </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</div>

     <div id="instructions-modal" class="modal">
        <div class="modal-content">
          <h4>Instructions</h4>
          <p>Here go the instructions for the recruitment process</p>
        </div>
        <div class="modal-footer">
          <a class=" modal-action modal-close btn-flat">Close</a>
        </div>
      </div>
@endsection
