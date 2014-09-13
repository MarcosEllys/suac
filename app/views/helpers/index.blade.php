@extends('layout.master')

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">

		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap-responsive.min.css" rel="stylesheet">

		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
		<link href="../css/font-awesome.css" rel="stylesheet">

		<link href="../css/style.css" rel="stylesheet">

		<link href="../css/pages/faq.css" rel="stylesheet">

		</head>


		@section('content')

		
		<div class="main">

			<div class="main-inner">

				<div class="container">

					<div class="row">

						<div class="span12">
							
							
							<ol class="breadcrumb">
								<li>
									<a href="/"><i class="icon-dashboard"></i> Home</a>
								</li>
								<li class="active">
									/ <i class="icon-facetime-video"></i> Ajuda
								</li>
							</ol>
							
							<br />

							<div class="widget">

								<div class="widget-header">
									<i class="icon-pushpin"></i>
									<h3>Dúvidas frequentes</h3>
								</div>
							
								<div class="widget-content">

									<h3>Buscar</h3>

									<br />

									<ol class="faq-list">

										<li>
											<h4>Cadastrar Pessoa referenciada</h4>
											<p>
												Cadastrar Pessoa referenciada	Cadastrar Pessoa referenciada	Cadastrar Pessoa referenciada
												Cadastrar Pessoa referenciada	Cadastrar Pessoa referenciada	Cadastrar Pessoa referenciada
												Cadastrar Pessoa referenciada	Cadastrar Pessoa referenciada.
											</p>

										</li>

										<li>
											<h4>Cadastrar família</h4>
											<p>

												Cadastrar família Cadastrar família Cadastrar família Cadastrar família Cadastrar família
												Cadastrar família Cadastrar família Cadastrar família Cadastrar família Cadastrar família
												Cadastrar família Cadastrar família Cadastrar família Cadastrar família .

											</p>

										</li>

										<li>

											<h4>Incluir um membro na família</h4>
											<p>

												Incluir um membro na família Incluir um membro na família Incluir um membro na família
												Incluir um membro na família Incluir um membro na família Incluir um membro na família
												Incluir um membro na família Incluir um membro na família Incluir um membro na família
												Incluir um membro na família Incluir um membro na família Incluir um membro na família

											</p>

										</li>

										<li>
											<h4>Agendar atendimento</h4>
											<p>

												Para agendar um atendimento é muito simples.
												<br>
												<br>
												1 - selecione a aba "Assistência Cras".
												<br>
												2 - clique em "<a href="../agendamento.php">Agendar atendimento</a>".
												<br>
												3 - Selecione uma pessoa referenciada.
												<br>
												4 - Informe a data do atendimento.
												<br>
												5 - Selecione o tipo de atendimento.
												<br>
												6 - Clique em agendar.
												<br>
												<br>

												<a href="atendimento.php">Clique aqui</a> e confira um tutorial.

											</p>

										</li>

									</ol>

								</div>							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="../js/jquery-1.7.2.min.js"></script>

		<script src="../js/bootstrap.js"></script>
		<script src="../js/base.js"></script>
		<script src="../js/faq.js"></script>

		<script>
			$(function() {

				$('.faq-list').goFaq();

			});

		</script>

		@stop

</html>
