@extends('layouts.app')
<link rel="stylesheet" href="css/postlogin.css">
@section('content')
    <div class="container">
        <div class="row">
            <div class="col m10 offset-m1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <p>Name :{{$user->name}}</p>
                        <p>Regno :{{$user->regno}}</p>
                        <p>Domain :</p>
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
                        </ul>
                        <p>Why GDG :{{$user->why_gdg}}<p/>
                        <p>experience :{{$user->experience}}</p>
                        <p>LinkedIn :{{$user->linkedin}}</p>
                        <p>Github :{{$user->github}}</p>
                        <p>behance :{{$user->behance}}</p>
                        @if($user->selected)
                            <p>Selected for the next round</p>
                            @else
                             <p>Selected - No status</p>
                        @endif
                        <p>Marks Awarded : {{$totalMarks}}</p>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
