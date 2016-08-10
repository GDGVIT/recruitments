@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <p>Name :{{$user->name}}</p>
                        <p>Regno :{{$user->regno}}</p>
                        <p>Domain :{{$domain}}</p>
                        <p>Why GDG :{{$user->why_gdg}}</p>
                        <p>experience :{{$user->experience}}</p>
                        <p>LinkedIn :{{$user->linkedin}}</p>
                        <p>Github :{{$user->github}}</>
                        <p>behance :{{$user->behance}}</p>
                        @if($user->selected)
                            <p>Selected for the next round</p>
                        @else
                            <p>Selected - No status</>
                        @endif


                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Checked Problems</div>

                    <div class="panel-body">
                        @if(count($checkedProblems)>0)
                            @foreach($checkedProblems as $problem)
                                <ul>
                                <li>
                                    {{--
                                    This could be done with Eloquent Model. Need to think.
                                    --}}
                                    <a href="/problem/show/{{\App\ProblemStatement::where('id', $problem->problem_id)->first()->id}}">
                                    {{\App\ProblemStatement::where('id', $problem->problem_id)->first()->problem_statement}}
                                    </a> ({{$problem->marks}}/100)
                                </li>
                                </ul>
                            @endforeach
                        @else
                            <p style="color: green">No Question has been checked or submitted</p>
                        @endif


                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="panel panel-default">
                    <div class="panel-heading">UnChecked Problems</div>

                    <div class="panel-body">
                        @if(count($unCheckedProblems)>0)
                            @foreach($unCheckedProblems as $problem)
                                <ul>
                                    <li>
                                        {{--
                                        This could be done with Eloquent Model. Need to think.
                                        --}}
                                        <a href="/problem/show/{{\App\ProblemStatement::where('id', $problem->problem_id)->first()->id}}">
                                            {{\App\ProblemStatement::where('id', $problem->problem_id)->first()->problem_statement}}
                                        </a>
                                    </li>
                                </ul>
                            @endforeach
                        @else
                            <p style="color: darkgreen">All the Questions are checked.</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
