@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Shortlist Prople</div>
                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/users/shortlist') }}">
                            {{ csrf_field() }}


                            <div class="form-group{{ $errors->has('people') ? ' has-error' : '' }}">
                                <label for="people" class="col-md-4 control-label">Number of People you want to shortlist</label>


                                <div class="col-md-6">

                                    <input type="text" class="form-control" name="number">



                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('people') ? ' has-error' : '' }}">
                                <label for="people" class="col-md-4 control-label">Domain</label>


                                <div class="col-md-6">

                                    <select class="form-control" name="domain">
                                        <option value="1">Technical</option>
                                        <option value="2">Mangement</option>
                                        <option value="3">Design</option>
                                    </select>

                                </div>
                            </div>




                                <br>
                                 <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i> Shortlist
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
