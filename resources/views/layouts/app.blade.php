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



  
    @yield('content')

    <script>

    $('select').material_select();
    $(".button-collapse").sideNav();

  </script>
</body>
</html>
