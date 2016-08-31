@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/problems.css')}}">
@extends('layouts.afterloginnav')
<link href="css/modal.css" rel="stylesheet">

@extends('layouts.afterloginnav')
@section('content')
  <div class="container-fluid">
  <div class="row">
    <div class="col m6 l6 s10 push-l3 push-m3 push-s1 custom-pull-up">
      <div class="center">
        <div class="home-head">
          Love Coding? Join GDG-VIT<br><span class="home-head-sub">Participate and compete with people across your campus</span>
        </div>
        <div class="row">
          <div class="login-form">
              <div class="col s12 m12 l12">
              <h4>About GDG</h4>
             	<p>Google Developers Groups was established in VIT on 28th July 2014. The group now has 60 Developers. Our agenda is to introduce new technologies to the students, develop new ideas and polish skills in every possible field including management our faculty coordinator is Prof .P Senthilnathan and has guided us along this journey.</p>
             	<a href="http://gdgvitvellore.com" class="custom-button">View More</a>
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
