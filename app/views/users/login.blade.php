<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Tela de login</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">

			{{ HTML::style( asset('css/bootstrap.min.css') ) }}
			{{ HTML::style( asset('css/bootstrap-responsive.min.css') ) }}
			{{ HTML::style( asset('css/font-awesome.css') ) }}
			{{ HTML::style( asset('css/style.css') ) }}
			{{ HTML::style( asset('css/pages/signin.css') ) }}

		    {{ HTML::script( asset('js/signin.js') ) }}



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

				<form action=" / " method="get">

					<div class="alert">
						<button type="button" class="close" data-dismiss="alert">
							×
						</button>
						<strong>Aviso!</strong> Efetue login para acessar todas as funcionalidades do sistema.
					</div>

					<h1>Login</h1>

					<div class="login-fields">

						<div class="field">
							{{ Form::label('username','Username:') }}
							{{ Form::text('username',Input::old('username'),array('class' => 'login username-field', 'id' => 'username', 'placeholder' => 'Usuário') ) }}
						</div>
						<div class="field">
							{{ Form::label('password','Password:') }}
							<input type="password" id="password" name="password" value="" placeholder="Senha" class="login password-field"/>
						</div>
					</div>
					<div class="login-actions">

						<span class="login-checkbox">
							<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
							<label class="choice" for="Field">Mantenha-me conectado</label> </span>
						<a href="home.php">
						<button class="button btn btn-success btn-large" type="submit">
							Logar
						</button> </a>
					</div>
				</form>

			</div>
		</div>
	</body>

</html>
