@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                    @foreach($submissions as $submission)
                    <div class="panel panel-default">

                            <div class="panel-heading">Question {{$submission->problem_id}}</div>


                        <div class="panel-body">
                        <p>Marks Awarded : {{$submission->marks}}</p>
                            <p>Submitted at : {{$submission->created_at}}</p>
                            <p>Link : <a href="{{$submission->url}}">Here</a> </p>
                            @if(!$submission->checked)
                            <form action = "/admin/award/marks" method="GET">
                                {{csrf_field()}}
                                <input type="hidden" name="userId" value="{{$submission->user_id}}">
                                <input type="hidden" name="questionId" value="{{$submission->problem_id}}">
                                <button class="btn btn-primary" type="submit" >Award Marks</button>
                            </form>
                            @endif
                    </div>
                    </div>
                    @endforeach

            </div>
        </div>
    </div>
@endsection
