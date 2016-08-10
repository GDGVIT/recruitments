@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

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

            {{--
            Playing with charts
            --}}

            <div class="col-md-6 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Checked/UnChecked Problems</div>

                    <div class="panel-body">
                        <div  id="piechart_3d" style="width: 100%; height: 500px;"></div>

                    </div>
                </div>
            </div>


    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Checked vs Un-Checked Problems'],
                ['Checked',     {{count($checkedProblems)}}],
                ['Unchecked',      {{count($unCheckedProblems)}}]

            ]);

            var options = {
                title: 'Checked v/s Un-Checked Problems',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
@endsection
