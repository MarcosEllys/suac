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
										02 - clique em "<a href=" {{URL("users")}} ">Usuários</a>". <br>
										03 - clique em "<a href=" {{ URL("users/create") }} ">Cadastrar usuário</a>". <br>
										04 - Na aba "Dados pessoais" preencha as seguintes informações. <br>
										05 - Preencha o campo nome. <br>
										06 - Marque a opção de sexo correspondente. <br>
										07 - Preencha o campo data de nascimento no seguinte formato AAAA-MM-DD. <br>
										08 - Preencha o campo cpf. <br>
										09 - Preencha o campo rg. <br>
										10 - Selecione o orgão expedidor do rg. <br>
										11 - Selecione o estado em que o rg foi emitido. <br>
										12 - Preencha o campo data de emissão de rg no seguinte formato AAAA-MM-DD. <br>
										13 - Preencha o campo telefone para contato. <br>
										<br>
										Dados do sistema<br>
										<br>
										14 - Preencha o campo login com o nome para acesso ao sistema.<br>
										15 - Preencha o campo senha com uma senha para acesso ao sistema.<br>
										16 - Repita a senha no campo seguinte.<br>
										17 - Preencha o campo email.<br>
										18 - Selecione o tipo de usuário a ser cadastrado no sistema.<br>
										19 - Clique na aba "Dados sobre endereço".<br>
										20 - Preencha o campo cep somente com números.<br>
										21 - Preencha o campo rua.<br>
										22 - Preencha o campo bairro.<br>
										23 - Preencha o campo número.<br>
										24 - Preencha o campo complemento.<br>
										25 - Preencha o campo ponto de referência.
										26 - Clique no botão salvar para confirmar o cadastro.<br><br>


										<a href="#">Clique aqui</a> e confira um tutorial.



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

										01 - selecione a aba "Administrativo".<br>
										02 - clique em "<a href=" {{URL("unidades")}} ">Unidades</a>".<br>
										03 - clique em "<a href=" {{ URL("unidades/create") }} ">Cadastrar unidade</a>".<br>
										03 - Preencha o campo nome da unidade. <br>
										04 - Preencha o campo rua.<br>
										05 - Preencha o campo bairro.<br>
										06 - Preencha o campo número.<br>
										07 - Preencha o campo complemento.<br>
										08 - Selecione o tipo de unidade.<br>
										09 - Clique no botão salvar para confirmar o cadastro.<br><br>


										<a href=" {{ URL("ajuda/createunidade") }} ">Clique aqui</a> e confira um tutorial.

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
