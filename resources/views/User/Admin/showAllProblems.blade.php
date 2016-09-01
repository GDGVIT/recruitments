@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/problems.css')}}">

<link href="{{url('css/modal.css')}}" rel="stylesheet">

@extends('layouts.afterloginnav')
@section('content')


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
                                <p class="question-card-header">
                                    @if($problem->display)
                                        <a href="/admin/problem/delete/{{$problem->id}}">(<i class="fa fa-times  delete"></i>)</a>
                                    @else
                                        <a href="/admin/problem/undelete/{{$problem->id}}" >(<i class="fa fa-check  undelete">)</i></a>
                                    @endif
                                    {{$problem->problem_statement}}
                                </p>
                                <p class="question-description">{{$problem->comments}}</p>
                                
                                <hr>
                                @if($problem->level==1)
                                    <span class="question-difficulty">Difficulty: Easy</span>
                                @elseif($problem->level==2)
                                    <span class="question-difficulty">Difficulty: Medium</span>
                                @else
                                    <span class="question-difficulty">Difficulty: Hard</span>
                                @endif
                                <span class="question-difficulty">| {{$problem->category}}</span>



                            </div>


                        @endforeach
                    </div>
                    <div id="management" class="col s12 questions" data-for="2">
                        @foreach($problemArray[1] as $problem)

                            <div class="question-card">
                                <p class="question-card-header">
                                    @if($problem->display)
                                        <a href="/admin/problem/delete/{{$problem->id}}" >(<i class="fa fa-times  delete"></i>)</a>
                                    @else
                                        <a href="/admin/problem/undelete/{{$problem->id}}" >(<i class="fa fa-check  undelete"></i>)</a>
                                    @endif
                                    {{$problem->problem_statement}}</p>
                                <p class="question-description">{{$problem->comments}}</p>
                                
                                <hr>
                                @if($problem->level==1)
                                    <span class="question-difficulty">Difficulty: Easy</span>
                                @elseif($problem->level==2)
                                    <span class="question-difficulty">Difficulty: Medium</span>
                                @else
                                    <span class="question-difficulty">Difficulty: Hard</span>
                                @endif
                                <span class="question-difficulty">| {{$problem->category}}</span>
                     </div>

                        @endforeach
                    </div>
                    <div id="design" class="col s12 questions" data-for="3">
                        @foreach($problemArray[2] as $problem)

                            <div class="question-card">
                                <p class="question-card-header">
                                    @if($problem->display)
                                        <a href="/admin/problem/delete/{{$problem->id}}" >(<i class="fa fa-times  delete"></i>)</a>
                                    @else
                                        <a href="/admin/problem/undelete/{{$problem->id}}">( <i class="fa fa-check  undelete"></i>)</a>
                                    @endif
                                    {{$problem->problem_statement}}</p>
                                <p class="question-description">{{$problem->comments}}</p>
                                
                                <hr>
                                @if($problem->level==1)
                                    <span class="question-difficulty">Difficulty: Easy</span>
                                @elseif($problem->level==2)
                                    <span class="question-difficulty">Difficulty: Medium</span>
                                @else
                                    <span class="question-difficulty">Difficulty: Hard</span>
                                @endif
                                <span class="question-difficulty">| {{$problem->category}}</span>


                                
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
          <p>
          <b>Instructions for all the participants</b>
           <ul><li> Make sure your work is genuine and not copied from other sources</li>
            <li>We will be scrutinising your github profiles, so make sure you have all your interesting projects on there. </li></ul>


            <br>
            On top of all this we are looking for people who are having a zeal towards learning new things. 

            <h3>FAQ’s</h3>

           <b> Can I attempt any other domain after choosing one domain?</b><br>
              Yes, you can attempt questions from any of the domains<br>

           <b> Can I attempt more than problem statement</b><br>
              There is no restriction on the number of problems you can attempt.<br>

           <b> What is the deadline for submission of the projects/ reports/ designs/ articles?</b><br>
              The last date for submission of the<br>

           <b> When and how will I be notified of results?</b><br>
              We will be sending all the participants that get through to the next round through an     SMS whereas all the participants that did not make it will be receiving an email.<br>

           <b> What if I don’t find any questions from my domain?</b><br>
            Drop us an email on gdgvitvellore@gmail.com and we will send you a suitable problem statement for your domain. <br>

           <b> Are there any restrictions on who can participate?</b><br>
              Yes, this time we will be recruiting only Second (2) Years only.<br> 

           <b> I am not a second year, how can I particiapte?</b><br>
            We will not be able to recruit you if you are not a second year, but we will most certainly consider you for the next recruitment if you have the required skill.<br> 
          </p>
        </div>
        <div class="modal-footer">
          <a class=" modal-action modal-close btn-flat">Close</a>
        </div>
      </div>
@endsection
