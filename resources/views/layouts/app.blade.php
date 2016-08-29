<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GDG Recruitments 2016</title>
    <link rel="stylesheet" href="{{url('css/materialize.min.css')}}"">
    <link rel="stylesheet" href="{{url('css/home.css')}}"">
   <link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet ' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="{{url('js/jquery.js')}}"></script>
    <script src="{{url('js/materialize.min.js')}}"></script>
    <script src="{{url('js/sweetalert2.min.js')}}"></script>
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        .text-center{
            text-align: center;
        }
    </style>
</head>
<body id="home-body">
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
<div class="home"></div>
<br><br>
<br><br>
<br>

  
    @yield('content')

    <script>

    $('select').material_select();
    $(".button-collapse").sideNav();

  </script>
</body>
</html>
