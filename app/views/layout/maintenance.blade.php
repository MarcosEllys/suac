<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>SUAC - Sistema Único de Assitência ao CRAS</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
	    
    {{ HTML::style( asset('css/bootstrap.min.css') ) }}
    {{ HTML::style( asset('css/bootstrap-responsive.min.css') ) }}
    {{ HTML::style( asset('css/awesome.css') ) }}
    {{ HTML::style( asset('css/style.css') ) }}
	
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

	{{ HTML::script( asset('js/jquery-1.7.2.min') ) }}
	{{ HTML::script( asset('js/boostrstrap') ) }}
	   
</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			{{ HTML::link('#', 'SUAC - Sistema Único de Assistência ao CRAS', array('class' => 'brand')) }}		
			
			
		</div> 
	</div> 
</div> 


<div class="container">
	
	<div class="row">
		
		<div class="span12">

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			
			<div class="error-container">
				
				<h2>
					Entramos em manutenção! Volte novamente das 7:00 as 18:00.
				</h2>
				
			</div> 
		</div> 
	</div> 
</div>

</body>
</html>
