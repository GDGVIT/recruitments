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
        <form action="/user/add/domain" method="POST">
        {{ csrf_field() }}

          <input type="text"  id="#domain" name="domains" style="display: none">

        </form>
        <br>
        <button class="custom-submit">Submit</button>
      </div>
    </div>
    <div id="instructions-modal" class="modal">
        <div class="modal-content">
          <h4>Instructions</h4>
          <p>
          <b>Instructions for all the participants</b>
           <ul><li> Make sure your work is genuine and not copied from other sources<b>-10 marks will be awarded if you are found to copy.</b> </li>
            <li>We will be scrutinising your github profiles, so make sure you have all your interesting projects on there. </li></ul>


            <br>
            On top of all this we are looking for people who are having a zeal towards learning new things.

            <h3>FAQ’s</h3>

           <b> Can I attempt any other domain after choosing one domain?</b><br>
              Yes, you can attempt questions from any of the domains<br>

           <b> Can I attempt more than problem statement</b><br>
              There is no restriction on the number of problems you can attempt.<br>

           <b> What is the deadline for submission of the projects/ reports/ designs/ articles?</b><br>
              The last date for submission of the<br>

           <b> When and how will I be notified of results?</b><br>
              We will be sending all the participants that get through to the next round through an     SMS whereas all the participants that did not make it will be receiving an email.<br>

           <b> What if I don’t find any questions from my domain?</b><br>
            Drop us an email on gdgvitvellore@gmail.com and we will send you a suitable problem statement for your domain. <br>

           <b> Are there any restrictions on who can participate?</b><br>
              Yes, this time we will be recruiting only Second (2) Years only.<br>

           <b> I am not a second year, how can I particiapte?</b><br>
            We will not be able to recruit you if you are not a second year, but we will most certainly consider you for the next recruitment if you have the required skill.<br>
          </p>
        </div>
        <div class="modal-footer">
          <a class=" modal-action modal-close btn-flat">Close</a>
        </div>
      </div>
@endsection
