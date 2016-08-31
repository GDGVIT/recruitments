@extends('layouts.app')
@extends('layouts.afterloginnav')
<link rel="stylesheet" href="{{url('css/problems.css')}}">
@section('content')
    <style>
        .delete{
            color: darkred;
        }
        .undelete {
            color: green;
        }
    </style>
    <div class="problems-tabs row">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#technical" data-value="1">Technical (<span class="number" data-domain="1">18</span>)</a></li>
        <li class="tab col s3"><a href="#management" data-value="2">Management (<span class="number" data-domain="2">40</span>)</a></li>
        <li class="tab col s3"><a href="#design" data-value="3">Design (<span class="number" data-domain="3">6</span>)</a></li>
      </ul>
      <div id="technical" class="col s12 questions" data-for="1">
        <div class="question-card">
          <p class="question-card-header">Question title</p>
          <p class="question-description">Some txt in this box to fill space and know how the text formatting looks with the bold question at the top. This will not be neccessarily available in all the cards and blah blah blah. Nothing more to fill this card but need to test it with more lines so as to understand the aesthetic of this card. Alright so this much will be enough or maybe one more line!</p>
          <hr>
          <span class="question-difficulty">Difficulty: Easy</span><span class="right question-answered">Answered</span>
        </div>
        <div class="question-card">
          <p class="question-card-header">Question title</p>
          <p class="question-description">Some txt in this box to fill space and know how the text formatting looks with the bold question at the top. This will not be neccessarily available in all the cards and blah blah blah. Nothing more to fill this card but need to test it with more lines so as to understand the aesthetic of this card. Alright so this much will be enough or maybe one more line!</p>
          <hr>
          <span class="question-difficulty">Difficulty: Medium</span><span class="right question-answered">Answered</span>
        </div>
        <div class="question-card">
          <p class="question-card-header">Question title</p>
          <p class="question-description">Some txt in this box to fill space and know how the text formatting looks with the bold question at the top. This will not be neccessarily available in all the cards and blah blah blah. Nothing more to fill this card but need to test it with more lines so as to understand the aesthetic of this card. Alright so this much will be enough or maybe one more line!</p>
          <hr>
          <span class="question-difficulty">Difficulty: Hard</span><span class="right question-unanswered">Not Answered</span>
        </div>
      </div>
      <div id="management" class="col s12 questions" data-for="2">
        <div class="question-card">
          <p class="question-card-header">Question title</p>
          <p class="question-description">Some txt in this box to fill space and know how the text formatting looks with the bold question at the top. This will not be neccessarily available in all the cards and blah blah blah. Nothing more to fill this card but need to test it with more lines so as to understand the aesthetic of this card. Alright so this much will be enough or maybe one more line!</p>
          <hr>
          <span class="question-difficulty">Difficulty: Easy</span><span class="right question-answered">Answered</span>
        </div>
        <div class="question-card">
          <p class="question-card-header">Question title</p>
          <p class="question-description">Some txt in this box to fill space and know how the text formatting looks with the bold question at the top. This will not be neccessarily available in all the cards and blah blah blah. Nothing more to fill this card but need to test it with more lines so as to understand the aesthetic of this card. Alright so this much will be enough or maybe one more line!</p>
          <hr>
          <span class="question-difficulty">Difficulty: Medium</span><span class="right question-answered">Answered</span>
        </div>
        <div class="question-card">
          <p class="question-card-header">Question title</p>
          <p class="question-description">Some txt in this box to fill space and know how the text formatting looks with the bold question at the top. This will not be neccessarily available in all the cards and blah blah blah. Nothing more to fill this card but need to test it with more lines so as to understand the aesthetic of this card. Alright so this much will be enough or maybe one more line!</p>
          <hr>
          <span class="question-difficulty">Difficulty: Hard</span><span class="right question-unanswered">Not Answered</span>
        </div>
      </div>
      <div id="design" class="col s12 questions" data-for="3">
        <div class="question-card">
          <p class="question-card-header">Question title</p>
          <p class="question-description">Some txt in this box to fill space and know how the text formatting looks with the bold question at the top. This will not be neccessarily available in all the cards and blah blah blah. Nothing more to fill this card but need to test it with more lines so as to understand the aesthetic of this card. Alright so this much will be enough or maybe one more line!</p>
          <hr>
          <span class="question-difficulty">Difficulty: Easy</span><span class="right question-answered">Answered</span>
        </div>
        <div class="question-card">
          <p class="question-card-header">Question title</p>
          <p class="question-description">Some txt in this box to fill space and know how the text formatting looks with the bold question at the top. This will not be neccessarily available in all the cards and blah blah blah. Nothing more to fill this card but need to test it with more lines so as to understand the aesthetic of this card. Alright so this much will be enough or maybe one more line!</p>
          <hr>
          <span class="question-difficulty">Difficulty: Medium</span><span class="right question-answered">Answered</span>
        </div>
        <div class="question-card">
          <p class="question-card-header">Question title</p>
          <p class="question-description">Some txt in this box to fill space and know how the text formatting looks with the bold question at the top. This will not be neccessarily available in all the cards and blah blah blah. Nothing more to fill this card but need to test it with more lines so as to understand the aesthetic of this card. Alright so this much will be enough or maybe one more line!</p>
          <hr>
          <span class="question-difficulty">Difficulty: Hard</span><span class="right question-unanswered">Not Answered</span>
        </div>
      </div>
    </div>
  <!--   <div class="container">
        <div class="row">
            <div class="col m10 offset-m1">
                @if(count($problemStatements)>0)
                    @foreach($problemStatements as $problemStatement)
                    <div class="panel panel-default">
                        @if($problemStatement->domain==1)
                            <div class="panel-heading">Technical
                             </div>
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
                        <h3><b>Comments</b></h3>
                        <p>{{$problemStatement->comments}}</p>
                            @if($problemStatement->display)
                                <a href="/admin/problem/delete/{{$problemStatement->id}}" <i class="fa fa-times fa-2x delete"></i></a>
                            @else
                                <a href="/admin/problem/undelete/{{$problemStatement->id}}" <i class="fa fa-check fa-2x undelete"></i></a>
                            @endif
                        </div>

                    </div>
                    @endforeach
                @else
                <div>
                    <p style="color: red">No problems for your domain is available</p>
                </div>
                @endif
                {{--
                This <p> tag is not working... Have to fix it back..
                --}}

            </div>
        </div>
    </div> -->
@endsection
