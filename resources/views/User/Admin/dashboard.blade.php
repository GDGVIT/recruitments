@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col m6 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Registrations ({{$technicalRegistrations+$designRegistrations+$managementRegistrations}})</div>

                    <div class="panel-body">
                        <div id="barchart_div" style="width: 900px; height: 500px;"></div>


                    </div>
                </div>
            </div>

            <div class="col m6 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Submissions ({{$checkedSubmissions+$uncheckedSubmissions}})</div>

                    <div class="panel-body">

                        <div id="piechart_div" style="width: 900px; height: 500px;"></div>
                    </div>
                </div>
            </div>
    </div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">

            // Load Charts and the corechart and barchart packages.
            google.charts.load('current', {'packages':['corechart']});

            // Draw the pie chart and bar chart when Charts is loaded.
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var pieChartData = new google.visualization.DataTable();
                pieChartData.addColumn('string', 'Submissions');
                pieChartData.addColumn('number', 'Problem');
                pieChartData.addRows([

                    ['Checked', {{$checkedSubmissions}}],
                    ['Un-Checked', {{$uncheckedSubmissions}}],
                ]);

                var barChartData = new google.visualization.DataTable();
                barChartData.addColumn('string', 'Registrations');
                barChartData.addColumn('number', 'people');
                barChartData.addRows([
                    ['Technical', {{$technicalRegistrations}}],
                    ['Management', {{$managementRegistrations}}],
                    ['Design', {{$designRegistrations}}],

                ]);

                var piechart_options = {title:'Submissions Pie Chart',
                    width:500,
                    height:500};
                var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
                piechart.draw(pieChartData, piechart_options);

                var barchart_options = {title:'Registrations : GDG Recruitments 2016',
                    width:500,
                    height:500,
                    legend: 'none'};
                var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
                barchart.draw(barChartData, barchart_options);
            }
        </script>


@endsection
