@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/problems.css')}}">

<link href="css/modal.css" rel="stylesheet">

 
@section('content')
 <nav>
        <div class="nav-wrapper problems-nav">
            <a href="/"><img src="{{url('images/gdglogo.png')}}" alt="GDG VIT Vellore" style="width: 15%;"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#"  id="change-modal-trigger" style="color: white">Change Domain</a></li>
                <li><a href="/problems" class="right" style="color: white">Problems</a></li>
                <li><a class='dropdown-button problems-nav-options' href='#' data-activates='dropdown1'><b>{{\Illuminate\Support\Facades\Auth::user()->name}}</b><span class="caret"></span></a>
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
    <div class="problems-tabs row">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#technical" data-value="1">Technical (<span class="number" data-domain="1">18</span>)</a></li>
        <li class="tab col s3"><a href="#management" data-value="2">Management (<span class="number" data-domain="2">40</span>)</a></li>
        <li class="tab col s3"><a href="#design" data-value="3">Design (<span class="number" data-domain="3">6</span>)</a></li>
      </ul>
    <div class="container-fluid">
        <div class="row">
            <div class="col m12 l12">
                <div id="technical" class="col s12 questions" data-for="1">
                <div class="question-card">
          <p class="question-card-header">Question title</p>
          <p class="question-description">Some txt in this box to fill space and know how the text formatting looks with the bold question at the top. This will not be neccessarily available in all the cards and blah blah blah. Nothing more to fill this card but need to test it with more lines so as to understand the aesthetic of this card. Alright so this much will be enough or maybe one more line!</p>
          <hr>
          <span class="question-difficulty">Difficulty: Easy</span><span class="right question-answered">Answered</span>
        </div>
               
                </div>
                <div id="management" class="col s12 questions" data-for="2">
                <div class="question-card">
          <p class="question-card-header">Question title2</p>
          <p class="question-description">Some txt in this box to fill space and know how the text formatting looks with the bold question at the top. This will not be neccessarily available in all the cards and blah blah blah. Nothing more to fill this card but need to test it with more lines so as to understand the aesthetic of this card. Alright so this much will be enough or maybe one more line!</p>
          <hr>
          <span class="question-difficulty">Difficulty: Easy</span><span class="right question-answered">Answered</span>
        </div>
                
                </div>
                <div id="design" class="col s12 questions" data-for="3">
                <div class="question-card">
          <p class="question-card-header">Question title3</p>
          <p class="question-description">Some txt in this box to fill space and know how the text formatting looks with the bold question at the top. This will not be neccessarily available in all the cards and blah blah blah. Nothing more to fill this card but need to test it with more lines so as to understand the aesthetic of this card. Alright so this much will be enough or maybe one more line!</p>
          <hr>
          <span class="question-difficulty">Difficulty: Easy</span><span class="right question-answered">Answered</span>
        </div>
                
                </div>
               
            </div>
        </div>
    </div>
    <div id="change-modal" class="modal">
      <div class="modal-content">
        <h4 style="text-align: center">Change Domain</h4>
        <div class="input-field">
          <input type="checkbox" class="filled-in" name="change-technical" id="change-technical">
          <label for="change-technical">Technical
        </div>
        <div class="input-field">
          <input type="checkbox" class="filled-in" name="change-management" id="change-management">
          <label for="change-management">Management
        </div>
        <div class="input-field">
          <input type="checkbox" class="filled-in" name="change-technical" id="change-design">
          <label for="change-design">Design
        </div>
        <form action="http://localhost:8000/user/add/domain" method="POST">
          <input type="text" name="domains" style="display: none">
        </form>
        <br>
        <button class="custom-submit">Submit</button>
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
