@extends('layouts.app')
@extends('layouts.afterloginnav')
<link rel="stylesheet" href="{{url('css/problems.css')}}">
@section('content')

    <div class="container">
        <div class="row">

            <div class="col m10 s12 offset-m1">
                <div class="card">
                    <div class="card-title-main" style="padding-left: 20px;padding-top:10px;padding-bottom:10px;">
                        <span class="card-title"><h4 style="text-align:center">{{$user->name}}</h4></span>
                    </div>
                    <hr>
                    <div class="card-content">

                        <h6><b>Regno :</b><b>{{$user->regno}}</b></h6>
                        <h6><b>Domain :</b></h6>

                            @foreach($domains as $domain)
                            <ul>
                                @if($domain->domain_id=='1')
                                    <li>Technical</li>
                                @elseif($domain->domain_id=='2')
                                    <li>Management</li>
                                @elseif($domain->domain_id=='3')
                                    <li>Design</li>
                                @endif
                            </ul>
                            @endforeach
                        <hr>
                        <h6><b>Why GDG :</b></h6><div style="text-overflow: ellipsis;overflow: hidden;min-height: 90px;"> {{$user->why_gdg}}</div><hr>
                        <h6><b>Experience :</b></h6><div style="text-overflow: ellipsis; overflow: hidden;min-height: 90px;"> {{$user->experience}}</div><hr>
                        @if($user->selected)
                            <h6><b style="color:green">Selected for the next round</b></h6>
                        @else
                            <h6><b>Selected - No status</b></h6>
                        @endif
                        <br>
                        <h6><b>Marks Awarded : {{$totalMarks}}</b></h6>
                    </div>
                    <div class="card-action">
                        <a href="{{$user->linkedin}}"><i class="fa fa-linkedin fa-2x  " style="color:#5c6bc0 "></i></a>
                        <a href="{{$user->github}}"><i class="fa fa-github fa-2x  " style="color:#5c6bc0 "></i></a>
                        <a href="{{$user->behance}}"><i class="fa fa-behance fa-2x  " style="color:#5c6bc0 "></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="change-modal" class="modal">
      <div class="modal-content">
        <h4 style="text-align: center">Change Domain</h4>
        <div class="input-field">
          <input type="checkbox" class="filled-in" name="change-technical" id="change-technical">
          <label for="change-technical">Technical
        </div>
        <div class="input-field">
          <input type="checkbox" class="filled-in" name="change-management" id="change-management">
          <label for="change-management">Management
        </div>
        <div class="input-field">
          <input type="checkbox" class="filled-in" name="change-technical" id="change-design">
          <label for="change-design">Design
        </div>
        <form action="http://localhost:8000/user/add/domain" method="POST">
        {{ csrf_field() }}

          <input type="text"  id="#domain" name="domains" style="display: none">
        
        </form>
        <br>
        <button class="custom-submit">Submit</button>
      </div>
    </div>
@endsection
