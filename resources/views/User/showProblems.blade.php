@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col m10 offset-m1">

                @foreach($problemArray as $domainProblems)
                    @foreach($domainProblems as $problem)
                    <div class="panel panel-default">
                        <div class="panel-heading">

                            <button class="btn btn-primary" onclick="window.location.href='problem/show/1'">Attempt Problem</button>
                        </div>

                        <div class="panel-body">
                            <p><b>Problem Statement</b><br>
                            {{$problem->problem_statement}}</p>
                            <p><b>Comments</b><br>
                            {{$problem->comments}}</p>

                        </div>
                    </div>
                    @endforeach
                @endforeach

                {{--
                @foreach($problems as $problemStatement)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        
                            <button class="btn btn-primary" onclick="window.location.href='problem/show/{{$problemStatement->id}}'">Attempt Problem</button>
                        </div>

                        <div class="panel-body">
                            <h3><b>Problem Statement</b></h3>
                            <p>{{$problemStatement->problem_statement}}</p>
                            <h3><b>Comments</b></h3>
                            <p>{{$problemStatement->comments}}</p>

                        </div>
                    </div>
                @endforeach
--}}
            </div>
        </div>
    </div>
@endsection
