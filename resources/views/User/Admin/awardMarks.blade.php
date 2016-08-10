@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Award Marks</div>
                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/update/marks') }}">
                            {{ csrf_field() }}


                            <div class="form-group{{ $errors->has('marks') ? ' has-error' : '' }}">
                                <label for="marks" class="col-md-4 control-label">Marks</label>


                                <div class="col-md-6">
                                   <input type="text" class="form-control" name="marks">


                                </div>
                            </div>
                            
                                <input type="hidden" name = "userId" value="{{app('request')->input('userId')}}">
                                <input type="hidden" name="questionId" value="{{app('request')->input('questionId')}}">
                                 <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i> Award
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
