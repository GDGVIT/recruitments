@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

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
                            <h3><b>Comments</b></h3>
                            <p>{{$problemStatement->comments}}</p>

                        </div>
                    </div>
                <div class="panel panel-default">

                        <div class="panel-heading"><b>Upload File</b></div>


                    <div class="panel-body">


                        <form action="/problem/upload" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <p style="color: red">You can either upload your file or can give the link below</p>
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
