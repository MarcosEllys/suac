<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="utf-8">
	<title>Tela de login</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">

	{{ HTML::style( asset('plugins/bootstrap/css/bootstrap.min.css') ) }}
	{{ HTML::style( asset('plugins/bootstrap/css/bootstrap-responsive.min.css') ) }}
	{{ HTML::style( asset('css/font-awesome.css') ) }}
	{{ HTML::style( asset('css/style.css') ) }}
	{{ HTML::style( asset('css/pages/signin.css') ) }}

	{{ HTML::script( asset('js/signin.js') ) }}
	{{ HTML::script( asset('js/jquery-1.7.2.min.js') ) }}
	{{ HTML::script( asset('plugins/bootstrap/js/bootstrap.js') ) }}

	<link rel="{{ asset('favicon.ico') }}">

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

</head>

<body>

	<div class="navbar navbar-fixed-top">

		<div class="navbar-inner">

			<div class="container">

				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>

				<a class="brand"> Sistema Único de Assistência ao CRAS - SUAC </a>

			</div>
		</div>
	</div>
	<div class="account-container">

		<div class="content clearfix">

			{{ Form::open(array('action' => 'UsersController@validate')) }}
			
			@include('layout._errors')

			<h1>Tela de Login</h1>

			<div class="login-fields">

				<p>Todos os campos são obrigatórios</p>

				<div class="field">
					{{ Form::label('username','Username:') }}
					{{ Form::text('username',Input::old('username'),array('class' => 'login username-field', 'id' => 'username', 'placeholder' => 'Usuário','autofocus', 'required') ) }}
				</div>
				<div class="field">
					{{ Form::label('password','Password:') }}
					<input type="password" id="password" name="password" required value="" placeholder="Senha" class="login password-field">
				</div>
			</div>
			<div class="login-actions">

				<!-- <span class="login-checkbox">
					<label class="choice" for="Field">Recuperar senha</label> 
				</span> -->

				{{ Form::submit('Entrar', array('class' => 'button btn btn-success btn-large')) }}

			</div>
			{{ Form::close(); }}

		</div>
	</div>
</body>

</html>