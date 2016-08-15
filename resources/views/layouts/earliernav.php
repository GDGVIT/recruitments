  <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->


                <a class="navbar-brand" href="{{ url('/') }}"> GDG VIT Vellore
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    @if(\Illuminate\Support\Facades\Auth::user())
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li><a href="{{ url('/problems') }}">Problem Statements</a></li>
                        <li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        @if(\Illuminate\Support\Facades\Auth::user()->role==1)
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Admin Panel <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                    <li><a href="{{ url('/admin/show/users') }}">Show all users</a></li>
                                    <li><a href="{{ url('/admin/problem/add') }}">Add Problem</a></li>
                                    <li><a href="{{ url('/admin/problem/add') }}">Add Problem</a></li>
                                    <li><a href="{{ url('/admin/dashboard') }}">Admin Dashboard</a></li>
                                    <li><a href="{{ url('/admin/users/shortlist') }}">Shortlist</a></li>
                                </ul>
                            </li>
                        @endif
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">

                                <li><a href="{{ url('/user/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>


                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
