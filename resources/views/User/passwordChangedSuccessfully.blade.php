@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/problems.css')}}">


@section('content')
   <div class="container">
    <div class="row">
      <h5>Congratulations, your password has been successfully changed.</h5>
      <h6>To login, please click <a href="/login">here</a>. </h6>
  </div>
  </div>
@endsection
