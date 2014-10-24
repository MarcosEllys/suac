<!DOCTYPE html>
<html lang="pt-br">
<head>

  <title>SUAC - Sistema Único de Assistência ao CRAS</title>

  <meta charset="utf-8">

  <meta name="description" content="Sistema para unidades de Assistência Social">

  <meta name="keyowrds" content="cras,suac,suas,mds">

  <meta name="author" content="Marcos Ellys">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
  <meta name="apple-mobile-web-app-capable" content="yes">

  {{-- Imports --}}

  @yield('header')

  {{ HTML::style( asset('plugins/bootstrap/css/bootstrap.min.css') ) }}
  {{ HTML::style( asset('plugins/bootstrap/css/bootstrap-responsive.min.css') ) }}
  {{ HTML::style( asset('css/font-awesome.css') ) }}
  {{ HTML::style( asset('css/style.css') ) }}
  {{ HTML::style( asset('css/pages/dashboard.css') ) }}


  {{ HTML::script( asset('js/jquery-1.7.2.min.js') ) }}
  {{ HTML::script( asset('plugins/bootstrap/js/bootstrap.js') ) }}
  {{ HTML::script( asset('js/base.js') ) }}

  <link rel="{{ asset('favicon.ico') }}">

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

</head>
<body>


  @include('/layout/top') 

  @include('/layout/navbar')

  @yield('content')

  @include('/layout/footer')
  

</body>
</html>