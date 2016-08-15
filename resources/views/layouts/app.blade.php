<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GDG Recruitments 2016</title>
     <link rel="stylesheet" href="css/sweetalert2.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/postlogin.css">

    <!-- Fonts -->
    
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet ' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
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
<body id="app-layout">
    <nav>
  <div class="nav-wrapper">
    <a href="{{ url('/') }}" class="brand-logo hide-on-med-and-up">GDG VIT Vellore</a>
     <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <div class="row">
      <div class="col m10 l10 s12 push-l1 m1">
        <ul class="left hide-on-med-and-down">
        @if(\Illuminate\Support\Facades\Auth::user())
          <li class="navbar-tabs" id="nav-logo"><a href="{{ url('/home') }}">GDG VIT Vellore</a></li>
          <li class="navbar-tabs"><a href="{{ url('/problems') }}">Problem Statements</a></li>
          <li class="navbar-tabs"><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
           @endif
        </ul>
        <ul class="right hide-on-med-and-down">
          <!-- Dropdown Trigger -->
            @if(\Illuminate\Support\Facades\Auth::user())
            @if(\Illuminate\Support\Facades\Auth::user()->role==1)
          <li class="navbar-tabs"><a class="dropdown-button" href="#!" data-activates="dropdown2">Admin Panel</a></li>
          <li class="navbar-tabs"><a class="dropdown-button" id="uname-dropdown" href="{{ url('/user/profile') }}" data-activates="dropdown1">{{ Auth::user()->name }}</a></li>
           @endif
                @endif
        </ul>
      </div>
    </div>

    <ul class="side-nav" id="mobile-demo">
     @if(\Illuminate\Support\Facades\Auth::user())
        <li><a href="{{ url('/problems') }}">Problem Statement</a></li>
        <li><a href="#">Dashboard</a></li>

        @if(\Illuminate\Support\Facades\Auth::user()->role==1)
        <li><a onclick='$("#admin-panel-nav").toggleClass("invisible");'>Admin Panel</a>
          <ul class="invisible" id="admin-panel-nav">
            <li><a href="{{ url('/admin/show/users') }}">Show all Users</a></li>
            <li><a href="{{ url('/admin/problem/add') }}">Add Problem</a></li>
            <li><a href="{{ url('/admin/dashboard') }}">Admin Dashboard</a></li>
            <li><a href="{{ url('/admin/users/shortlist') }}">Shortlist</a></li>
          </ul>
        </li>
        @endif
        <li><a onclick='$("#logout-nav").toggleClass("invisible");'>{{ Auth::user()->name }}</a>
          <ul class="invisible" id="logout-nav">
            <li><a href="{{ url('/logout') }}">Logout</a></li>
          </ul>
        </li>
        @endif
      </ul>
  </div>
</nav>
<br>
<br>
  
    @yield('content')

    <!-- JavaScripts -->
    <script src="js/jquery.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/visible.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
