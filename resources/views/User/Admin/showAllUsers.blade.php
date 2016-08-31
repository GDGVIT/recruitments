@extends('layouts.app')
@extends('layouts.afterloginnav')
<link rel="stylesheet" href="{{url('css/showuser.css')}}">

@section('content')
    
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
<!-- 
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
    </div>--}} -->
@endsection
