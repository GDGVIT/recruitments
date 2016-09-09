@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/problems.css')}}">

<link href="{{url('css/modal.css')}}" rel="stylesheet">

@extends('layouts.afterloginnav')
@section('content')


    <div class="problems-tabs row">

        <p style="color: red; text-align: center;">Please choose your domain. Hover on your profile and select "Choose Domain"</p>
        <p style="animation: blinker 1s linear infinite;color: red; text-align: center;">We're not accepting solutions anymore. Thanks for participating.</p>
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#technical" data-value="1">Technical (<span class="number" data-domain="1">{{$technicalProblemsCount}}</span>)</a></li>
        <li class="tab col s3"><a href="#management" data-value="2">Management (<span class="number" data-domain="2">{{$managementProblemsCount}}</span>)</a></li>
        <li class="tab col s3"><a href="#design" data-value="3">Design (<span class="number" data-domain="3">{{$designProblemsCount}}</span>)</a></li>
      </ul>
    <div class="container-fluid">
        <div class="row">
            <div class="col m12 l12 s12">
                <div id="technical" class="col s12 questions" data-for="1">
               @foreach($problemArray[0] as $problem)

            <div class="question-card">
                <p class="question-card-header">{{$problem->problem_statement}}</p>
                <p class="question-description">{!!$problem->comments!!}</p>
                 @if(!in_array($problem->id,$answeredArray))

                            <span class="question-difficulty"><a href="/problem/show/{{$problem->id}}"></a></span>

                 @endif
                <hr>
                @if($problem->level==1)
                    <span class="question-difficulty">Easy</span>
                @elseif($problem->level==2)
                    <span class="question-difficulty">Medium</span>
                @else
                    <span class="question-difficulty">Hard</span>
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
                  <ul class="collapsible popout" data-collapsible="accordion">
                    <li>
                      <div class="collapsible-header" style="text-align:center;"><b>Click here for instructions for sponsorships</b></div>
                      <div class="collapsible-body">

                        <div class="user-solution" style="padding:1em;">
                          <h7>
                            <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                                  Write a report on any one of the companies below could be a potential sponsor for Google Developers Group VIT.
                                  <br><br>It should include the following:
                                  <br>
                                  <ul class="instruction-mgmt">
                                    <li>Brief introduction of the company
                                    <li>Possible ways of communication with the company for sponsorship
                                    <li>If the company has an existing sponsorship portal or a University panel
                                    <li>Detailed analysis on how the company can benefit by sponsoring GDG
                                  </ul>
                                    <br>
                                    <b>  Important aspects that need to kept in mind while writing the report:</b>
                                      <br>
                                    <ul class="instruction-mgmt">
                                      <li>GDG is a Non-Profit Organization (NPO)
                                      <li>The sponsorship can be in any form i.e., Monetary/In-Kind
                                    </ul>
                                    <br>
                                    Your writing and analytical skills will be tested in this task.
                                    <br>Good Luck</h7><br><br>
                          <div style="display:flex">


                            <div style="margin-left:10px;">

                          </div>
                          </div>


                        </div>


                      </div>
                    </li>
                  </ul>

                    @foreach($problemArray[1] as $problem)

                        <div class="question-card">
                            <p class="question-card-header">{{$problem->problem_statement}}</p>
                            <p class="question-description">{!!$problem->comments!!}</p>
                             @if(!in_array($problem->id,$answeredArray))

                            <span class="question-difficulty"><a href="/problem/show/{{$problem->id}}"></a></span>

                            @endif
                            <hr>

                            <span class="question-difficulty"> {{$problem->category}}</span>

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
                            <p class="question-description">{!!$problem->comments!!}</p>
                            @if(!in_array($problem->id,$answeredArray))

                            <span class="question-difficulty"><a href="/problem/show/{{$problem->id}}"></a></span>

                            @endif
                            <hr>
                            @if($problem->level==1)
                                <span class="question-difficulty">Easy</span>
                            @elseif($problem->level==2)
                                <span class="question-difficulty">Medium</span>
                            @else
                                <span class="question-difficulty">Hard</span>
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
        <form action="/user/add/domain" method="POST">
        {{csrf_field()}}
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
           <ul><li> Make sure your work is genuine and not copied from other sources<b>-10 marks will be awarded if you are found to copy.</b></li>
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
