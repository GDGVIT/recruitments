@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/problems.css')}}">


@section('content')
   <div class="container">
    <div class="row">
      <form name="#" id="award-form" method="POST" action="{{ url('change/password') }}">
      {{ csrf_field() }}
      <div class="col m8 l8 push-l2 push-l2">
        <div class="row">
          <div class="col m12 l12">
            <div class="data-card">
              <div class="card-head">
                <h3>Verify Token</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col m4 l4 s12">
                    <div class="prob-field form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                     <h5> New Password</h5>
                    </div>
                  </div>
                  <div class="col m6 l6 s12">
                    <div class="input-field form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <input type="password" name="newPassword" required>
                      <input type="hidden" name="access_token" value="{{$token}}">
                    </div>
                  </div>

                  <button type = "submit" class="btn btn-primary">Change Password</button>
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
@endsection
