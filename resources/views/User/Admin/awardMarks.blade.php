@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/problems.css')}}">


@extends('layouts.afterloginnav')
@section('content')
   <div class="container">
    <div class="row">
      <form name="#" id="award-form" method="POST" action="{{ url('/admin/update/marks') }}">
      {{ csrf_field() }}
      <div class="col m8 l8 push-l2 push-l2">
        <div class="row">
          <div class="col m12 l12">
            <div class="data-card">
              <div class="card-head">
                Award Marks
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col m4 l4 s12">
                    <div class="prob-field form-group{{ $errors->has('marks') ? ' has-error' : '' }}">
                      Marks
                    </div>
                  </div>
                  <div class="col m6 l6 s12">
                    <div class="input-field form-group{{ $errors->has('behance') ? ' has-error' : '' }}">
                      <input type="text" name="marks">
                    </div>
                  </div>
                </div>
              </div>
              <input type="hidden" name = "userId" value="{{app('request')->input('userId')}}">
                                <input type="hidden" name="questionId" value="{{app('request')->input('questionId')}}">
              <div class="row">
                <div class="col m2 l2 push-m4 push-l4">
                  <a onclick="$('#award-form').submit();">
                  <div class="blue-button" id="view-submissions">
                    Award
                  </div>
                  </a>
                </div>
              </div>
            </div>
            <br>
          </div>
      </div>
    </div>
  </form>
  </div>
  </div>
@endsection<!-- 
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
    </div> -->