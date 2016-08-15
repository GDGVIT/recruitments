@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col m10 offset-m1">

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

            </div>
        </div>
    </div>
@endsection
