@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/problems.css')}}">
    <link rel="stylesheet" href="{{url('css/individualproblem.css')}">
@section('content')
 <div class="problems-nav row">
      <a href="/home"><img src="images/gdglogo.png" alt="GDG VIT Vellore" style="width: 15%;"></a>
      <a href="#" class="right" id="change-modal-trigger" style="color: white">Change Domain</a>
      <a class='dropdown-button btn right problems-nav-options' href='#' data-activates='dropdown1'><b>Rajat Mukati</b><br>15BCE0529<span class="caret"></span></a>

      <!-- Dropdown Structure -->
      <ul id='dropdown1' class='dropdown-content'>
        <li><a class="modal-trigger" href="#instructions-modal">Instructions</a></li>
        <li><a href="http://www.gdgvitvellore.com/" target="_blank">Contact Us</a></li>
        <li><a href="/logout">Logout</a></li>
      </ul>

      <div id="instructions-modal" class="modal">
        <div class="modal-content">
          <h4>Instructions</h4>
          <p>Here go the instructions for the recruitment process</p>
        </div>
        <div class="modal-footer">
          <a class=" modal-action modal-close btn-flat">Close</a>
        </div>
      </div>

    </div>
    <div class="question-card-container">
      <div class="individual-question-card">
        <div class="individual-card-header">
          <a href="{{url('/problems')}}" style="color: black;font-size: 2rem;-webkit-text-stroke: 3px white;position: relative; top: 5px"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
          &nbsp;&nbsp;Back to question list
          <span class="right question-difficulty">Difficulty: Easy | Not Answered</span>
        </div>
        <div class="question-content">
          <p class="question-card-header">Question title</p>
          <p class="question-description">Some txt in this box to fill space and know how the text formatting looks with the bold question at the top. This will not be neccessarily available in all the cards and blah blah blah. Nothing more to fill this card but need to test it with more lines so as to understand the aesthetic of this card. Alright so this much will be enough or maybe one more line!</p>
        </div>
      </div>
      <div class="individual-question-submission row">
        <form method="POST" action="/">
          <div class="col s6 m6 l6"  style="border-right: 1px solid rgba(200,200,200,0.5);">
            <div class="input-field link" style="text-align: center">
              <input type="radio" name="submitting-link" id="submitting-link" class="with-gap">
              <label for="submitting-link">Add link for solution
            </div>
            <div class="input-field" style="text-align: center">
              <input type="text"  id="link" name="url">
            </div>
          </div>
          <div class="col s6 m6 l6">
            <div class="input-field file" style="text-align: center">
              <input type="radio" name="submitting-link" id="submitting-file" class="with-gap">
              <label for="submitting-file">Upload the solution file
              </div>
              <div style="text-align: center;margin-top: 5%">
                <a href="#" class="file-upload">Upload</a>
                <input type="file" name="submission" style="display: none;">
              </div>
            </div>
            <button class="custom-submit">Submit</button>
        </form>
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
          <input type="hidden" name="domains">
        </form>
        <br>
        <button class="custom-submit" type="submit">Submit</button>
      </div>
    </div>
  </body>
 
   <!--  <div class="container">
        <div class="row">
            <div class="col m10 offset-m1">

                  <div class="panel panel-default">
                        @if($problemStatement->domain==1)
                            <div class="panel-heading">Technical</div>
                        @elseif($problemStatement->domain==2)
                            <div class="panel-heading">Management</div>
                        @elseif($problemStatement->domain==3)
                            <div class="panel-heading">Design</div>
                        @else
                            <p>No Domain</p>
                        @endif

                        <div class="panel-body">
                            <h3><b>Problem Statement</b></h3>
                            <p>{{$problemStatement->problem_statement}}</p>
                            @if($problemStatement->domain!=2)
                                <h3><b>Comments</b></h3>
                                <p>{{$problemStatement->comments}}</p>
                            @else
                            <h3><b>Rules</b></h3>
                                <p style="color: green;">Write a report on the following topic in about 500 words.</p>
                                <p style="color: green;">You can upload a doc/ppt file or you can share the link of the Google Document uploaded.</p>
                            @endif

                        </div>
                    </div>
                <div class="panel panel-default">

                        <div class="panel-heading"><b>Upload File</b></div>


                    <div class="panel-body">


                        <form action="/problem/upload" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <p style="color: red">You can either upload your file or can give the link below</p>
                            <p style="color: red">You can only submit your solution <b>once</b></p>

                            <input type="file"  name="submission">
                            <input type="hidden" name="questionId" value="{{$problemStatement->id}}">
                            <br>
                            <div class="col-md-6">
                                <label>Link to the file</label>
                                <input class="form-control" name = "url" type="text" placeholder="Link to the project source(Github) or document link">
                                @if ($errors->has('url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br>
                            <button class="btn btn-primary" type="submit">Upload Code</button>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div> -->
     <script src="{{url('js/individualproblem.js')}}"></script>
    <script src="{{url('js/domainSelector.js')}}"></script>
@endsection
