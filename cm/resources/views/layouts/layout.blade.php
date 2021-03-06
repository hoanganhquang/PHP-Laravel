<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.ico')}}" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="{{asset('assets/img/apple-icon.png')}}"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>CM</title>

    <meta
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
      name="viewport"
    />
    <meta name="viewport" content="width=device-width" />

    <link href="{{asset('assets/cssHome/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/cssHome/paper-kit.css?v=2.1.0')}}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    {{-- <link
      href="http://fonts.googleapis.com/css?family=Montserrat:400,300,700"
      rel="stylesheet"
    /> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">

    {{-- <link
      href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
      rel="stylesheet"
    /> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="{{asset('assets/cssHome/nucleo-icons.css')}}" rel="stylesheet" />
  </head>

    @yield("content")
    
  <!-- Core JS Files -->
  <script
    src="{{asset('assets/jsHome/jquery-3.2.1.min.js')}}"
    type="text/javascript"
  ></script>
  <script
    src="{{asset('assets/jsHome/jquery-ui-1.12.1.custom.min.js')}}"
    type="text/javascript"
  ></script>
  <script src="{{asset('assets/jsHome/popper.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/jsHome/bootstrap.min.js')}}" type="text/javascript"></script>

  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/jsHome/paper-kit.js?v=2.1.0')}}"></script>
</html>