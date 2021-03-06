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
<link rel="stylesheet" href="{{url('css/modal.css')}}">
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
        button[disabled], html input[disabled] {
            cursor:no-drop;
        }
        [type="checkbox"].filled-in:checked+label:before {
    top: 0;
    left: 1px;
    width: 8px;
    height: 13px;
    border-top: 2px solid transparent;
    border-left: 2px solid transparent;
    border-right: 2px solid #528ff5 !important;
    border-bottom: 2px solid #528ff5 !important;
    -webkit-transform: rotateZ(37deg);
    transform: rotateZ(37deg);
    -webkit-transform-origin: 100% 100%;
    transform-origin: 100% 100%;
}
input[type="checkbox"].filled-in:checked + label:after {
    border: 2px solid #528ff5!important;
    background-color: transparent!important;
}
    </style>
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83605119-1', 'auto');
  ga('send', 'pageview');

</script>
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
  $('#change-modal-trigger-mobile').click(function(){
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
  $("#custom-submit").prop("disabled",true);
  $("input[name=url]").on("change", function(){
    var url = $(this).val();

    if (url.includes("http://") != 0 || url.includes("https://") != 0){
     $("#custom-submit").prop("disabled",false);
   }else  {
    $("#custom-submit").prop("disabled",true);
  }

})
  $("input[name=submission]").on("change", function(){
    var file = $(this).val();
    if( file == null){
      $("#custom-submit").prop("disabled",true);
    }
    else{
       $("#custom-submit").prop("disabled",false);
    }
  })

  </script>
</body>
</html>
