@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <p>Name :{{$user->name}}</p>
                        <p>Regno :{{$user->regno}}</p>
                        <p>Domain :{{$user->domain}}</p>
                        <p>Why GDG :{{$user->why_gdg}}<p/>
                        <p>experience :{{$user->experience}}</p>
                        <p>LinkedIn :{{$user->linkedin}}</p>
                        <p>Github :{{$user->github}}</p>
                        <p>behance :{{$user->behance}}</p>
                        @if($user->selected)
                            <p>Selected for the next round</p>
                            @else
                             <p>Selected - No status</p>
                        @endif
                        <p>Marks Awarded : {{$totalMarks}}</p>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
