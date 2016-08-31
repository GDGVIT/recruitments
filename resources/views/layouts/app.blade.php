<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GDG Recruitments 2016</title>
    <link rel="stylesheet" href="{{url('css/materialize.min.css')}}"">
    <link rel="stylesheet" href="{{url('css/home.css')}}"">
   <link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet ' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="{{url('js/jquery.js')}}"></script>
    <script src="{{url('js/materialize.min.js')}}"></script>
    <script src="{{url('js/sweetalert2.min.js')}}"></script>
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        .text-center{
            text-align: center;
        }
    </style>
</head>
<body>
<script  type="text/javascript" src="{{url('js/problemsLoader.js')}}"></script>
<script  type="text/javascript" src="{{url('js/domainSelector.js')}}"></script>
<script type="text/javascript" src="{{url('js/smoothscroll.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery-visible.min.js')}}"></script>
<script type="text/javascript"  src="{{url('js/individualproblem.js')}}"></script>
<script  type="text/javascript" src="https://use.fontawesome.com/8aa6edd1c8.js"></script>
  <script>
 $(document).ready(function() {
    $('#change-modal-trigger').click(function(){
    $('#change-modal').openModal();
  });
  $('.modal-trigger').leanModal();
  });
  
  </script>
   <script>
    $('.problems-nav-options').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: true, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    });
  
  </script>


  
    @yield('content')

    <script>

    $('select').material_select();
    $(".button-collapse").sideNav();

  </script>
   <script type="text/javascript">
      $("input[name=submitting-file]").on('change', function(event) {
          
          $("#link").prop("disabled" , true);
          /* Act on the event */
      });
  </script>
</body>
</html>
