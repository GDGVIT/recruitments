@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col m10 offset-m1">

                  <div class="panel panel-default">
                        @if($problemStatement->domain==1)
                            <div class="panel-heading">Technical</div>
                        @elseif($problemStatement->domain==2)
                            <div class="panel-heading">Management</div>
                        @elseif($problemStatement->domain==3)
                            <div class="panel-heading">Design</div>
                        @else
                            <p>No Domain</p>
                        @endif

                        <div class="panel-body">
                            <h3><b>Problem Statement</b></h3>
                            <p>{{$problemStatement->problem_statement}}</p>
                            @if($problemStatement->domain!=2)
                                <h3><b>Comments</b></h3>
                                <p>{{$problemStatement->comments}}</p>
                            @else
                            <h3><b>Rules</b></h3>
                                <p style="color: green;">Write a report on the following topic in about 500 words.</p>
                                <p style="color: green;">You can upload a doc/ppt file or you can share the link of the Google Document uploaded.</p>
                            @endif

                        </div>
                    </div>
                <div class="panel panel-default">

                        <div class="panel-heading"><b>Upload File</b></div>


                    <div class="panel-body">


                        <form action="/problem/upload" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <p style="color: red">You can either upload your file or can give the link below</p>
                            <p style="color: red">You can only submit your solution <b>once</b></p>

                            <input type="file"  name="submission">
                            <input type="hidden" name="questionId" value="{{$problemStatement->id}}">
                            <br>
                            <div class="col-md-6">
                                <label>Link to the file</label>
                                <input class="form-control" name = "url" type="text" placeholder="Link to the project source(Github) or document link">
                                @if ($errors->has('url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br>
                            <button class="btn btn-primary" type="submit">Upload Code</button>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
