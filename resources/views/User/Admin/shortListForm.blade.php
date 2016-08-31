@extends('layouts.app')
@extends('layouts.afterloginnav')
<link rel="stylesheet" href="{{url('css/problems.css')}}">
@section('content')
    <div class="container-fliud">
        <div class="row">
            <div class="col m8 offset-m2">
                <div class="question-card">
                    <div class="question-header">Shortlist Prople</div>
                    <div class="question-description">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/users/shortlist') }}">
                            {{ csrf_field() }}


                            <div class="form-group{{ $errors->has('people') ? ' has-error' : '' }}">
                                <label for="people" class="col m4 control-label">Number of People you want to shortlist</label>


                                <div class="col m6">

                                    <input type="text" class="form-control" name="number">



                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('people') ? ' has-error' : '' }}">
                                <label for="people" class="col m4 control-label">Domain</label>


                                <div class="col m6">

                                    <select class="form-control" name="domain">
                                        <option value="1">Technical</option>
                                        <option value="2">Mangement</option>
                                        <option value="3">Design</option>
                                    </select>

                                </div>
                            </div>




                                <br>
                                 <div class="form-group">
                                <div class="col m6 offset-m4">
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
