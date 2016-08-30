@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/problems.css')}}">

<link href="{{url('css/modal.css')}}" rel="stylesheet">


@section('content')
    <div class="problems-nav row">
      <a href="/"><img src="images/gdglogo.png" alt="GDG VIT Vellore" style="width: 15%;"></a>
      <a href="#" class="right" id="change-modal-trigger" style="color: white">Change Domain</a>
      <a class='dropdown-button btn right problems-nav-options' href='#' data-activates='dropdown1'><b>Rajat Mukati</b><br>15BCE0529<span class="caret"></span></a>

      <!-- Dropdown Structure -->
      <ul id='dropdown1' class='dropdown-content'>
        <li><a class="modal-trigger" href="#instructions-modal">Instructions</a></li>
        <li><a href="http://gdgvitvellore.com" target="_blank">Contact Us</a></li>
        <li><a href="/logout">Logout</a></li>
      </ul>


    </div>
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
                @foreach($problemArray as $domainProblems)
                    @foreach($domainProblems as $problem)
                    <!-- <div class="panel panel-default">
                        <div class="panel-heading">

                            <button class="btn btn-primary" onclick="window.location.href='problem/show/{{$problem->id}}'">Attempt Problem</button>
                        </div>
                        <div class="question-card">
                          <p class="question-card-header">Question title</p>
                          <p class="question-description">{{$problem->problem_statement}}</p>
                          <hr>
                          <span class="question-difficulty">{{$problem->comments}}</span><span class="right question-answered">Answered</span>
                        </div>
                    </div> -->

        <div class="question-card">
          <p class="question-card-header">Question title</p>
          <p class="question-description">Some txt in this box to fill space and know how the text formatting looks with the bold question at the top. This will not be neccessarily available in all the cards and blah blah blah. Nothing more to fill this card but need to test it with more lines so as to understand the aesthetic of this card. Alright so this much will be enough or maybe one more line!</p>
          <hr>
          <span class="question-difficulty">Difficulty: Easy</span><span class="right question-answered">Answered</span>
        </div>
                    @endforeach
                @endforeach
                </div>
                <div id="management" class="col s12 questions" data-for="2">
                <div class="question-card">
          <p class="question-card-header">Question title2</p>
          <p class="question-description">Some txt in this box to fill space and know how the text formatting looks with the bold question at the top. This will not be neccessarily available in all the cards and blah blah blah. Nothing more to fill this card but need to test it with more lines so as to understand the aesthetic of this card. Alright so this much will be enough or maybe one more line!</p>
          <hr>
          <span class="question-difficulty">Difficulty: Easy</span><span class="right question-answered">Answered</span>
        </div>
                @foreach($problemArray as $domainProblems)
                    @foreach($domainProblems as $problem)

        <div class="question-card">
          <p class="question-card-header">Question title</p>
          <p class="question-description">Some txt in this box to fill space and know how the text formatting looks with the bold question at the top. This will not be neccessarily available in all the cards and blah blah blah. Nothing more to fill this card but need to test it with more lines so as to understand the aesthetic of this card. Alright so this much will be enough or maybe one more line!</p>
          <hr>
          <span class="question-difficulty">Difficulty: Easy</span><span class="right question-answered">Answered</span>
        </div>
                    @endforeach
                @endforeach
                </div>
                <div id="design" class="col s12 questions" data-for="3">
                <div class="question-card">
          <p class="question-card-header">Question title3</p>
          <p class="question-description">Some txt in this box to fill space and know how the text formatting looks with the bold question at the top. This will not be neccessarily available in all the cards and blah blah blah. Nothing more to fill this card but need to test it with more lines so as to understand the aesthetic of this card. Alright so this much will be enough or maybe one more line!</p>
          <hr>
          <span class="question-difficulty">Difficulty: Easy</span><span class="right question-answered">Answered</span>
        </div>
                @foreach($problemArray as $domainProblems)
                    @foreach($domainProblems as $problem)

        <div class="question-card">
          <p class="question-card-header">Question title</p>
          <p class="question-description">Some txt in this box to fill space and know how the text formatting looks with the bold question at the top. This will not be neccessarily available in all the cards and blah blah blah. Nothing more to fill this card but need to test it with more lines so as to understand the aesthetic of this card. Alright so this much will be enough or maybe one more line!</p>
          <hr>
          <span class="question-difficulty">Difficulty: Easy</span><span class="right question-answered">Answered</span>
        </div>
                    @endforeach
                @endforeach
                </div>
                {{--
                @foreach($problems as $problemStatement)
                    <!-- <div class="panel panel-default">
                        <div class="panel-heading">
                        
                            <button class="btn btn-primary" onclick="window.location.href='problem/show/{{$problemStatement->id}}'">Attempt Problem</button>
                        </div>

                        <div class="panel-body">
                            <h3><b>Problem Statement</b></h3>
                            <p>{{$problemStatement->problem_statement}}</p>
                            <h3><b>Comments</b></h3>
                            <p>{{$problemStatement->comments}}</p>

                        </div>
                    </div> -->
                @endforeach
--}}
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
