@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/problems.css')}}">
@extends('layouts.afterloginnav')
@section('content')
  
       <div class="container">
        <div class="row">

            <div class="col m10 offset-m1">
                <div class="question-card">
                    <div class="card-title-main" style="    padding: 20px;">
                        <span class="card-title"><h4>{{$user->name}}</h4></span>
                    </div>
                    <hr>
                    <div class="card-content">
                        
                        <h5>Regno :<b>{{$user->regno}}</b></h5>
                        <h5>Domain :</h5>
                        
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
                        
                        <h5>Why GDG :</h5><div style="text-overflow: ellipsis;overflow: hidden;min-height: 90px;"> {{$user->why_gdg}}</div>
                        <h5>Experience :</h5><div style="text-overflow: ellipsis; overflow: hidden;min-height: 90px;"> {{$user->experience}}</div>
                        @if($user->selected)
                            <b style="color:green">Selected for the next round</b>
                        @else
                            <b>Selected - No status</b>
                        @endif
                        <br>
                        <h5>Marks Awarded :<b> {{$totalMarks}}</b></h5>
                    </div>
                    <div class="card-action">
                        <a href="{{$user->linkedin}}"><i class="fa fa-linkedin fa-1x  " style="color:#5c6bc0 "></i></a>
                        <a href="{{$user->github}}"><i class="fa fa-github fa-1x  " style="color:#5c6bc0 "></i></a>
                        <a href="{{$user->behance}}"><i class="fa fa-behance fa-1x  " style="color:#5c6bc0 "></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
