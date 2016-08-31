@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/problems.css')}}">
@section('content')
    <nav>
        <div class="nav-wrapper problems-nav">
            <a href="/"><img src="{{url('images/gdglogo.png')}}" alt="GDG VIT Vellore" style="width: 15%;"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#"  id="change-modal-trigger" style="color: white">Change Domain</a></li>
                <li><a href="/problems" class="right" style="color: white">Problems</a></li>
                <li><a class='dropdown-button btn right problems-nav-options' href='#' data-activates='dropdown1'><b>{{\Illuminate\Support\Facades\Auth::user()->name}}</b><span class="caret"></span></a>
                </li>

            </ul>
        </div>
    </nav>
    <!-- Dropdown Structure -->
    <ul id='dropdown1' class='dropdown-content'>
        <li><a href="/user/profile">Profile</a></li>
        <li><a class="modal-trigger" href="#instructions-modal">Instructions</a></li>
        <li><a href="http://gdgvitvellore.com" target="_blank">Contact Us</a></li>
        <li><a href="/logout">Logout</a></li>

    </ul>
    <div class="container">
        <div class="row">

            <div class="col m10 offset-m1">
                <div class="card">
                    <div class="card-title-main" style="    padding: 20px;">
                        <span class="card-title">{{$user->name}}</span>
                    </div>
                    <hr>
                    <div class="card-content">
                        <p></p>
                        <p>Regno :{{$user->regno}}</p>
                        {{--<p>Domain :</p>
                        <ul>
                            @foreach($domains as $domain)
                                @if($domain->domain_id=='1')
                                    <li>- Technical</li>
                                @elseif($domain->domain_id=='2')
                                    <li>- Management</li>
                                @elseif($domain->domain_id=='3')
                                    <li>-   Design</li>
                                @endif
                            @endforeach
                        </ul>--}}
                        <p>Why GDG :{{$user->why_gdg}}<p/>
                        <p>Experience :{{$user->experience}}</p>
                        @if($user->selected)
                            <p>Selected for the next round</p>
                        @else
                            <p>Selected - No status</p>
                        @endif
                        <p>Marks Awarded : {{$user->marks}}</p>
                    </div>
                    <div class="card-action">
                        <a href="{{$user->linkedin}}">LinkedIn </a>
                        <a href="{{$user->github}}">Github</a>
                        <a href="{{$user->behance}}">Behance</a>
                        <a href="/user/{{$user->id}}/submissions">View Submissions</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
