@extends('layouts.app')
@extends('layouts.afterloginnav')
<link rel="stylesheet" href="{{url('css/showuser.css')}}">
<link rel="stylesheet" href="{{url('css/problems.css')}}">
@section('content')
    
    <div class="row">
      <div class="col m10 l10 s10 push-s1 push-l1 push-m1">
    <div class="row user-row">
      @foreach($users as $user)

      <div class="col m3 l3 s12" style="margin-top:20px;">
        <div class="user-container">
          <div class="user-card">
            <div class="user-card-header">
             {{$user->name}}<br><span>{{$user->regno}}</span>
            </div>
            <div class="user-card-data">
              Questions attempted :&nbsp<span>{{\App\User::find($user->id)->submissions->count()}}</span><br>
              <a href="/admin/show/user/{{\App\User::find($user->id)->id}}">Show details</a>

            </div>
          </div>
        </div>
      </div>
      @endforeach

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
