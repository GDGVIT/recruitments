  <nav>
        <div class="nav-wrapper problems-nav">
            <a href="/"><img src="{{url('images/gdglogo.png')}}" alt="GDG VIT Vellore" style="width: 15%;"></a>
            <a href="#" id="side-nav-trigger" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
               <!--  <li><a href="#"  id="change-modal-trigger" style="color: white">Change Domain</a></li> Not needed-->
               <li><a href="/home"  style="color: white">Home</a></li>
                <li><a href="/problems"  style="color: white">Problems</a></li>
                <li><a class="modal-trigger" href="#instructions-modal">Instructions</a></li>
                <li><a class='dropdown-button problems-nav-options' href='#' data-activates='dropdown1'><b>{{\Illuminate\Support\Facades\Auth::user()->name}}</b><span class="caret"></span></a></li>
                 @if(\Illuminate\Support\Facades\Auth::user()->role==1)
                            <li >
                                <a class='dropdown-button problems-nav-options' href='#' data-activates='dropdown-menu'>
                                    Admin Panel <span class="caret"></span>
                                </a>


                            </li>
                @endif

            </ul>
            <ul id="mobile-demo" class="side-nav">
               <!--  <li><a href="#"  id="change-modal-trigger" style="color: white">Change Domain</a></li> Not needed-->

                 @if(\Illuminate\Support\Facades\Auth::user()->role==1)
                 <li><a href="{{ url('/admin/show/users') }}">Show all users</a></li>
                 <li><a href="{{ url('/admin/problem/add') }}">Add Problem</a></li>
                 <li><a href="{{ url('/admin/dashboard') }}">Admin Dashboard</a></li>
                 <li><a href="{{ url('/admin/users/shortlist') }}">Shortlist</a></li>

                @endif
                <li><a href="/user/profile">Profile</a></li>

                <li><a class="modal-trigger " href="#change-modal-trigger" >Choose Domain</a></li>

                <li><a href="/problems">Problems</a></li>

                <li><a class="modal-trigger " href="#instructions-modal">Instructions</a></li>
                <li><a href="http://gdgvitvellore.com" target="_blank">Contact Us</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </div>
    </nav>

     <ul class="dropdown-content" id ="dropdown-menu" >

                                    <li><a href="{{ url('/admin/show/users') }}">Show all users</a></li>
                                    <li><a href="{{ url('/admin/problem/add') }}">Add Problem</a></li>
                                    <li><a href="{{ url('/admin/dashboard') }}">Admin Dashboard</a></li>
                                    <li><a href="{{ url('/admin/users/shortlist') }}">Shortlist</a></li>
    </ul>
    <!-- Dropdown Structure -->
    <ul id='dropdown1' class='dropdown-content'>
        <li><a href="/user/profile">Profile</a></li>

         <li><a  href="#"  id="change-modal" style="color: white">Choose Domain</a></li>


        <li><a href="http://gdgvitvellore.com" target="_blank">Contact Us</a></li>
        <li><a href="/logout">Logout</a></li>

    </ul>
<style>
  #side-nav-trigger{
    margin-top: 0px;
    margin-left: 5px;
  }
#mobile-demo li a
{
  margin: 0px !important;
}
</style>
