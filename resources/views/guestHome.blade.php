@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/problems.css')}}">
@extends('layouts.afterloginnav')
<link href="css/modal.css" rel="stylesheet">

@extends('layouts.afterloginnav')
@section('content')
  

     <div id="instructions-modal" class="modal">
        <div class="modal-content">
          <h4>Instructions</h4>
          <p>Here go the instructions for the recruitment process</p>
        </div>
        <div class="modal-footer">
          <a class=" modal-action modal-close btn-flat">Close</a>
        </div>
      </div>
@endsection
