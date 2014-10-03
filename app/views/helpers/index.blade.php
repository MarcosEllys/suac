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
							<a href=" {{ URL("/") }} "><i class="icon-dashboard"></i> Home</a>
						</li>
						<li class="active">
							/ <i class="icon-facetime-video"></i> Ajuda
						</li>
					</ol>

					<br>

					<div class="widget">

						<div class="widget-header">
							<i class="icon-pushpin"></i>
							<h3>Dúvidas frequentes</h3>
						</div>

						<div class="widget-content">

							<h3>Buscar</h3>

							<br>

							<ol class="faq-list">

								<li>
									<h4>Cadastrar usuário</h4>
									<p>

										<br>

										<strong> Siga os seguintes passos. </strong>

										<br>
										<br>

										01 - selecione a aba "Administrativo". <br>
										02 - clique em "<a href="#">Usuários</a>". <br>
										03 - clique em "<a href="#">Cadastrar usuário</a>". <br>
										04 - Na aba Dados pessoais preencha as seguintes informações. <br>
										05 - Preencha o campo nome. <br>
										06 - Marque a opção de sexo correspondente. <br>
										07 - Preencha o campo data de nascimento no seguinte formato AAAA-MM-DD. <br>
										08 - Preencha o campo cpf. <br>
										09 - Preencha o campo rg. <br>
										10 - Selecione o orgão expedidor do rg. <br>
										11 - Selecione o estado em que o rg foi emitido. <br>
										12 - Preencha o campo data de emissão de rg no seguinte formato AAAA-MM-DD. <br>
										13 - Preencha o campo telefone para contato com 1 número de telefone do usuário a ser cadastrado. <br>
										14 - 


									</p>

								</li>

								<li>
									<h4>Cadastrar pessoa referenciada</h4>
									<p>

										<br>

										<strong> Siga os seguintes passos. </strong>

										<br>
										<br>

										01 - Bla bla. <br>
										02 - Bla bla. <br>
										03 - Bla bla. <br>
										04 - Bla bla. <br>
										05 - Bla bla. <br>

									</p>

								</li>

								<li>

									<h4>Cadastrar unidade</h4>
									<p>

										<br>

										<strong> Siga os seguintes passos. </strong>

										<br>
										<br>

										01 - Bla bla. <br>
										02 - Bla bla. <br>
										03 - Bla bla. <br>
										04 - Bla bla. <br>
										05 - Bla bla. <br>

									</p>

								</li>

								<li>
									<h4>Agendar atendimento</h4>
									<p>

										<br>

										<strong> Siga os seguintes passos. </strong>

										<br>
										<br>

										01 - selecione a aba "Assistência Cras". <br>
										02 - clique em "<a href="#">Agendar atendimento</a>". <br>
										03 - Selecione uma pessoa referenciada. <br>
										04 - Informe a data do atendimento. <br>
										05 - Selecione o tipo de atendimento. <br>
										06 - Clique em agendar. <br>

										<br>

										<a href=" {{ URL("ajuda/agendaratendimento") }} ">Clique aqui</a> e confira um tutorial.

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
