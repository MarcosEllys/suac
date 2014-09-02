<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SUAC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <link href="{{asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{asset('css/bootstrap-responsive.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{asset('css/font-awesome.css') }}" type="text/css" rel="stylesheet">
  <link href="{{asset('css/style.css') }}" type="text/css" rel="stylesheet">
  <link href="{{asset('css/pages/dashborad.css') }}" type="text/css" rel="stylesheet">


  <link href="{{asset('js/jquery-1.7.2.min.js') }}" type="text/css" rel="stylesheet">
  <link href="{{asset('js/bootstrap.js') }}" type="text/css" rel="stylesheet">
  <link href="{{asset('js/base.js') }}" type="text/css" rel="stylesheet">
    
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

  @yield('header') 

</head>
<body>


  @yield('top')

  
  @yield('navbar')

  <?php

  /* Menu principal */

  include_once('navbar.php');

  ?>

@yield('content')


@yield('rodape')



</body>
</html>
