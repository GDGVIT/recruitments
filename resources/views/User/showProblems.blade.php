@extends('layouts.app')
<link rel="stylesheet" href="css/problems.css">
    <link rel="stylesheet" href="css/individualproblem.css">
<link href="css/modal.css" rel="stylesheet">
<script src="js/individualproblem.js"></script>
<script src="js/domainSelector.js"></script>
<script src="https://use.fontawesome.com/8aa6edd1c8.js"></script>
  <script>
  $('#change-modal-trigger').click(function(){
    $('#change-modal').openModal();
  });
  $('.modal-trigger').leanModal();
  </script>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col m10 offset-m1">

                @foreach($problemArray as $domainProblems)
                    @foreach($domainProblems as $problem)
                    <div class="panel panel-default">
                        <div class="panel-heading">

                            <button class="btn btn-primary" onclick="window.location.href='problem/show/{{$problem->id}}'">Attempt Problem</button>
                        </div>

                        <div class="panel-body">
                            <p><b>Problem Statement</b><br>
                            {{$problem->problem_statement}}</p>
                            <p><b>Comments</b><br>
                            {{$problem->comments}}</p>

                        </div>
                    </div>
                    @endforeach
                @endforeach

                {{--
                @foreach($problems as $problemStatement)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        
                            <button class="btn btn-primary" onclick="window.location.href='problem/show/{{$problemStatement->id}}'">Attempt Problem</button>
                        </div>

                        <div class="panel-body">
                            <h3><b>Problem Statement</b></h3>
                            <p>{{$problemStatement->problem_statement}}</p>
                            <h3><b>Comments</b></h3>
                            <p>{{$problemStatement->comments}}</p>

                        </div>
                    </div>
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
@endsection
