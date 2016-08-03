@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <h4>Name :{{$user->name}}</h4>
                        <h4>Regno :{{$user->regno}}</h4>
                        <h4>Domain :{{$user->domain}}</h4>
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


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
