@extends('layouts.app')
@extends('layouts.afterloginnav')
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
  </style>
  
    <div class="container-fluid">
      <div class="row">
        <div class="col m10 l10 s10 push-m1 push-l1 push-s1">
          <div class="user-name">
            John Doe<br><span>15BCE0001</span>
          </div>
          <ul class="collapsible popout" data-collapsible="accordion">
            <li>
              <div class="collapsible-header">Technical</div>
              <div class="collapsible-body">
                <div class="user-solution">
                  <p><span>1.&nbsp</span>Lorem ipsum dolor sit amet.</p>
                  <a target="_blank" class="custom-button" href="#">View Solution</a>
                </div>
                <div class="user-solution">
                  <p><span>2.&nbsp</span>Lorem ipsum dolor sit amet.</p>
                  <a target="_blank" class="custom-button" href="#">View Solution</a>
                </div>
                <div class="user-solution">
                  <p><span>3.&nbsp</span>Lorem ipsum dolor sit amet.</p>
                  <a target="_blank" class="custom-button" href="#">View Solution</a>
                </div>
              </div>
            </li>
            <li>
              <div class="collapsible-header">Management</div>
              <div class="collapsible-body">
                <div class="user-solution">
                  <p><span>1.&nbsp</span>Lorem ipsum dolor sit amet.</p>
                  <a target="_blank" class="custom-button" href="#">View Solution</a>
                </div>
                <div class="user-solution">
                  <p><span>2.&nbsp</span>Lorem ipsum dolor sit amet.</p>
                  <a target="_blank" class="custom-button" href="#">View Solution</a>
                </div>
                <div class="user-solution">
                  <p><span>3.&nbsp</span>Lorem ipsum dolor sit amet.</p>
                  <a target="_blank" class="custom-button" href="#">View Solution</a>
                </div>
              </div>
            </li>
            <li>
              <div class="collapsible-header">Design</div>
              <div class="collapsible-body">
                <div class="user-solution">
                  <p><span>1.&nbsp</span>Lorem ipsum dolor sit amet.</p>
                  <a target="_blank" class="custom-button" href="#">View Solution</a>
                </div>
                <div class="user-solution">
                  <p><span>2.&nbsp</span>Lorem ipsum dolor sit amet.</p>
                  <a target="_blank" class="custom-button" href="#">View Solution</a>
                </div>
                <div class="user-solution">
                  <p><span>3.&nbsp</span>Lorem ipsum dolor sit amet.</p>
                  <a target="_blank" class="custom-button" href="#">View Solution</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
<!--     <div class="container">
        <div class="row">
            <div class="col m10 offset-m1">

                @if(count($submissions)>0)
                    @foreach($submissions as $submission)
                    <div class="panel panel-default">

                            <div class="panel-heading">Question {{$submission->problem_id}}</div>


                        <div class="panel-body">
                        <p>Marks Awarded : {{$submission->marks}}</p>
                            <p>Submitted at : {{$submission->created_at}}</p>
                            <p>Link : <a href="{{$submission->url}}">Here</a> </p>
                            @if($submission->checked!=1.00)
                            <form action = "/admin/award/marks" method="GET">
                                {{csrf_field()}}
                                <input type="hidden" name="userId" value="{{$submission->user_id}}">
                                <input type="hidden" name="questionId" value="{{$submission->problem_id}}">
                                <button class="btn btn-primary" type="submit" >Award Marks</button>
                            </form>
                            @endif
                    </div>
                    </div>
                    @endforeach
                    @else
                        <div>
                            <p style="color: red">No submissions from the user till now</p>
                        </div>
                    @endif
            </div>
        </div>
    </div> -->
@endsection
