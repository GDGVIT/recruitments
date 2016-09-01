@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/problems.css')}}">
    <link rel="stylesheet" href="{{url('css/individualproblem.css')}}">
@section('content')

    <link rel="stylesheet" href="{{url('css/individualproblem.css')}}">
   
    <div class="question-card-container" style="min-height:270px;">
      <div class="individual-question-card">
        <div class="individual-card-header">
          
          <span><h5>Please <a href="/login">login</a> to attempt the problem.</h5></span>

            
        </div>
        <div class="question-content">
          <p class="question-card-header">{{$problemStatement->problem_statement}}</p>
          <p class="question-description">{{$problemStatement->comments}}<hr>
          @if($problemStatement->level==1)
                <span class="left "> Easy | </span>
            @elseif($problemStatement->level==2)
                <span class="left "> Medium | </span>
            @else
                <span class="left "> Hard | </span>
            @endif
           <span class="left ">{{$problemStatement->category}}</span>
           
           
          </p>
        </div>
        

            
      </div>
     
    </div>

   
  </body>

     <script src="{{url('js/individualproblem.js')}}"></script>
    <script src="{{url('js/domainSelector.js')}}"></script>
@endsection
