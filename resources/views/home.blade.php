@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/problems.css')}}">

<link href="css/modal.css" rel="stylesheet">

@extends('layouts.afterloginnav')
@section('content')
  
    <div class="problems-tabs row">
    <h3 style="text-align:center">Recent Questions</h3>
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#technical" data-value="1">Technical <!-- (<span class="number" data-domain="1">18</span>) --></a></li>
        <li class="tab col s3"><a href="#management" data-value="2">Management<!--  (<span class="number" data-domain="2">40</span>) --></a></li>
        <li class="tab col s3"><a href="#design" data-value="3">Design <!-- (<span class="number" data-domain="3">6</span>) --></a></li>
      </ul>
    <div class="container-fluid">
        <div class="row">
            <div class="col m12 l12">
            
                <div id="technical" class="col s12 questions" data-for="1">
                <div class="question-card">
          <p class="question-card-header">{{$recentTechnicalQuestion->problem_statement}}</p>
          <p class="question-description">{{$recentTechnicalQuestion->comments}}</p>
                    <a href="{{url("/problem/show/$recentTechnicalQuestion->id")}}">Attempt Problem</a>
          <hr>
                    @if($recentTechnicalQuestion->level==1)
                            <span class="question-difficulty">Easy | </span>
                    @elseif($recentTechnicalQuestion->level==2)

                            <span class="question-difficulty">Medium | </span>
                    @else

                        <span class="question-difficulty">Hard | </span>
                    @endif
                    <span class="question-difficulty">{{$recentTechnicalQuestion->category}}</span>
        </div>
               
                </div>
                <div id="management" class="col s12 questions" data-for="2">
                <div class="question-card">
          <p class="question-card-header">{{$recentManagementQuestion->problem_statement}}</p>
          <p class="question-description">{{$recentManagementQuestion->comments}}</p>
                    <a href="{{url("/problem/show/$recentManagementQuestion->id")}}">Attempt Problem</a>
          <hr>
                    @if($recentManagementQuestion->level==1)
                            <span class="question-difficulty">Easy | </span>
                    @elseif($recentManagementQuestion->level==2)

                            <span class="question-difficulty">Medium | </span>
                    @else

                        <span class="question-difficulty">Hard | </span>
                    @endif
                    <span class="question-difficulty">{{$recentManagementQuestion->category}}</span>
        </div>
                
                </div>
                <div id="design" class="col s12 questions" data-for="3">
                 <div class="question-card">
          <p class="question-card-header">{{$recentDesignQuestion->problem_statement}}</p>
          <p class="question-description">{{$recentDesignQuestion->comments}}</p>
                    <a href="{{url("/problem/show/$recentDesignQuestion->id")}}">Attempt Problem</a>
          <hr>
                    @if($recentDesignQuestion->level==1)
                            <span class="question-difficulty">Easy | </span>
                    @elseif($recentDesignQuestion->level==2)

                            <span class="question-difficulty">Medium | </span>
                    @else

                        <span class="question-difficulty">Hard | </span>
                    @endif
                    <span class="question-difficulty">{{$recentDesignQuestion->category}}</span>
        </div>
                
                </div>
               
            </div>
            <br>
            <h3 style="text-align:center">Leader Board</h3>
            <div class="question-card"> 
              <table class="bordered striped responsive-table">
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="marks">Marks Earned</th>

          </tr>
        </thead>

        <tbody>
        @foreach($leadingStudents as $user)
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->marks}}</td>
          </tr>
        @endforeach

        </tbody>
      </table>
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
