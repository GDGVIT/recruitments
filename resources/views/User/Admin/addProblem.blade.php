@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/problem/insert') }}">
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
    </div>
@endsection
