@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <form name="#" id="add-problem-form" method="POST" action="{{ url('/admin/problem/add') }}">
      <div class="col m8 l8 push-l2 push-l2">
        <div class="row">
          <div class="col m12 l12">
            <div class="data-card">
              <div class="card-head">
                Add Problem
              </div>
              {{ csrf_field() }}
              <div class="card-body">
                <div class="row">
                  <div class="col m4 l4 s12">
                    <div class="prob-field form-group{{ $errors->has('domain') ? ' has-error' : '' }}">
                      Domain
                    </div>
                  </div>
                  <div class="col m6 l6 s12">
                    <div class="input-field">
                      <select id="add-proj-select" name="domain">
                        <option value=1>Technical</option>
                        <option value=2>Management</option>
                        <option value=3>Design</option>
                      </select>
                    </div>
                    @if ($errors->has('domain'))
                        <span class="help-block">
                        <strong>{{ $errors->first('domain') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="row">
                  <div class="col m4 l4 s12">
                    <div class="prob-field form-group{{ $errors->has('problem_statement') ? ' has-error' : '' }}">
                      Problem Statement
                    </div>
                  </div>
                  <div class="col m6 l6 s12">
                    <div class="input-field">
                        <textarea id="problemstatement-textarea" class="materialize-textarea" name="problem_statement"></textarea>
                    </div>
                    @if ($errors->has('problem_statement'))
                        <span class="help-block">
                        <strong>{{ $errors->first('problem_statement') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="row">
                  <div class="col m4 l4 s12">
                    <div class="prob-field">
                      Comment
                    </div>
                  </div>
                  <div class="col m6 l6 s12">
                    <div class="input-field">
                      <textarea id="comment-textarea" class="materialize-textarea" name="comments"></textarea>
                    </div>
                    @if ($errors->has('comments'))
                        <span class="help-block">
                        <strong>{{ $errors->first('comments') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col m2 l2 push-m4 push-l4">
                  <a onclick="$('#add-problem-form').submit();">
                  <div class="blue-button" id="view-submissions">
                    Add Problem
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
    
    <script>
  $('.dropdown-button').dropdown({
      inDuration: 100,
      outDuration: 100,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'right' // Displays dropdown with edge aligned to the left of button
    });

    $('#uname-dropdown').dropdown({
      inDuration: 100,
      outDuration: 100,
      constrain_width: true, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'right' // Displays dropdown with edge aligned to the left of button
    });
    $('select').material_select();
    $(".button-collapse").sideNav();
    $('#problemstatement-textarea').trigger('autoresize');
    $('#comment-textarea').trigger('autoresize');

  </script>
@endsection
<!-- <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/problem/add') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('domain') ? ' has-error' : '' }}">
                                <label for="domain" class="col-md-4 control-label">Domain</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="domain">
                                        <option value="1">Technical</option>
                                        <option value="2">Management</option>
                                        <option value="3">Design</option>
                                    </select>
                                    @if ($errors->has('domain'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('domain') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('problem_statement') ? ' has-error' : '' }}">
                                <label for="problem_statement" class="col-md-4 control-label">Problem Statement</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" name="problem_statement"></textarea>
                                    @if ($errors->has('problem_statement'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('problem_statement') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                                <label for="comments" class="col-md-4 control-label">Comments</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" name="comments"></textarea>
                                    @if ($errors->has('comments'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('comments') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i> Add Problem
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
