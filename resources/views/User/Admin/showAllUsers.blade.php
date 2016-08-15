@extends('layouts.app')

@section('content')
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
    </div>
@endsection
