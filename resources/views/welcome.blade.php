@extends('layouts.app')

@section('content')

     <link rel="stylesheet" href="css/sweetalert2.css">
<div class="row main-content">


      <div class="left-content col s6 m6 l6">
      <div class="links">
        <a href="#" data-to="first-content" data-number="0" class="active-link"><img src="images/Button Selected.png"></a>
        <a href="#" data-to="second-content" data-number="1"><img src="images/Scroll Down.png"></a>
        <a href="#" data-to="third-content" data-number="2"><img src="images/Scroll Down.png"></a>
      </div>
        <div class="content">
            <div class="text-center"><h3>Welcome to GDG-VIT Recruitments</h3></div>
          <div class="first-content" id="first-content">
            <div class="row"><div class="text-center"><img src="images/logo-big.png"></div></div>
            <p style="padding: 10%;font-weight: 300;font-size: 110%;text-align: center">
              If you would like to join <b>GDG VIT</b> you simply have
              to apply through this portal and fill out the necessary details.
              The first round will be conducted online and you will be informed about the subsequent rounds.
            </p><br><br>
            <div class="row">
              <button class="custom-button col push-l4 push-s4 push-m4" id="modal-trigger">Let's Start</button>
            </div>
          </div>
          <div class="second-content" id="second-content">
            <div class="row"><div class="text-center"><img src="images/logo-big.png"></div></div>
            <p style="padding: 10%;font-weight: 300;font-size: 110%;text-align: center">
              We are a chapter that is focussed on prototyping and developing open source products and solutions that are helpful to the community.
We conduct events to generate awareness about Google's initiatives and bring out the best in the students.
            </p><br><br>
          </div>
          <div class="third-content" id="third-content">
            <div class="row"><div class="text-center"><img src="images/logo-big.png"></div></div>
            <p style="padding: 10%;font-weight: 300;font-size: 110%;text-align: center">
              To contact us, simply drop a message to our <a href="http://facebook.com/gdgvitvellore">Facebook page</a>  or, give us an email at <br><a href="mailto::gdgvitvellore@gmail.com" style="color: white" target="_blank">gdgvitvellore@gmail.com</a>
              <br>Or, call us at <br>77086 15051<br>OR<br>99526 68689
            </p>
              <a href="https://www.facebook.com/gdgvitvellore/?fref=ts" target="_blank"><button class="custom-facebook text-center">f</button></a>
          </div>
        </div>
      </div>
        <div class="right-content col s6 m6 l6 fixed">
          <img src="images/illustration.png">
        </div>
      </div>
      
      <div class="modal" id="login-modal">
        <div class="modal-content">
          <a href="{{ url('/login') }}" style="color: white"><button class="custom-button">Login</button></a>
          <a href="{{ url('/register') }}"><button class="register-button">Register</button></a>
        </div>
      </div>
@endsection
