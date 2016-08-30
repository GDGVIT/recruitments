@extends('layouts.app')
<link rel="stylesheet" href="css/materialize.min.css">
<link rel="stylesheet" href="css/problems.css">
<link rel="stylesheet" href="css/individualproblem.css">
<link rel="stylesheet" href="css/showuser.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


<script src="js/jquery.js"></script>
<script src="js/materialize.min.js"></script>
@section('content')
    <div class="problems-nav row">
        <a href="/"><img src="images/gdglogo.png" alt="GDG VIT Vellore" style="width: 15%;"></a>
        <a class='dropdown-button btn right problems-nav-options' href='#' data-activates='dropdown1'><b>Rajat Mukati</b><br>15BCE0529<span class="caret"></span></a>

        <!-- Dropdown Structure -->
        <ul id='dropdown1' class='dropdown-content'>
            <li><a href="/logout">Logout</a></li>
        </ul>
    </div>

    <div class="row">
        <div class="col m10 l10 s10 push-s1 push-l1 push-m1">
            <div class="row user-row">
                <div class="col m3 l3 s12">
                    <div class="user-container">
                        <div class="user-card">
                            <div class="user-card-header">
                                Rajat Mukati<br><span>15BCE0001</span>
                            </div>
                            <div class="user-card-data">
                                Technical:&nbsp<span>0</span><br>
                                Management:&nbsp<span>20</span><br>
                                Design:&nbsp<span>8</span><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    <script>
        $('.problems-nav-options').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrain_width: true, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: true, // Displays dropdown below the button
            alignment: 'left' // Displays dropdown with edge aligned to the left of button
        });

        $('.user-card').click(function(){
            window.open('view-user.html','_self');
        });

        $('.modal-trigger').leanModal();
    </script>
    </HTML>

    {{--
    <div class="container">
        <div class="row">
            <div class="col m10 offset-m1">

                    @foreach($users as $user)
                    <div class="panel panel-default">
                        @if($user->domain==1)
                            <div class="panel-heading">{{$user->name}} (Technical)</div>
                        @elseif($user->domain==2)
                            <div class="panel-heading">{{$user->name}} (Management)</div>
                        @elseif($user->domain==3)
                            <div class="panel-heading">{{$user->name}} (Design)</div>
                        @else
                            <p>No Domain</p>
                        @endif

                            <div class="panel-body">
                                <h4>Regno :{{$user->regno}}</h4>
                                <h4>Why GDG :{{$user->why_gdg}}</h4>
                                <h4>experience :{{$user->experience}}</h4>
                                <h4>LinkedIn :{{$user->linkedin}}</h4>
                                <h4>Github :{{$user->github}}</h4>
                                <h4>behance :{{$user->behance}}</h4>
                                @if($user->selected)
                                    <p>Selected for the next round</p>
                                @else
                                    <h4>Selected - No status</h4>
                                @endif

                                <button class="btn btn-primary" onclick="window.location.href='/user/{{$user->id}}/submissions'">View Submissions</button>


                            </div>

                    </div>
                    @endforeach

            </div>
        </div>
    </div>--}}
@endsection
