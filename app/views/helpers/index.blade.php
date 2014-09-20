@extends('layout.master')

@section('header')

	@parent

	{{ HTML::style( asset('css/pages/faq.css') ) }}

@stop


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
											2 - clique em "<a href="#">Agendar atendimento</a>".
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

											<a href="#">Clique aqui</a> e confira um tutorial.

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


	<script src="{{ asset("js/faq.js") }}"></script>

	<script>
	$(function(){

		$('.faq-list').goFaq();

	});

	</script>

@stop
