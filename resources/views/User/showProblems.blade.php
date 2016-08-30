@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/problems.css')}}">

<link href="{{url('css/modal.css')}}" rel="stylesheet">


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
        <li class="tab col s3"><a class="active" href="#technical" data-value="1">Technical (<span class="number" data-domain="1">{{$technicalProblemsCount}}</span>)</a></li>
        <li class="tab col s3"><a href="#management" data-value="2">Management (<span class="number" data-domain="2">{{$managementProblemsCount}}</span>)</a></li>
        <li class="tab col s3"><a href="#design" data-value="3">Design (<span class="number" data-domain="3">{{$designProblemsCount}}</span>)</a></li>
      </ul>
    <div class="container-fluid">
        <div class="row">
            <div class="col m12 l12">
                <div id="technical" class="col s12 questions" data-for="1">
               @foreach($problemArray[0] as $problem)

            <div class="question-card">
                <p class="question-card-header">{{$problem->problem_statement}}</p>
                <p class="question-description">{{$problem->comments}}</p>
                <span class="question-difficulty"><a href="/problem/show/{{$problem->id}}" >Attempt Problem</a></span>
                <hr>
                @if($problem->level==1)
                    <span class="question-difficulty">Difficulty: Easy</span>
                @elseif($problem->level==2)
                    <span class="question-difficulty">Difficulty: Medium</span>
                @else
                    <span class="question-difficulty">Difficulty: Hard</span>
                @endif
                <span class="question-difficulty">| {{$problem->category}}</span>
                
                @if(in_array($problem->id,$answeredArray))
                    <span class="right question-answered">Answered</span>
                @else
                    <span class="right question-answered">Unanswered</span>

                @endif
            </div>


                   @endforeach
                </div>
                <div id="management" class="col s12 questions" data-for="2">
                    @foreach($problemArray[1] as $problem)

                        <div class="question-card">
                            <p class="question-card-header">{{$problem->problem_statement}}</p>
                            <p class="question-description">{{$problem->comments}}</p>
                            <span class="question-difficulty"><a href="/problem/show/{{$problem->id}}" >Attempt Problem</a></span>
                            <hr>
                            @if($problem->level==1)
                                <span class="question-difficulty">Difficulty: Easy</span>
                            @elseif($problem->level==2)
                                <span class="question-difficulty">Difficulty: Medium</span>
                            @else
                                <span class="question-difficulty">Difficulty: Hard</span>
                            @endif
                            <span class="question-difficulty">| {{$problem->category}}</span>
                            
                            @if(in_array($problem->id,$answeredArray))
                                <span class="right question-answered">Answered</span>
                            @else
                                <span class="right question-answered">Unanswered</span>

                            @endif
                        </div>

                    @endforeach
                </div>
                <div id="design" class="col s12 questions" data-for="3">
               @foreach($problemArray[2] as $problem)

                        <div class="question-card">
                            <p class="question-card-header">{{$problem->problem_statement}}</p>
                            <p class="question-description">{{$problem->comments}}</p>
                            <span class="question-difficulty"><a href="/problem/show/{{$problem->id}}">Attempt Problem</a></span>
                            <hr>
                            @if($problem->level==1)
                                <span class="question-difficulty">Difficulty: Easy</span>
                            @elseif($problem->level==2)
                                <span class="question-difficulty">Difficulty: Medium</span>
                            @else
                                <span class="question-difficulty">Difficulty: Hard</span>
                            @endif
                            <span class="question-difficulty">| {{$problem->category}}</span>
                            
                            @if(in_array($problem->id,$answeredArray))
                                <span class="right question-answered">Answered</span>
                            @else
                                <span class="right question-answered">Unanswered</span>

                            @endif

                        </div>

                    @endforeach
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
