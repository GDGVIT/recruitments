  <nav>
        <div class="nav-wrapper problems-nav">
            <a href="/"><img src="{{url('images/gdglogo.png')}}" alt="GDG VIT Vellore" style="width: 15%;"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
               <!--  <li><a href="#"  id="change-modal-trigger" style="color: white">Change Domain</a></li> Not needed-->
                <li><a href="/problems" class="right" style="color: white">Problems</a></li>
                <li><a class='dropdown-button problems-nav-options' href='#' data-activates='dropdown1'><b>{{\Illuminate\Support\Facades\Auth::user()->name}}</b><span class="caret"></span></a>
                 @if(\Illuminate\Support\Facades\Auth::user()->role==1)
                            <li >
                                <a class='dropdown-button problems-nav-options' href='#' data-activates='dropdown-menu'>
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
                </li>

            </ul>
        </div>
    </nav>
    <!-- Dropdown Structure -->
    <ul id='dropdown1' class='dropdown-content'>
        <li><a href="/user/profile">Profile</a></li>
        <li><a class="modal-trigger" href="#instructions-modal">Instructions</a></li>
        <li><a href="http://gdgvitvellore.com" target="_blank">Contact Us</a></li>
        <li><a href="/logout">Logout</a></li>

    </ul>