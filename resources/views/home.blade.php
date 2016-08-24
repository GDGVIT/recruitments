@extends('layouts.app')

     <link rel="stylesheet" href="{{url ('css/sweetalert2.css')}}">
@section('content')
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
              Welcome to <b>GDG VIT</b>. You will be notified when we start our recruitments.<br>
                Till then, you can prepare for the recruitments. To help you out, we have some useful links below.
            </p>
              <div class="list-group">
                  <li><a href="https://developer.yahoo.com/everything.html" class="list-group-item">Publically available APIs</a></li>
                  <li><a href="https://www.youtube.com/watch?v=U8GBXvdmHT4" class="list-group-item">Github Basics</a></li>
                  <li> <a href="http://www.codeguru.com/csharp/csharp/cs_internet/displaying-real-time-data-using-html5-and-asp.net.htm" class="list-group-item">Displaying real time data</a></li>
                  <li><a href="https://blog.kissmetrics.com/black-belt-adwords-techniques/" class="list-group-item">Google AdWords</a></li>
                  <li> <a href="https://netbeans.org/kb/docs/php/wish-list-lesson1.html" class="list-group-item">Create a Database driven webapp</a></li>
                  <li><a href="https://realpython.com/blog/python/python-web-applications/" class="list-group-item">Python Web Applications</a></li>
                  <li><a href="http://www.oodesign.com/design-principles.html" class="list-group-item">Object Oriented Design Principals</a></li>

              </div>

          </div>
          <div class="second-content" id="second-content">
            <div class="row"><div class="text-center"><img src="images/logo-big.png"></div></div>
            <p style="padding: 10%;font-weight: 300;font-size: 110%;text-align: center">

              <div class="list-group">
                  <li><a href="https://developer.yahoo.com/everything.html" class="list-group-item">Publically available APIs</a></li>
                  <li><a href="https://www.youtube.com/watch?v=U8GBXvdmHT4" class="list-group-item">Github Basics</a></li>
                  <li> <a href="http://www.codeguru.com/csharp/csharp/cs_internet/displaying-real-time-data-using-html5-and-asp.net.htm" class="list-group-item">Displaying real time data</a></li>
                  <li><a href="https://blog.kissmetrics.com/black-belt-adwords-techniques/" class="list-group-item">Google AdWords</a></li>
                  <li> <a href="https://netbeans.org/kb/docs/php/wish-list-lesson1.html" class="list-group-item">Create a Database driven webapp</a></li>
                  <li><a href="https://realpython.com/blog/python/python-web-applications/" class="list-group-item">Python Web Applications</a></li>
                  <li><a href="http://www.oodesign.com/design-principles.html" class="list-group-item">Object Oriented Design Principals</a></li>

              </div>

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
@endsection
