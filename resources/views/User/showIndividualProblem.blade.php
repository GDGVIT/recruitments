@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/problems.css')}}">
    <link rel="stylesheet" href="{{url('css/individualproblem.css')}}">
@section('content')

    <link rel="stylesheet" href="{{url('css/individualproblem.css')}}">
   @extends('layouts.afterloginnav')
    <div class="question-card-container">
      <div class="individual-question-card">
        <div class="individual-card-header">
          <a href="{{url('/problems')}}" style="color: black;font-size: 2rem;-webkit-text-stroke: 5px white;position: relative; top: 5px"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
          &nbsp;&nbsp;<span class="back">Back to question list</span>
            @if($isAnswered)
                <span class="right question-difficulty">&nbsp; Answered</span>
            @else
                <span class="right question-difficulty">&nbsp; Not Answered</span>
            @endif
            @if($problemStatement->level==1)
                <span class="right question-difficulty">Difficulty: Easy | </span>
            @elseif($problemStatement->level==2)
                <span class="right question-difficulty">Difficulty: Medium | </span>
            @else
                <span class="right question-difficulty">Difficulty: Hard | </span>
            @endif
        </div>
        <div class="question-content">
          <p class="question-card-header">{{$problemStatement->problem_statement}}</p>
          <p class="question-description">{{$problemStatement->comments}}</p>
        </div>
      </div>
      <div class="individual-question-submission row">
        <form method="POST" action="/problem/upload" enctype="multipart/form-data">
        {{csrf_field()}}
          <div class="col s6 m6 l6"  style="border-right: 1px solid rgba(200,200,200,0.5);">
            <div class="input-field link" style="text-align: center">
            <input type="hidden" name="questionId" value="{{$problemStatement->id}}">
              <input type="radio" name="submitting-link" id="submitting-link" class="with-gap">
              <label for="submitting-link">Add link for solution
            </div>
            <div class="input-field" style="text-align: center">
              <input type="text"  id="link" name="url" placeholder="Please add http:// or https:// before the URL">
            </div>
          </div>
          <div class="col s6 m6 l6">
            <div class="input-field file" style="text-align: center">
            <input type="hidden" name="questionId" value="{{$problemStatement->id}}">
              <input type="radio" name="submitting-link" id="submitting-file" class="with-gap">
              <label for="submitting-file" id="upload-label">Upload the solution file
              </div>
              <div style="text-align: center;margin-top: 5%">
                <a href="#" class="file-upload" onclick="doOpen(event)">Upload</a>
                <input type="file" name="submission" id="upload_file_button" >
              </div>
            </div><br>
            <input type="text" name="upload-type" style="display: none">
            <button class="custom-submit" id="custom-submit" type="submit">Submit</button>
            <button class="custom-submit" id="custom-submit" type="submit">Submit</button>
        </form>
      </div>
    </div>

   <div id="change-modal" class="modal">
      <div class="modal-content">
        <h4 style="text-align: center">Change Domain</h4>
        <div class="input-field">
          <input type="checkbox" class="filled-in " name="change-technical" id="change-technical">
          <label for="change-technical">Technical
        </div>
        <div class="input-field">
          <input type="checkbox" class="filled-in " name="change-management" id="change-management">
          <label for="change-management">Management
        </div>
        <div class="input-field">
          <input type="checkbox" class="filled-in " name="change-technical" id="change-design">
          <label for="change-design">Design
        </div>
        <form action="/user/add/domain" method="POST">
          <input type="text" name="domains" style="display: none">
        </form>
        <br>
        <button class="custom-submit">Submit</button>
      </div>
    </div>
  </body>

     <script src="{{url('js/individualproblem.js')}}"></script>
    <script src="{{url('js/domainSelector.js')}}"></script>
@endsection
