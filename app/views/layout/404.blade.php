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
			
			{{ HTML::link('/', 'Sistema Único de Assistência ao CRAS - SUAC', array('class' => 'brand')) }}		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					<li class="">						
						<a href="/" class="">
							<i class="icon-chevron-left"></i>
							Voltar para o inicio
						</a>
						
					</li>
				</ul>

			</div>
		</div> 
	</div> 
</div> 


<div class="container">
	
	<div class="row">
		
		<div class="span12">
			
			<div class="error-container">
				<h1>404</h1>
				
				<h2>Who! bad trip man. No more pixesl for you.</h2>
				
				<div class="error-details">
					Desculpe, an error has occured! Why not try going back to the <a href="/">página home</a> or perhaps try following!
					
				</div> 

				<div class="error-actions">
					<a href="/" class="btn btn-large btn-primary">
						Voltar para o inicio						
					</a>
					
					
					
				</div>		
			</div> 
		</div> 
	</div> 
</div>

</body>
</html>
