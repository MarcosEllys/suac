<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Dashboard - SUAC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <link href="{{asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{asset('css/bootstrap-responsive.min.css') }}" type="text/css" rel="stylesheet">
  

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/pages/dashboard.css" rel="stylesheet">
  
  <script src="js/jquery-1.7.2.min.js"></script> 
  <script src="js/bootstrap.js"></script>  
  <script src="js/base.js"></script>
  
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

  @yield('header') 

</head>
<body>


  @yield('top')

  <?php

  /* Menu principal */

  include_once('top.php');

  ?>

  
  @yield('navbar')

  <?php

  /* Menu principal */

  include_once('navbar.php');

  ?>

@yield('content')

@yield('rodape')

<?php

/* Rodapé do site */

include_once('footer.php');

?>

</body>
</html>
