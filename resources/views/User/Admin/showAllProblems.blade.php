@extends('layouts.app')

@section('content')
    <style>
        .delete{
            color: darkred;
        }
        .undelete {
            color: green;
        }
    </style>
    
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(count($problemStatements)>0)
                    @foreach($problemStatements as $problemStatement)
                    <div class="panel panel-default">
                        @if($problemStatement->domain==1)
                            <div class="panel-heading">Technical
                             </div>
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
                            @if($problemStatement->display)
                                <a href="/admin/problem/delete/{{$problemStatement->id}}" <i class="fa fa-times fa-2x delete"></i></a>
                            @else
                                <a href="/admin/problem/undelete/{{$problemStatement->id}}" <i class="fa fa-check fa-2x undelete"></i></a>
                            @endif
                        </div>

                    </div>
                    @endforeach
                @else
                <div>
                    <p style="color: red">No problems for your domain is available</p>
                </div>
                @endif
                {{--
                This <p> tag is not working... Have to fix it back..
                --}}

            </div>
        </div>
    </div>
@endsection
