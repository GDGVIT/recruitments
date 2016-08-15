@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col m10 offset-m1">

                <div class="col-md-12">
                    <p style="color: green;">Following people are shortlisted</p>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Reg No</th>
                        <th>Marks</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($people as $candidate)
                    <tr>
                        <td>{{$candidate->name}}</td>
                        <td>{{$candidate->regno}}</td>
                        <td>{{$candidate->marks}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
@endsection
