@extends('layouts.app')
@extends('layouts.afterloginnav')
<link rel="stylesheet" href="{{url('css/problems.css')}}">
@section('content')
<style>
  .custom-button:focus{
    background: rgb(69,133,234);
    border: none;
    outline: none;
  }
  .custom-button:hover{
    box-shadow: 0 0 7px rgba(0,0,0,0.3);
    transition: 0.3s;
  }
  .custom-button{
    background: rgb(69,133,234);
    outline: none;
    border: none;
    width: 100%;
    padding: 12px 10px 12px 10px;
    margin-top: 5%;
    color: white;
    transition: 0.3s;
    border-radius: 2px;
  }
  .user-name
  {
    font-family: Ubuntu;
    margin-left: 30px;
    font-size: 150%;
    line-height: 18px;
  }
  .user-name span
  {
    color:rgba(70,70,70);
    font-size: 70%;
  }
  .circle-button{
       width: 45px;
    height: 45px;
    border-radius: 50%;
    background: rgb(69,133,234);
    text-align: center;
    color: #fff;
    line-height: 46px;
  }
  </style>
  <br>
  <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col m10 l10 s10 push-m1 push-l1 push-s1">
          <div class="user-name">
            All unchecked submissions
          </div>
          <ul class="collapsible popout" data-collapsible="accordion">
            <li>
              <div class="collapsible-header">Technical</div>
              <div class="collapsible-body">
                @foreach($technicalSubmissions as $submission)
                <div class="user-solution" style="padding:1em;">

                  <h5>
                      @if($submission->checked==1.00)
                          <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                      @endif
                          {{$submission->problem_statement}}.</h5><br>
                                                  <br>
                  <div style="display:flex">
                       <div><a target="_blank" class="custom-button" href="{{$submission->url}}">View Solution</a></div>&nbsp;&nbsp;&nbsp;
                       <div><a target="_blank" class="custom-button" href="/admin/show/user/{{$submission->user_id}}">User Profile</a></div>

                    <div style="margin-left:10px;">
                      <form action = "/admin/award/marks" method="GET">
                        {{csrf_field()}}
                        <input type="hidden" name="userId" value="{{$submission->user_id}}">
                        <input type="hidden" name="questionId" value="{{$submission->problem_id}}">
                               @if($submission->checked!=1.00)
                            <a  class="custom-button" href="#" onclick="$(this).closest('form').submit()">Award Marks</a>

                        @endif

                        </form></div>
                        <div style="    margin-left: 10px;
    margin-top: -23px;">
                          @if($submission->checked==1.00)

                              <span><h5 class="circle-button"><b>{{$submission->marks}}</b></h5></span>

                        @endif
                        </div>


                  </div>


                </div>
                  @endforeach

              </div>
            </li>
            <li>
              <div class="collapsible-header">Management</div>
              <div class="collapsible-body">
                  @foreach($managementSubmissions as $submission)
                      <div class="user-solution" style="padding:1em;">

                          <span><h5>
                          @if($submission->checked==1.00)
                          <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                         @endif
                      {{$submission->problem_statement}}.
                      </h5>
                      <br><br>
                          <div style="display:flex">
                               <div ><a target="_blank" class="custom-button" href="{{$submission->url}}">View Solution</a></div>&nbsp;&nbsp;&nbsp;
                       <div><a target="_blank" class="custom-button" href="/admin/show/user/{{$submission->user_id}}">User Profile</a></div>


                          <div style="margin-left:10px;" ><form action = "/admin/award/marks" method="GET" >
                              {{csrf_field()}}
                              <input type="hidden" name="userId" value="{{$submission->user_id}}">
                              <input type="hidden" name="questionId" value="{{$submission->problem_id}}">
                                @if($submission->checked!=1.00)
                                   <a  class="custom-button" href="#" onclick="$(this).closest('form').submit()">Award Marks</a>

                               @endif
                              </form></div>
                              <div style="    margin-left: 10px;
    margin-top: -23px;">
                                @if($submission->checked==1.00)

                              <span><h5 class="circle-button"><b>{{$submission->marks}}</b></h5></span>

                               @endif
                              </div>


                          </div>

                      </div>
                  @endforeach
              </div>
            </li>
            <li>
              <div class="collapsible-header">Design</div>
              <div class="collapsible-body">
                  @foreach($designSubmissions as $submission)
                      <div class="user-solution" style="padding:1em;">

                          <span><h5>
                          @if($submission->checked==1.00)
                          <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                         @endif
                      {{$submission->problem_statement}}.</h5><br><br>
                          <div style="display:flex">

                               <div ><a target="_blank" class="custom-button" href="{{$submission->url}}">View Solution</a></div>&nbsp;&nbsp;&nbsp;
                       <div><a target="_blank" class="custom-button" href="/admin/show/user/{{$submission->user_id}}">User Profile</a></div>

                          <div style="margin-left:10px;"><form action = "/admin/award/marks" method="GET" >
                              {{csrf_field()}}
                              <input type="hidden" name="userId" value="{{$submission->user_id}}">
                              <input type="hidden" name="questionId" value="{{$submission->problem_id}}">
                                @if($submission->checked!=1.00)
                                   <a  class="custom-button" href="#" onclick="$(this).closest('form').submit()">Award Marks</a>

                               @endif
                              </form></div>
                              <div style="    margin-left: 10px;
    margin-top: -23px;">
                                 @if($submission->checked==1.00)

                              <span><h5 class="circle-button"><b>{{$submission->marks}}</b></h5></span>

                                   @endif
                              </div>


                          </div>


                      </div>
                  @endforeach
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <script>
      $(document).ready(function(){
        $('#change-modal-trigger-mobile').click(function(){
          $('#change-modal').openModal();
        });
      });
    </script>
@endsection
